<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="../Public/Css/public.css" />
<head>
</head>
<body>
	<table class="table">
		<tr>
			<th colspan="4">角色列表</th>
		</tr>
		<tr>
			<td>角色名称</td>
			<td>角色描述</td>
			<td>是否锁定</td>
			<td>操作</td>
		</tr>
		<?php if(is_array($list)): foreach($list as $key=>$user): ?><tr>
			<td><?php echo ($user["name"]); ?></td>
			<td><?php echo ($user["remark"]); ?></td>
			<td><?php if($user['status'] == 1): ?>开启 <?php else: ?> 关闭<?php endif; ?></td>
			<td><a href="<?php echo U( 'access', array('rid'=>$user['id']) );?>"> 权限配置 </a></td>
		</tr><?php endforeach; endif; ?>
		</form>
	</table>
</body>
</html>