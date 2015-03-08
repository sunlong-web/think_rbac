<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="../Public/Css/public.css" />
<head>
</head>
<body>
	<table class="table">
		<tr>
			<th colspan="2">添加角色</th>
		</tr>
		<form name="form1" method="post" action="<?php echo U( 'addRole' );?>">
		<tr>
			<td align="right">角色名称：</td>
			<td><input name="name" type="text"></td>
		</tr>
		<tr>
			<td align="right">角色描述：</td>
			<td><input name="remark" type="text"></td>
		</tr>
		<tr>
			<td align="right">是否开启：</td>
			<td>
				<input type="radio" value="1" name="status" checked="checked">&nbsp;开启&nbsp;
				<input type="radio" value="0" name="status">&nbsp;关闭&nbsp;
			</td>
		</tr>

		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="保存添加"></td>
		</tr>
		</form>
	</table>
</body>
</html>