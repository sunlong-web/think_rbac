<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript">
function insertRow(){
	var rowIndex1 = document.all("addordel").length;
	if(rowIndex1 >= 5){
		alert('一次最多能上传5个文件');
		return false;
	}
	var obj=document.getElementsByName("addordel")[0].cloneNode(true);
	document.all("change").appendChild(obj);
}
function delRow(){
	var rowIndex = document.all("addordel").length;
	if(rowIndex >= 2){
		event.srcElement.parentNode.removeNode(true);
	}
}
function chkfile(){
	obj = document.getElementsByName('upname[]');
	num = obj.length;
	for(i=0;i<num;i++){
		if(obj[i].value == 0){
			alert('请添加上传文件');
			return false;
		}
	}
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
	body{margin:0px;padding:0px;text-align:center}
	ul,li{list-style:none;margin:0px;padding:0px;}
	li{margin-top:5px}
</style>
<title>批量上传</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="">
	<ul style="margin-bottom:50px" id="change">
		<li id="addordel">
			<input id="upname[]" name="upname[]" type="file" style=" width: 200px; background-color:#f0f0f0; " />&nbsp;&nbsp;
			<button onClick="delRow()" style=" border: 1px #CCCCCC solid; background-color:#f0f0f0;width:100px;height:30px">删除</button>&nbsp;
			<button onClick="insertRow()" style=" border: 1px #cccccc solid; background-color: #f0f0f0; width:100px; height:30px">增加</button>&nbsp;	
		</li>
	</ul>
	<input id="upbtn" name="upbtn" type="submit" value="上传" onClick="return chkfile()" style=" background-color:#f0f0f0; border: 1px #CCCCCC solid;" />
</form>
</body>
</html>