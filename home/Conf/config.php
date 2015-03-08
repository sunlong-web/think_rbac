<?php

$db = include './config.php';

$myConf = array(
	//URL 模式 pathinfo 模式
	'URL_MODEL'=> 1,
	'URL_HTML_SUFFIX'=>'html',
	'URL_CASE_INSENSITIVE'=>TRUE,
	'SHOW_PAGE_TRACE'=>TRUE,
);

return array_merge( $db, $myConf );
?>