<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="../Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/Js/index.js"></script>
<link rel="stylesheet" href="../Public/Css/public.css" />
<link rel="stylesheet" href="../Public/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="menu">
			<a href="#">添加</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
		</div>
		<div class="exit">
			<a href="<?php echo U('Login/destory');?>" target="_self">退出</a>
			<a href="http://bbs.houdunwang.com" target="_blank">获得帮助</a>
			<a href="http://www.houdunwang.com" target="_blank">后盾网</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>功能标题</dt>
			<dd><a href="#">查看所有用户</a></dd>
		</dl>
		<dl>
			<dt>功能标题</dt>
			<dd><a href="<?php echo U('rbac/addRole');?>">添加角色</a></dd>
			<dd><a href="<?php echo U('rbac/roleList');?>">角色列表</a></dd>
			<dd><a href="<?php echo U('rbac/addNode');?>">添加节点</a></dd>
			<dd><a href="<?php echo U('rbac/nodeList');?>">节点列表</a></dd>
			<dd><a href="<?php echo U('rbac/addUser');?>">添加用户</a></dd>
			<dd><a href="#">功能标题</a></dd>
		</dl>
		<dl>
			<dt>功能标题</dt>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="#"></iframe>
	</div>
</body>
</html>