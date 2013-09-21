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
<form method="post" action="<?php echo U('China/News/doNewsAdd');?>" enctype="multipart/form-data">
<table class="form">
	<tr>
		<th>标题：</th><td><input type="text" name="data[title]" class="ipt_s" /></td>
	</tr>
	<tr>
		<th>类别：</th>
		<td>
			<select name="data[type_id]">
				<option value="0">-请选择-</option>
				<?php if(is_array($typeInfo)): $i = 0; $__LIST__ = $typeInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</td>
	</tr>
	<tr>
		<th>概要：</th><td><textarea name="data[desc]" class="text"></textarea></td>
	</tr>
	<tr>
		<th>封面：</th><td><input type="file" name="cover" /></td>
	</tr>
	<tr>
		<th>内容：</th>
		<td>
			<textarea name="data[content]" id="myEditor"></textarea>
			<script type="text/javascript">
				var editor = UE.getEditor('myEditor',{initialFrameWidth:770, initialFrameHeight:320});
        	</script>
		</td>
	</tr>
	<tr>
		<th>&nbsp;</th><td>&nbsp;</td>
	</tr>
	<tr>
		<th>&nbsp;</th><td><input type="submit" value="提交" class="smt_s" /></td>
	</tr>
</table>
</form>

</body>
</html>