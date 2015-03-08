<?php
class DbAction extends Action{
	public function index(){
		$d=D('Tpoint');
		$count=$d->count();
		import('ORG.Util.Page');
		$Page=new Page($count,10);
		$show=$Page->show();
		$data=$d->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign(array(
			'data'=>$data,
			'show'=>$show		
		));
		$this->display();
	}
	
}