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
<form method="post" action="<?php echo U('China/Home/doUpwd');?>" enctype="multipart/form-data">
<table class="form">
	<tr>
		<td colspan="2"><span style="color:#FF0000">网站管理员信息修改后，请务必牢记！</span></td>
	</tr>
	<tr>
		<th>网站管理员：</th><td><input type="text" name="uname" class="ipt_s" value="<?php echo ($info['uname']); ?>" /></td>
	</tr>
	<tr>
		<th>管理员密码：</th><td><input type="password" name="upwd" class="ipt_m" /></td>
	</tr>
	<tr>
		<th>&nbsp;</th><td><input type="submit" value="提交" class="smt_s" /></td>
	</tr>
</table>
</form>

</body>
</html>