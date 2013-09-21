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


<div class="logo_nav clearfix">
	<div class="logo_nav_box">
    	<div class="logo fl"><a href="<?php echo U('English/Index/index');?>"><img src="__ROOT__/Public/Home/English/Img/logo.png" /></a></div>
    	<div class="nav fr">
    		<ul class="clearfix">
        		<li><a href="<?php echo U('English/Index/index');?>">Home</a></li>
            	<li><a href="<?php echo U('English/About/index');?>">About Us</a></li>
            	<li><a href="<?php echo U('English/News/index');?>" class="current">News</a></li>
            	<li><a href="<?php echo U('English/Case/index');?>">Cases</a></li>
            	<li><a href="<?php echo U('English/Service/index');?>">Services</a></li>
            	<li><a href="<?php echo U('English/Contact/index');?>">Contact Us</a></li>
        	</ul>
    	</div>
    <div class="clear"></div>
    </div>
</div>

<div class="sub_banner">
	<h2>OUR <span style="color:#ff6700">NEWS</span></h2>
</div>

<div class="main clearfix">
	<div class="detail fl">
    	<ul class="newsLs">
			<?php if(is_array($resultInfo)): $i = 0; $__LIST__ = $resultInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            	<h4 class="tit"><span class="views"><?php echo ($vo["views"]); ?> NO.</span><span class="time"><?php echo (date('d/m/Y', $vo["ctime"])); ?></span><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["title"]); ?></a></h4>
                <div class="clearfix">
                	<div class="pic fl"><a href="<?php echo ($vo['link']); ?>"><img src="__ROOT__<?php echo ($vo["cover"]); ?>" /></a></div>
                    <div class="info fr">
                    	<p><?php echo ($vo["desc"]); ?></p>
                        <a href="<?php echo ($vo['link']); ?>" class="read">READ MORE</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="page mt30"><?php echo ($page); ?></div>
    </div>
    <div class="side_right fr">
    	<h3 class="tit mt15 pb10">SEARCH</h3>
        <div class="search_s mt10">
			<form method="post" action="<?php echo U('English/Search/searchCase');?>" enctype="multipart/form-data">
				<input type="text" name="name" class="ipt_s" /><input type="submit" value="&nbsp;" class="smt_s" />
			</form>
		</div>
        <h3 class="tit mt35 pb10">SERVICES</h3>
        <ul class="ser_d">
			<?php if(is_array($serName)): $i = 0; $__LIST__ = $serName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["pro_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <h3 class="tit mt35 pb10">Related Information</h3>
        <table class="info">
        	<tr>
            	<th style="vertical-align:top;">ADD:</th><td><?php echo ($siteInfo["site_address"]); ?></td>
            </tr>
            <tr>
            	<th>Tel:</th><td><?php echo ($siteInfo["site_tel"]); ?></td>
            </tr>
            <tr>
            	<th>Mail:</th><td><?php echo ($siteInfo["site_mail"]); ?></td>
            </tr>
            <tr>
            	<th>Fax:</th><td><?php echo ($siteInfo["site_fax"]); ?></td>
            </tr>
        </table>
        <div class="adMap mt35"><img src="__ROOT__<?php echo ($adMap['picture']); ?>" /></div>
    </div>
    <div class="clear"></div>
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