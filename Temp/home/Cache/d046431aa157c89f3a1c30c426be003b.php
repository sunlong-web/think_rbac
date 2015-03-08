<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>员工列表</title>
<script src="__PUBLIC__/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<link href="__PUBLIC__/css/page.css"  rel="stylesheet"  type="text/css"     />
<style type="text/css">
	form,input{ margin:0px; padding:0px}
	td{border:1px #CCCCCC solid; text-align:center; height:30px; line-height:30px; border-bottom:#ccc solid 1px}
	.a  a{color:#fff; text-decoration:none}
</style>
<script language="JavaScript">
//反选表单中checkbox
function inverse(form){
	for (var i=0;i<form.elements.length-2;i++){
		var e = form.elements[i];
		e.checked == true ? e.checked = false : e.checked = true;
	}
}
//选择表单中所有check_box
function check_all(form){
	for(var i=0;i<form.elements.length-2;i++){
		var e=form.elements[i];
		e.checked=true;
	}
}
</script>
</head>
<body>
<div style="width:100%"><div style="width:800px; margin:0px auto">
<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
    	<td colspan="7"><form action="<?php echo U('index');?>" method="get" name="form1">
        	职位：<input type="text" name="zhiwei" value="<?php echo ($_GET['zhiwei']); ?>">
            姓名：<input type="text" name="name" value="<?php echo ($_GET['name']); ?>">
            <input type="submit" value="提交" name="submit">
        </form></td>
    </tr>
	<tr>
    	<td colspan="7" style="background:#FC3; color:#FFF"><b class='a'>展示列表[<a href="<?php echo U('adduser');?>">添加</a>]
    		[<a href="<?php echo U('up');?>">上传相片</a>][<a href="<?php echo U('Db/index');?>">跨库操作</a>]
    		[<a href="<?php echo U('gl');?>">关联查询</a>]
    	</b>
    	</td>
    </tr>
    <form action="<?php echo U('del');?>" method="post" name="note" id="note">
	<tr style="border:1px #CCCCCC solid">
		<td width="10%">批量删除</td>
    	<td width="10%">id</td>
        <td width="10%">编号</td>
        <td width="10%">姓名</td>
        <td width="17%">所在部门</td>
        <td width="17%">职位</td>
        <td width="26%"><a href="#">详细</a>      <a href="#">修改</a>      <a href="#" id="del1">删除</a></td>
    </tr>
    <?php if($user) { ?>
    <?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
    	<td><input type="checkbox" name="note_id[]"  value="<?php echo ($v["id"]); ?>" /></td>
    	<td id='id'><?php echo ($v["id"]); ?></td>
        <td><?php echo ($v["pid"]); ?></td>
        <td><?php echo ($v["pname"]); ?></td>
        <td><?php echo ($v["pbranch"]); ?></td>
        <td><?php echo ($v["pclass"]); ?></td>
        <td width="27%"><a href="#">详细</a>      <a href="#">修改</a>      <a href=" <?php echo U('del',array('id'=>$v['id']));?>"  onClick="return confirm('您确定要删除这条新闻吗？')">删除</a></td>
    </tr><?php endforeach; endif; ?>
	<?php } else { ?>
    <tr>
    	<td colspan="7">没有查询结果，请重新查询</td>
    </tr> 
    <?php } ?>
    <tr>
    	<td colspan="7">
        	<input type="checkbox" name="select_all" onClick="check_all(this.form)" />
           	<span class="style1">全选</span>&nbsp;&nbsp;
            <input type="checkbox" name="select_reverse" onClick="inverse(this.form)" />
            <span class="style1">反选</span>&nbsp;&nbsp;
             <input name="submit1"  type="submit"  value = " 删除 " class="btn1" />  
        </td>
    </tr>
    </form>
    <tr>
    	<td colspan="7">
    	<div class="green-black"><?php echo ($page); ?></div>
         </td>
      </tr>
</table>
</div></div>
</body>
</html>