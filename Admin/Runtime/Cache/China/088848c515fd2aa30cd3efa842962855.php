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
<form method="post" action="<?php echo U('China/Service/doFour');?>" enctype="multipart/form-data">
<table class="form">
	<tr>
		<th>服务名称：</th><td><input type="text" name="data[pro_name]" value="<?php echo ($info['pro_name']); ?>" class="ipt_s" /></td>
	</tr>
	<tr>
		<th>服务描述：</th><td><textarea name="data[desc]" class="text"><?php echo ($info["desc"]); ?></textarea></td>
	</tr>
	<tr>
		<th>首页描述：</th><td><textarea name="data[home]" class="text"><?php echo ($info["home"]); ?></textarea></td>
	</tr>
	<tr>
		<th>封面图片：</th>
		<td><?php if(empty($info['cover_id'])): ?>暂无封面<?php else: ?><img src="__ROOT__<?php echo ($info['cover']); ?>" height="100" /><?php endif; ?></td>
	</tr>
	<tr>
		<th>重新上传：</th><td><input type="file" name="cover" /></td>
	</tr>
	<tr>
		<th>服务详情：</th>
		<td>
			<textarea name="data[content]" id="myEditor"><?php echo ($info["content"]); ?></textarea>
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