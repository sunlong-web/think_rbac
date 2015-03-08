<?php
// 本类由系统自动生成，仅供测试用途
class RbacAction extends CommonAction {
    
    //首页
	public function index(){
		$this->display();
	}


	//添加角色
	public function addRole(){
		
		if( $_POST ){
			$_POST['create_time'] = time();
			$res = M('role')->add( $_POST );
			if( $res ){
				$this->success( '添加成功' );
			}else{
				$this->error( '添加失败' );
			}
		}else{
			$this->display();
		}
		
	}

	//角色列表
	public function roleList(){
		$list = M('role')->where( 'status = 1' )->select();
		$this->assign( 'list', $list );
		$this->display();
	}


	//添加节点
	public function addNode(){
		if( $_POST ){
			$res = M('node')->add( $_POST );
			if( $res ){
				$this->success( '添加成功', U('nodeList') );
			}else{
				$this->error('添加失败');
			}
		}else {
			$pid = isset( $_GET['pid'] ) ? $_GET['pid'] : 0;
			$level = isset( $_GET['level'] ) ? $_GET['level'] : 1;

			switch ( $level ) {
				case '1':
					$type = '应用';
					break;
				case '2':
					$type = '控制器';
					break;
				case '3':
					$type = '方法';
					break;
			}

			$this->assign( array( 'pid'=>$pid, 'level'=>$level, 'type'=>$type ) );
			$this->display();
		}
	}


	//节点列表
	public function nodeList(){
		$res = M('node')->order( 'sort' )->select();
		$node = node_merge( $res );

		$this->assign( 'list', $node );
		$this->display();
	}

	//权限配置
	public function access(){
		if( !$_GET['rid'] ){
			$this->error('参数错误，没有获取到角色的id');
		}else{
			//获取原有权限
			$access = M('access')->where( 'role_id = '.$_GET['rid'] )->field('node_id')->select();
			//二维数组变成一维
			foreach ( $access as $v ){
				$arr[] =  $v['node_id'];
			}
			//节点的列表
			$res = M('node')->order( 'sort' )->select();
			$node = node_merge( $res, $arr );
			$this->assign( 'rid', $_GET['rid'] );
			$this->assign( 'list', $node );
			$this->display();
		}
	}

	//权限配置
	public function setAccess(){
		$rid = $_POST['rid'];
		$db = M('access');
		//清楚以前的权限
		$db->where( 'rid = '.$rid )->delete();

		$data = array();
		foreach( $_POST['access'] as $v ){
			$tmp = explode( '_', $v );
			$data[] = array(
				'role_id'=>$rid,
				'node_id'=>$tmp[0],
				'level'=>$tmp[1]
			);
		}

		$res = $db->addAll( $data );
		if( $res ){
			$this->success('添加成功');
		}else{
			$this->error( '添加失败' );
		}
	}

	//添加用户
	public function addUser(){
		if( $_POST ){
			$user['username'] = $_POST['username'];
			$user['password'] = $_POST['password'];
			$user['email'] = $_POST['email'];
			$user['create_time'] = time();
			$userid = M('user')->add( $user );

			if(!$userid){
				$this->error( '添加失败' );
			}

			if( $_POST['role_id'] ){
				$role = array();
				foreach ( $_POST['role_id'] as $v ){
					$role[] = array(
						'role_id'=>$v,
						'user_id'=>$userid,
					);
				}

				//加入权限
				M('role_user')->addAll( $role );

				$this->success( '添加成功' );
			}
		}else{
			$role = M('role')->select();
			$this->assign( 'role', $role );
			$this->display();
		}
	}

}