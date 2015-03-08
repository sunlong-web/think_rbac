<?php
	return array(
		'DB_HOST'=>'localhost',  
		'DB_USER'=>'root',
		'DB_PWD'=>'',
		'DB_NAME'=>'manage',
		'DB_PREFIX'=>'xwh_',

		//STU_DB 数据库
		'STU_DB'=>array(
			'db_type' => 'mysql','db_user' => 'root','db_pwd' => '','db_host' => 'localhost','db_name' => 'sh__U',
		),

		//RBAC 认证
		'RBAC_SUPERADMIN'=>'admin',
		'ADMIN_AUTH_KEY'=>'superadmin',
		'USER_AUTH_ON'=>true,
		'USER_AUTH_TYPE'=>1,
		'USER_AUTH_KEY'=>'uid',
		'NOT_AUTH_MODULE'=>'Login',
		'NOT_AUTH_ACTION'=>'',
		'RBAC_ROLE_TABLE'=>'xwh_role',
		'RBAC_USER_TABLE'=>'xwh_role_user',
		'RBAC_ACCESS_TABLE'=>'xwh_access',
		'RBAC_NODE_TABLE'=>'xwh_node'
	);
?>