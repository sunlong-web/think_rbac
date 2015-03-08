<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>学生成绩列表</title>
<style type="text/css">
	form,input{ margin:0px; padding:0px}
	td{border:1px #CCCCCC solid; text-align:center; height:30px; line-height:30px; border-bottom:#ccc solid 1px}
	.a  a{color:#fff; text-decoration:none}
</style>
</head>
<body>
<div style="width:100%"><div style="width:800px; margin:0px auto">
<table cellpadding="0" cellspacing="0" width="100%">
	<tr style="border:1px #CCCCCC solid">
    	<td width="10%">学生编号</td>
        <td width="10%">荣誉成绩</td>
        <td width="10%">获奖成绩</td>
        <td width="17%">笔试成绩</td>
        <td width="17%">答辩成绩</td>
    </tr>
    <?php if($data) { ?>
    <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
    	<td id='id'><?php echo ($v["SH_TPOINT__UID"]); ?>  &nbsp;</td>
        <td><?php echo ($v["SH_TPOINT__RYZZ"]); ?> &nbsp;</td>
        <td><?php echo ($v["SH_TPOINT__HJZZ"]); ?> &nbsp;</td>
        <td><?php echo ($v["SH_TPOINT__BSZZ"]); ?> &nbsp;</td>
        <td><?php echo ($v["SH_TPOINT__DBZZ"]); ?> &nbsp;</td>
    </tr><?php endforeach; endif; ?>
	<?php } else { ?>
    <tr>
    	<td colspan="5">没有查询结果，请重新查询</td>
    </tr> 
    <?php } ?>
    <tr>
    	<td colspan="7">
    	<?php echo ($show); ?>
         </td>
      </tr>
</table>
</div></div>
</body>
</html>