<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
.system-message{ width:400px; border:#cccccc 1px solid; margin:100px auto; padding:45px 45px 80px 45px;}
.system-message h1{ line-height:74px; padding-bottom:10px;}
.system-message .jump{ font-size:14px; padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height:21px; font-size:16px; color:#F00;}
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
</style>
</head>
<body>
<div class="system-message">
    <present name="message">
    <h1><!--:)--><img src="__ROOT__/Public/Home/China/Img/logo.png" /></h1>
    <p class="success"><?php echo($message); ?></p>
    <else/>
    <h1><!--:(--><img src="__ROOT__/Public/Home/China/Img/logo.png" /></h1>
    
    <p class="error"><?php echo($error); ?></p>
    </present>
	<p class="detail"></p>
	<p class="jump">页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b></p>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time == 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>