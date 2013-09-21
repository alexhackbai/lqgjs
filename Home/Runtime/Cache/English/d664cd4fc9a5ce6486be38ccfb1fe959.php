<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php if(empty($_SEO)): ?><title><?php echo ($siteInfo["site_title"]); ?>-<?php echo ($siteInfo["site_name"]); ?></title>
<meta name="keywords" content="<?php echo ($siteInfo["site_kwd"]); ?>" />
<meta name="description" content="<?php echo ($siteInfo["site_desc"]); ?>" />
<?php else: ?>
<title><?php echo ($_SEO["title"]); ?></title>
<meta name="keywords" content="<?php echo ($_SEO["kwd"]); ?>" />
<meta name="description" content="<?php echo ($_SEO["desc"]); ?>" /><?php endif; ?>
<link href="__ROOT__/Public/Home/English/Css/basic.css" type="text/css" rel="stylesheet" />
<link href="__ROOT__/Public/Home/English/Css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div style="background:#0e6592; width:100%; height:5px;"></div>

<div  class="top">
	<div class="top_box clearfix">
    	<div class="vl fl"><img src="__ROOT__/Public/Home/English/Img/email.gif" />&nbsp;&nbsp;<?php echo ($siteInfo["site_mail"]); ?>&nbsp;&nbsp;&nbsp;<img src="__ROOT__/Public/Home/English/Img/tel_top.gif" />&nbsp;&nbsp;<?php echo ($siteInfo["site_tel"]); ?></div>
        <div class="vl fr">
			&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('China/Index/index');?>"><img src="__ROOT__/Public/Home/English/Img/china.gif" /></a>
			&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('English/Index/index');?>"><img src="__ROOT__/Public/Home/English/Img/english.gif" /></a>
			&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Land/Index/index');?>"><img src="__ROOT__/Public/Home/English/Img/land.gif" /></a>
		</div>
        <div class="search fr">
			<form method="post" action="<?php echo U('English/Search/result');?>" enctype="multipart/form-data">
				<input type="text" name="search" class="ipt" /><input type="submit" name="submit" value="&nbsp;" class="smt" />
			</form>
		</div>
        <div class="vl fr"><img src="__ROOT__/Public/Home/English/Img/i1.gif" />&nbsp;<img src="__ROOT__/Public/Home/English/Img/i2.gif" />&nbsp;<img src="__ROOT__/Public/Home/English/Img/i3.gif" />&nbsp;<img src="__ROOT__/Public/Home/English/Img/i4.gif" />&nbsp;<img src="__ROOT__/Public/Home/English/Img/i5.gif" />&nbsp;<img src="__ROOT__/Public/Home/English/Img/i6.gif" />&nbsp;&nbsp;&nbsp;</div>
        <div class="clear"></div>
    </div>
</div>


<link type="text/css" rel="stylesheet" href="__ROOT__/Slider/css/css.css" />
<script type="text/javascript" src="__ROOT__/Slider/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="__ROOT__/Slider/js/jquery.nbspSlider.1.1.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#slider3").nbspSlider({
			widths:          "1004px",
			heights:         "450px",
			effect:	         "fade",
			numBtnSty:       "roundness",
			autoplay:        1,
			speeds:          800,
			preNexBtnShow:   0,
			//prevId: 		'prevBts',      // 上一张幻灯片按钮ID
			//nextId: 		'nextBts'		// 下一张幻灯片按钮I
		});
	});
</script>
<!--[if IE 6]>
<script type="text/javascript" src="./js/EvPng.js"></script>
<script> EvPNG.fix('.num,.num_act,.num_hover,.square,.square_act,.square_hover,.circle,.circle_act,.circle_hover,.roundness,.roundness_act,.roundness_hover,.rectangle,.rectangle_act,.rectangle_hover');
</script>
<![endif]-->

<div class="logo_nav clearfix">
	<div class="logo_nav_box">
    	<div class="logo fl"><a href="<?php echo U('English/Index/index');?>"><img src="__ROOT__/Public/Home/English/Img/logo.png" /></a></div>
    	<div class="nav fr">
    		<ul class="clearfix">
        		<li><a href="<?php echo U('English/Index/index');?>" class="current">Home</a></li>
            	<li><a href="<?php echo U('English/About/index');?>">About Us</a></li>
            	<li><a href="<?php echo U('English/News/index');?>">News</a></li>
            	<li><a href="<?php echo U('English/Case/index');?>">Cases</a></li>
            	<li><a href="<?php echo U('English/Service/index');?>">Services</a></li>
            	<li><a href="<?php echo U('English/Contact/index');?>">Contact Us</a></li>
        	</ul>
    	</div>
    <div class="clear"></div>
    </div>
</div>

<div class="banner">
	<div id="slider3">
		<ul>
			<?php if(is_array($sliderInfo)): $i = 0; $__LIST__ = $sliderInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>" target="_blank"><img src="__ROOT__<?php echo ($vo['picture']); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>

<div class="line mt50 mb30"></div>

<div class="service_box clearfix">
	<div class="service service1 fl">
		<?php if(is_array($sertypeInfo)): $i = 0; $__LIST__ = $sertypeInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo['id']) == "1"): ?><h1><?php echo ($vo["pro_name"]); ?></h1>
        <p><?php echo ($vo["home"]); ?></p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
    
    <div class="service service4 fl inline ml34">
    	<?php if(is_array($sertypeInfo)): $i = 0; $__LIST__ = $sertypeInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo['id']) == "2"): ?><h1><?php echo ($vo["pro_name"]); ?></h1>
        <p><?php echo ($vo["home"]); ?></p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
    
    <div class="service service3 fl inline ml34">
    	<?php if(is_array($sertypeInfo)): $i = 0; $__LIST__ = $sertypeInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo['id']) == "3"): ?><h1><?php echo ($vo["pro_name"]); ?></h1>
        <p><?php echo ($vo["home"]); ?></p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
    
    <div class="service service2 fr">
    	<?php if(is_array($sertypeInfo)): $i = 0; $__LIST__ = $sertypeInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo['id']) == "4"): ?><h1><?php echo ($vo["pro_name"]); ?></h1>
        <p><?php echo ($vo["home"]); ?></p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

<div class="title pt50"><img src="__ROOT__/Public/Home/English/Img/case_title.png" title="our's link" /></div>
<div class="case">
	<ul class="clearfix">
		<?php if(is_array($caseInfo)): $i = 0; $__LIST__ = $caseInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <a href="<?php echo ($vo['link']); ?>"><img src="__ROOT__<?php echo ($vo['cover']); ?>" /></a>
            <h4><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["name"]); ?></a></h4>
            <p><?php echo ($vo["desc"]); ?></p>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="clear"></div>
    </ul>
</div>

<div class="learn mt30">
	<div class="learn_box">
    	<div class="learn_more fr inline" style=" margin-top:75px;"><a href="<?php echo U('English/About/index');?>">Learn more &gt;&gt;</a></div>
        <h2>Who we are ?</h2>
    	<p><?php echo ($aboutInfo["desc"]); ?></p>
    </div>
</div>

<div class="title pt50"><img src="__ROOT__/Public/Home/English/Img/link_title.png" title="our's link" /></div>
<div class="link">
	<ul>
		<?php if(is_array($linkInfo)): $i = 0; $__LIST__ = $linkInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>"><img src="__ROOT__<?php echo ($vo['picture']); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="clear"></div>
    </ul>
</div>

<div class="all_news mt35">
	<div class="news_box clearfix">
    	<ul class="business fl">
        	<h3 class="business mb15">Information</h3>
			<?php if(is_array($businessInfo)): $i = 0; $__LIST__ = $businessInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>·&nbsp;<a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="server fl inline ml45">
        	<h3 class="server mb15">Clipper Service</h3>
			<?php if(is_array($serviceInfo)): $i = 0; $__LIST__ = $serviceInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>&gt;&nbsp;&nbsp;<a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="contact fr">
        	<h3 class="contact mb10">Contact US</h3>
        	<div class="address">Address: <?php echo ($siteInfo["site_address"]); ?></div>
            <div class="tel"><?php echo ($siteInfo["site_tel"]); ?></div>
            <div class="mail"><?php echo ($siteInfo["site_mail"]); ?></div>
            <div class="map"><a href="<?php echo U('English/Contact/index');?>">find us in map</a></div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="footer">
	<div class="footer_box">
    	<span class="fr">
        	<a href="#"><img src="__ROOT__/Public/Home/English/Img/twitter.gif" /></a>&nbsp;
            <a href="#"><img src="__ROOT__/Public/Home/English/Img/facebook.gif" /></a>&nbsp;
            <a href="#"><img src="__ROOT__/Public/Home/English/Img/icon.gif" /></a>&nbsp;
            <a href="#"><img src="__ROOT__/Public/Home/English/Img/in.gif" /></a>&nbsp;
            <a href="#"><img src="__ROOT__/Public/Home/English/Img/rass.gif" /></a>
        </span>
        <span>chicea © 2013</span>
    </div>
</div>
</body>
</html>