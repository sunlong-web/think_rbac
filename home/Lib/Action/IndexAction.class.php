<?php
// 本类由系统自动生成，仅供测试用途
//显示与查询加分页组合
class IndexAction extends Action {
    public function index(){
    	$Data = M('permes');                            // 实例化Data数据对象
    	
    	//有传入的条件
    	if(!empty($_GET['name'])){
    		$sql[]="pname like  '%{$_GET['name']}%'";
    	}
    	if(!empty($_GET['zhiwei'])){
    		$sql[]="pclass like '%{$_GET['zhiwei']}%'";
    	}
    	if(count($sql)>0){
    		$where=implode(' and ', $sql);
    	}
    	
    	if(!isset($_GET['submit'])){  	
    		$count = $Data->count();             // 查询总记录数
    	}else{
    		$count=$Data->where($where)->count();   //带入查询条件求总数
    	}
    	
    	import('ORG.Util.Page');                      // 导入分页类
    	$Page = new Page($count,10);   // 实例化分页类 传入总记录数    	 
    	$Page->setConfig('theme','%upPage% %first% %prePage% %linkPage% %nextPage% %downPage% %end% %nowPage%/%totalPage%页 共%totalRow% %header%');
    	$show = $Page->show();            // 分页显示输出
    	//控制查询分页
    	if(!isset($_GET['submit'])){
    		$list = $Data->limit($Page->firstRow.','.$Page->listRows)->select();   // 进行分页数据查询
    	}else{
    		$list=$Data->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();   //带入查询条件
    	}
    	
    	//分配赋值
    	$this->assign(array(
    			'user'=>$list,               //赋值数据集
    			'page'=>$show,         //赋值分页输出
    	)); 
    	
    	$this->display();                 // 输出模板
    }
    
    

    //批量删除，单个删除组合
    public function del(){
    	$id=$_GET['id'];   //获取传递过来的id
    	
    	//批量执行删除
    	if($_POST['submit1']){
    		$note_id=$_POST['note_id'];
			
			
			
    		if(count($note_id)>1){
    			while(list($name,$value)=each($note_id)){
    				$a.="$value".",";
    			}
    			$a= substr($a,0,-1);
    			$sql= "  id in(".$a.")";
    		}
    		else{
    			$sql= "  id = ".$note_id[0];
    		}
    		if(M('permes')->where($sql)->delete()){
    			$this->success('批量删除成功',U('index'));
    		}else{
    			$this->error('批量删除失败');
    		}
    	}else{
    		if(M('permes')->where(array('id'=>$id))->delete()){       //执行删除
    			$this->success('删除成功',U('index'));
    		}
    		else{
    			$this->error('删除失败');
    		}
    	}
    }
    
    
    //添加页面
    public function adduser(){
    	 $this->display();
    }
    //添加页面的提交
    public function postadduser(){
    	if(!IS_POST){
    		$this->error('你的操作非法！');		
    	}else{
    		$data=array(
    			'pid'	=>$_POST['pid'],
    			'pname'=>$_POST['pname'],
    			'pbranch'=>$_POST['pbranch'],
    			'pclass'=>$_POST['pclass'],
    		);
    		if(M('permes')->data($data)->add()){
    			$this->success('添加成功！',U('index'));
    		}else{
    			$this->error('添加错误');
    		}
   	 	}
    }
    

    //验证码
    public function verify(){
    	import('ORG.Util.Image');
    	Image::buildImageVerify(4,5,'png',50,20);
    }
    
    //上传头像
    public function Up(){
    	$this->display();
    }
    
    //上传头像处理
    public function upfile() {
    	 $path = APP_PATH."Uploads/";
    	 
    	$file_src = time()."_src.png";
    	$filename162 = time()."_6.png";
    	$filename48 = time()."_5.png";
    	$filename20 = time()."_4.png";
    
    	$src=base64_decode($_POST['pic']);
    	$pic1=base64_decode($_POST['pic1']);
    	$pic2=base64_decode($_POST['pic2']);
    	$pic3=base64_decode($_POST['pic3']);
    
    	if($src) {
    		file_put_contents($file_src,$src);
    	}
    
    	file_put_contents($path.$filename162,$pic1);
    	file_put_contents($path.$filename48,$pic2);
    	file_put_contents($path.$filename20,$pic3);
    	
    	$rs['status'] = 1; 
    	
    	echo json_encode($rs); 
    }
    
    //关联操作
    public function Gl(){
        echo '<meta charset="utf-8">';
    	$d=D('Permes');
    	$arr=$d->where('pid=24')->relation(true)->select();
    	dump($arr);
    }


    public function test(){
        $this->display();
    }
    
}