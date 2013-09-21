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
<form method="post" action="<?php echo U('China/Global/doBasic');?>" enctype="multipart/form-data">
<table class="form">
	<tr>
		<th>网站名称：</th><td><input type="text" name="data[site_name]" class="ipt_s" value="<?php echo ($siteInfo['site_name']); ?>" /></td>
	</tr>
	<tr>
		<th>网站标题：</th><td><input type="text" name="data[site_title]" class="ipt_m" value="<?php echo ($siteInfo['site_title']); ?>" /></td>
	</tr>
	<tr>
		<th>网站关键词：</th><td><input type="text" name="data[site_kwd]" class="ipt_b" value="<?php echo ($siteInfo['site_kwd']); ?>" /></td>
	</tr>
	<tr>
		<th>网站描述：</th><td><textarea name="data[site_desc]" class="text"><?php echo ($siteInfo['site_desc']); ?></textarea></td>
	</tr>
	<tr>
		<th>地址：</th><td><input type="text" name="data[site_address]" class="ipt_b" value="<?php echo ($siteInfo['site_address']); ?>" /></td>
	</tr>
	<tr>
		<th>联系电话：</th><td><input type="text" name="data[site_tel]" class="ipt_s" value="<?php echo ($siteInfo['site_tel']); ?>" /></td>
	</tr>
	<tr>
		<th>管理员邮箱：</th><td><input type="text" name="data[site_mail]" class="ipt_s" value="<?php echo ($siteInfo['site_mail']); ?>" /></td>
	</tr>
	<tr>
		<th>邮编：</th><td><input type="text" name="data[site_code]" class="ipt_s" value="<?php echo ($siteInfo['site_code']); ?>" /></td>
	</tr>
	<tr>
		<th>技术支持：</th><td><input type="text" name="data[site_help]" class="ipt_s" value="<?php echo ($siteInfo['site_help']); ?>" /></td>
	</tr>
	<tr>
		<th>版权声明：</th><td><input type="text" name="data[site_right]" class="ipt_s" value="<?php echo ($siteInfo['site_right']); ?>" /></td>
	</tr>
	<tr>
		<th>&nbsp;</th><td><input type="submit" value="提交" class="smt_s" /></td>
	</tr>
</table>
</form>

</body>
</html>