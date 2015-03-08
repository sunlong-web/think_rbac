<?php
class DbModel extends Model {
	/* 
	**	第一种数据库连接方法
	*/
	/* 
	protected $connection = 'mysql://root:root@localhost:3306/sh__U';
	protected $trueTableName="SH_TPOINT"; */
	/* 
		第二种连接数据哭方法
	 */
	/*protected $connection = array(
		'db_type' => 'mysql',
		'db_user' => 'root',
		'db_pwd' => 'root',
		'db_host' => 'localhost',
		'db_name' => 'sh__U',		
	);
	protected $trueTableName = "SH_TPOINT";*/
	
	
	//第三种跨库操作方法
	protected $connection = 'STU_DB';	
}