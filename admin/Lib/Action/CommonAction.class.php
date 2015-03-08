<?php
/**
* commAction 公共类
*/
class CommonAction extends Action{
	//自动加载
	public function _initialize(){

		if( !isset( $_SESSION[C('USER_AUTH_KEY')] ) ){
			$this->redirect('Login/login');
		}

		//不用验证的
		$arr = explode( ',', C('NOT_AUTH_MODULE') );
		if( !in_array( MODULE_NAME, $arr ) || !in_array( ACTION_NAME, $arr ) ){
			if( C('USER_AUTH_ON') ){
				import('ORG.Util.RBAC');
				if( !RBAC::AccessDecision() ){
					$this->error( '您没有权限' );
				}
			}
		}
	}
}
?>