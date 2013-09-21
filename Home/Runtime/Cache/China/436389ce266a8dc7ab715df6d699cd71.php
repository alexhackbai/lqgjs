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
<link rel="stylesheet" href="__ROOT__/Public/Home/China/css/public.css"/>
<link rel="stylesheet" href="__ROOT__/Public/Home/China/css/style.css"/>
<script type="text/javascript" src="__ROOT__/Public/Home/China/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Home/China/js/jcarousellite_1.0.1.min.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Home/China/js/js.js"></script>
</head>

<body>
<!-- <div class="top">
	<div class="top_box clearfix">
    	<div class="vl fl">&nbsp;&nbsp;<img src="__ROOT__/Public/Home/China/Img/tel_tel.gif" />&nbsp;&nbsp;</div>
        <div class="vl fl">&nbsp;&nbsp;<img src="__ROOT__/Public/Home/China/Img/email.gif" />&nbsp;&nbsp;</div>
        <div class="vl fl">
			&nbsp;&nbsp;<a href="<?php echo U('China/Index/index');?>"><img src="__ROOT__/Public/Home/China/Img/china.gif" /></a>
			&nbsp;<a href="<?php echo U('English/Index/index');?>"><img src="__ROOT__/Public/Home/China/Img/english.gif" /></a>
			&nbsp;<a href="<?php echo U('Land/Index/index');?>"><img src="__ROOT__/Public/Home/China/Img/land.gif" /></a>
		</div>
    	<div class="search fr inline">
        	<form method="post" action="<?php echo U('China/Search/result');?>" enctype="multipart/form-data">
            	<input type="text" name="search" class="ipt" value="输入检索的关键词" onblur="if(value==''){value='输入检索的关键词'} else {check_login_input(this);} " onfocus="if(value=='输入检索的关键词'){value=''} else {this.select()}" />
                <input type="submit" name="submit" class="smt" value="&nbsp;" />
            </form>
        </div>
        <div class="clear"></div>
    </div> -->
</div>
<div class="header">
    <div class="warp">
        <div class="languageTools clearfix">
            <a href="<?php echo U('English/Index/index');?>"><img src="__ROOT__/Public/Home/China/images/usaFlag.jpg" alt="English"/></a>
            <a href="<?php echo U('China/Index/index');?>"><img src="__ROOT__/Public/Home/China/images/chineseFlag.jpg" alt="简体中文"/></a>
        </div>
        <div class="logoPane clearfix">
            <div class="logo left"><a href="#"><img src="__ROOT__/Public/Home/China/images/greenConnectionLogo.jpg" alt="greenConnection"/></a></div>
            <div class="horizontalNavPane right clearfix">
                <a href="<?php echo U('China/PrivacyPolicy/index');?>">私有政策</a><a href="<?php echo U('China/Contact/index');?>">联系我们 </a><a href="<?php echo U('China/Career/index');?>">事业</a>
              <!--   <div class="search cleafix left">
                    <form method="post" action="<?php echo U('China/Search/result');?>" enctype="multipart/form-data">
                    <input class="searchTxt" name="search" type="text" placeholder="Search"/>
                    <input class="searchBut" type="submit" value="搜索"/>
                     </form>
                </div> -->
            </div>
        </div>
    </div>
</div>


<!-- <div class="logo_nav clearfix">
	<div class="logo fl"><a href="<?php echo U('China/Index/index');?>"><img src="__ROOT__/Public/Home/China/Img/logo.png" /></a></div>
    <div class="nav fr">
    	<ul class="clearfix">
        	<li><a href="<?php echo U('China/Index/index');?>" class="current">首页</a></li>
            <li><a href="<?php echo U('China/About/index');?>">关于我们</a></li>
            <li><a href="<?php echo U('China/News/index');?>">奇嘉动态</a></li>
            <li><a href="<?php echo U('China/Case/index');?>">案例展示</a></li>
            <li><a href="<?php echo U('China/Service/index');?>">品牌服务</a></li>
            <li><a href="<?php echo U('China/Contact/index');?>">联系方式</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>

<div class="banner">
	<div id="slider3">
		<ul>
			<?php if(is_array($sliderInfo)): $i = 0; $__LIST__ = $sliderInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>"><img src="__ROOT__<?php echo ($vo['picture']); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
<div style=" height:50px;"></div>

<div class="about_top"></div>
<div class="about clearfix">
	<div class="about_more fr inline mt35"><a href="<?php echo U('China/About/index');?>">了解更多&gt;&gt;</a></div>
	<h2>WELCOME TO <span>CHICEA</span></h2>
    <p><?php echo ($aboutInfo['desc']); ?></p>
</div>
<div class="about_bottom"></div>

<div class="line mt20 mb30"></div>

<div class="service_box clearfix">
	<div class="service fl">
    	<h1><?php echo ($sertypeInfo[0]['pro_name']); ?></h1>
        <p><?php echo ($sertypeInfo[0]['home']); ?></p>
    </div>
    
    <div class="service fl inline ml34">
    	<h1><?php echo ($sertypeInfo[1]['pro_name']); ?></h1>
        <p><?php echo ($sertypeInfo[1]['home']); ?></p>
    </div>
    
    <div class="service fl inline ml34">
    	<h1><?php echo ($sertypeInfo[2]['pro_name']); ?></h1>
        <p><?php echo ($sertypeInfo[2]['home']); ?></p>
    </div>
    
    <div class="service fr">
    	<h1><?php echo ($sertypeInfo[3]['pro_name']); ?></h1>
        <p><?php echo ($sertypeInfo[3]['home']); ?></p>
    </div>
</div>

<div class="line mt45 mb15"></div>

<div class="title"><img src="__ROOT__/Public/Home/China/Img/case.png" title="我们的案例/our case" /></div>
<div class="case">
	<ul class="clearfix">
		<?php if(is_array($caseInfo)): $i = 0; $__LIST__ = $caseInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
        	<div>
            	<a href="<?php echo ($vo['link']); ?>"><img src="__ROOT__<?php echo ($vo['cover']); ?>" /></a>
            	<h4><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["name"]); ?></a></h4>
                <p><?php echo ($vo["desc"]); ?></p>
            </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="clear"></div>
    </ul>
</div>

<div class="line mt45 mb15"></div>

<div class="title"><img src="__ROOT__/Public/Home/China/Img/link.png" title="合作火伴/our link" /></div>
<div class="link">
	<ul>
		<?php if(is_array($linkInfo)): $i = 0; $__LIST__ = $linkInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>"><img src="__ROOT__<?php echo ($vo['picture']); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="clear"></div>
    </ul>
</div> -->
<div class="indexContentPane">
    <div class="warp clearfix">
        <div class="leftNav left">
            <ul>
                <li><a href="<?php echo U('China/About/index');?>">关于我们</a></li>
                <li><a href="<?php echo U('China/SocialResponsibility/index');?>">企业社会责任</a></li>
                <li>
                    <a href="#">服务</a>
                    <ul>
                          <?php if(is_array($serviceInfo)): $i = 0; $__LIST__ = $serviceInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["pro_name"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li>
                <li><a href="#">产品</a>
                    <ul>
                    <?php if(is_array($caseInfo)): $i = 0; $__LIST__ = $caseInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["name"]); ?></a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </li>
                <li>
                    <a href="#">项目</a>
                    <ul>
                         <?php if(is_array($projectInfo)): $i = 0; $__LIST__ = $projectInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["name"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li>
           </ul>
        </div>
        <div class="rightContentPane right">
            <div id="abgneBlock">
                <ul class="list">
                    <?php if(is_array($sliderInfo)): $i = 0; $__LIST__ = $sliderInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>" target="_blank"><img src="__ROOT__<?php echo ($vo['picture']); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                   
                </ul>
            </div>
            <div class="rightBotPane">
                <h2>企业社会责任</h2>
                <p><?php echo ($socialRe['desc']); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- <div class="all_news mt35">
	<div class="news_box clearfix">
    	<ul class="business fl">
        	<h3 class="business mb15">商业信息</h3>
			<?php if(is_array($businessInfo)): $i = 0; $__LIST__ = $businessInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="server fl inline ml45">
        	<h3 class="server mb15">快捷服务</h3>
        	<?php if(is_array($serviceInfo)): $i = 0; $__LIST__ = $serviceInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="contact fr">
        	<h3 class="contact mb10">联系方式</h3>
        	<div class="address">地址：<?php echo ($siteInfo["site_address"]); ?></div>
            <div class="tel"><?php echo ($siteInfo["site_tel"]); ?></div>
            <div class="mail"><?php echo ($siteInfo["site_mail"]); ?></div>
            <div class="map"><a href="<?php echo U('China/Contact/index');?>">地图上寻找我们</a></div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="footer">
	<div class="footer_box">
    	<span class="fr">
        	<a href="./"><img src="__ROOT__/Public/Home/China/Img/twitter.gif" /></a>&nbsp;
            <a href="./"><img src="__ROOT__/Public/Home/China/Img/facebook.gif" /></a>&nbsp;
            <a href="./"><img src="__ROOT__/Public/Home/China/Img/icon.gif" /></a>&nbsp;
            <a href="./"><img src="__ROOT__/Public/Home/China/Img/in.gif" /></a>&nbsp;
            <a href="./"><img src="__ROOT__/Public/Home/China/Img/rass.gif" /></a>
        </span>
        <span><?php echo ($siteInfo["site_right"]); ?></span>
    </div>
</div>
</body>
</html> -->
<div class="footer">
    <div class="warp clearfix">
        <div class="left clearfix">
            <span class="left footerLeftText">Connect with us: </span>
            <span class="footer-sociality-share clearfix left">
                <a rel="nofollow" target="_blank" title="Connect with us on facebook" href="http://www.facebook.com/greenConnection" class="facebook">Facebook</a>
                <a rel="nofollow" target="_blank" title="Connect with us on twitter" href="https://twitter.com/#!/greenConnection" class="twitter">Twitter</a>
                <a rel="nofollow" target="_blank" title="Connect with us on youtube" href="http://www.youtube.com/user/greenConnection" class="youtube">Youtube</a>
                <a rel="nofollow" target="_blank" title="Connect with us on Linkedin" href="http://www.linkedin.com/company/greenConnection" class="sns-in">Linkedin</a>
            </span>
        </div>
        <div class="right"><?php echo ($siteInfo["site_right"]); ?></div>
    </div>
</div>
</body>
</html>