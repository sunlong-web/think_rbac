<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="../Public/Css/public.css" />
<link rel="stylesheet" href="../Public/Css/node.css">
<script type="text/javascript" src="../Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('input[level="1"]').click(function(){
			var inputs = $(this).parents('.app').find('input');
			$(this).attr('checked') ? inputs.attr('checked','checked') : inputs.removeAttr('checked');
		});

		$('input[level="2"]').click(function(){
			var inputs = $(this).parents('dl').find('input');
			$(this).attr('checked') ? inputs.attr('checked','checked') : inputs.removeAttr('checked');
		});
	});
</script>
<head>
</head>
<body>
	<form action="<?php echo U('setAccess');?>" method="post">
	<div id="wrap">
		<a href="<?php echo U('addNode');?>" class="add-app">应用列表</a>

		<?php if(is_array($list)): foreach($list as $key=>$app): ?><div class="app">
			<p>
				<strong><?php echo ($app["title"]); ?></strong>
				<input type="checkbox" name="access[]" value="<?php echo ($app["id"]); ?>_1" level="1"  <?php if($app['access'] == 1): ?>checked="checked"<?php endif; ?> >
			</p>

			<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
					<dt>
						<strong><?php echo ($action["title"]); ?></strong>
						<input type="checkbox" name="access[]" value="<?php echo ($action["id"]); ?>_2" level="2" <?php if($action['access'] == 1): ?>checked="checked"<?php endif; ?>>
					</dt>

					<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
						<span><?php echo ($method["title"]); ?></span>
						<input type="checkbox" name="access[]" value="<?php echo ($method["id"]); ?>_3" level="3" <?php if($method['access'] == 1): ?>checked="checked"<?php endif; ?>>
					</dd><?php endforeach; endif; ?>

				</dl><?php endforeach; endif; ?>
		</div><?php endforeach; endif; ?>

	</div>
	<input type="hidden" name="rid" value="<?php echo ($rid); ?>">
	<input type="submit" value="保存修改" style="display:block; margin:20px auto">
	</form>
</body>
</html>