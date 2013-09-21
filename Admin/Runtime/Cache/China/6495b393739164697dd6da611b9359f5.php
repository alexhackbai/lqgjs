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
<form method="post" action="<?php echo U('China/Case/doFourEdit');?>" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo ($fourInfo['id']); ?>" />
<input type="hidden" name="cover_id" value="<?php echo ($fourInfo['cover_id']); ?>" />
<table class="form">
	<tr>
		<th>案例名称：</th><td><input type="text" name="data[name]" class="ipt_s" value="<?php echo ($fourInfo['name']); ?>" /></td>
	</tr>
	<tr>
		<th>案例描述：</th><td><textarea name="data[desc]" class="text"><?php echo ($fourInfo['desc']); ?></textarea></td>
	</tr>
	<tr>
		<th>封面图片：</th><td><?php if(empty($fourInfo['cover_id'])): ?>暂无图片<?php else: ?><img src="__ROOT__<?php echo ($fourInfo['cover']); ?>" height="100" /><?php endif; ?></td>
	</tr>
	<tr>
		<th>重新上传：</th><td><input type="file" name="cover" /></td>
	</tr>
	<tr>
		<th>案例内容：</th>
		<td>
			<textarea name="data[content]" id="myEditor"><?php echo ($fourInfo['content']); ?></textarea>
			<script type="text/javascript">
				var editor = UE.getEditor('myEditor',{initialFrameWidth:770, initialFrameHeight:320});
        	</script>
		</td>
	</tr>
	<tr>
		<th>是否首页：</th>
		<td>
			<input type="text" name="data[status]" class="ipt_s" id="w20" value="<?php echo ($fourInfo['status']); ?>" />
			<span style="color:#FF0000;">* 只有为1的时候才在首页显示</span>
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
<style type="text/css">
#w20{ width:20px;}
</style>
</body>
</html>