<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>站点基本信息设置</title>
<link href="__ROOT__/Public/Admin/Css/basic.css" type="text/css" rel="stylesheet" />
<link href="__ROOT__/Public/Admin/Css/style.css" type="text/css" rel="stylesheet" />
<!--UEditor-->
<script type="text/javascript" charset="utf-8">
    window.UEDITOR_HOME_URL = "__ROOT__/UEditor/";
</script>
<script type="text/javascript" src="__ROOT__/UEditor/ueditor.config.js"></script>
<script type="text/javascript" src="__ROOT__/UEditor/ueditor.all.js"></script>
</head>

<body>

<h3>资讯分类</h3>

<table class="ls">
	<tr>
		<td colspan="4"><a href="<?php echo U('China/News/typeAdd');?>" class="btn_s">添加</a></td>
	</tr>
	<tr>
		<th width="5%">id</th><th width="25%">分类名称</th><th width="70%">操作</th>
	</tr>
	<?php if(is_array($typeInfo)): $i = 0; $__LIST__ = $typeInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		<td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["name"]); ?></td>
		<td>
			<a href="<?php echo U('China/News/typeEdit', array('id'=>$vo['id']));?>">编辑</a>&nbsp;
		</td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>

<div class="page mt20"><?php echo ($page); ?></div>

</body>
</html>