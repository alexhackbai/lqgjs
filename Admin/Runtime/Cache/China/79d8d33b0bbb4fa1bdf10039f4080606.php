<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>奇嘉科技-后台登录</title>
<link href="__ROOT__/Public/Home/China/Css/basic.css" type="text/css" rel="stylesheet" />
<style type="text/css">
.main{ width:400px; border:#f1f1f1 1px solid; margin:100px auto; padding:40px;}
.ipt{ background:url(__ROOT__/Public/Admin/Images/login.png) no-repeat; width:220px; line-height:18px; border:#CCCCCC 1px solid; padding:8px;}
.ipt_s{ background:url(__ROOT__/Public/Admin/Images/login.png) no-repeat; width:80px; line-height:18px; border:#CCCCCC 1px solid; padding:8px;}
.smt{ background:url(__ROOT__/Public/Admin/Images/login.gif) no-repeat; width:91px; height:33px; line-height:33px; border:none; font-size:14px; font-weight:bold; color:#FFF; cursor:pointer;}
table tr th{ font-size:14px; text-align:right;}
table tr th, table tr td{ padding:10px;}
</style>
</head>

<body>
<div class="main">
	<form method="post" action="<?php echo U('China/Public/doLogin');?>" enctype="multipart/form-data">
	<table>
		<tr>
            <th width="80">管理员:</th><td><input type="text" name="name" class="ipt" /></td>
        </tr>
        <tr>
            <th>密码:</th><td><input type="password" name="password" class="ipt" /></td>
        </tr>
        <tr>
            <th>认证码:</th>
            <td><input type="text" name="code" class="ipt_s" /> <span>（登录凭证）</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th><td><input type="submit" name="submit" class="smt" value="登录" /></td>
        </tr>
	</table>
	</form>
</div>
</body>
</html>