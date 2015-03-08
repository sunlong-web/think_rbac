<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>添加用户</title>
<script src="__PUBLIC__/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		$('#submit').click(function(){
			var pid=$("input[name=pid]");
			if(pid.val()==""){
				alert("编号不能为空");
				pid.focus();
				return false;
			}
		})
		$.post(Addurl,{username:username.val(),content:content.val()},function(data){
			if(data.status){
				alert('注册成功');	
			}else{
				alert('发布失败');
			}
	})
</script>
<style type="text/css">
form,input{ margin:0px; padding:0px}
.a  a{color:#fff; text-decoration:none}
body{margin:0px;padding:0px;background:#f6f6f6}
input{height:30px; width:200px;line-height:30px}
.zhuce{ height:40px}
.zhuce li{ height:30px; line-height:30px; font-size:24px; margin-top:50px}
ul li{list-style:none}
</style>
</head>
<body>
<div class="zhuce">
	<ul>
    <form name="form1" action="<?php echo U('postadduser');?>" method="post">
    	<li>员工编号：<input type="text" name="pid"></li>
        <li>员工姓名：<input type="text" name="pname"></li>
        <li>所在部门：<input type="text" name="pbranch"></li>
        <li>工作职位：<input type="text" name="pclass"></li>
        <li>验证码：<input type="text" name="img"><img id="verifyImg"  src="__APP__/index/verify/"  onclick='fleashVerify()'></li>
        <li><input type="submit" value="提交"  id="submit"><button id="button">提交</button></li>
        
    </form>
    </ul>
</div>
</body>
</html>