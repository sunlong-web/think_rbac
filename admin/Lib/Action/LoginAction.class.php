<?php
class LoginAction extends Action{

	//登录
	public function login(){
		$this->display();
	}


	//登录
	public function postLogin(){
		if( !IS_POST ){
			$this->error( '页面不存在', U('login') );
		}

		if( md5( $_POST['code'] ) != $_SESSION['verify'] ){
			$this->error( '验证码输入错误，请重新输入' );
		}

		$username = $_POST['username'];
		$passwd = md5( $_POST['password'] );

		//验证
		$res = M('user')->where( array( 'username'=>$username, 'password'=>$passwd ) )->find();
		if( !$res ){
			$this->error( '账号或者密码错误，请重新输入!' );
		}

		session( C('USER_AUTH_KEY'), $res['id'] );
		session( 'username', $res['username'] );

		//超级管理员识别
		if( $res['username'] == C('RBAC_SUPERADMIN') ){
			session( C('ADMIN_AUTH_KEY', TRUE ) );
		} 

		//引入rbac  ， 读取用户权限
		import('ORG.Util.RBAC');
		RBAC::saveAccessList();

		$this->redirect( 'Index/index' );
	}

	//验证码
	public function verify(){
		import( 'ORG.Util.Image' );
		Image::buildImageVerify(4,1,'png',80,25);
	}

	//退出登陆
	public function destory(){
		session(null);
		$this->redirect( 'login' );
	}
}
?>