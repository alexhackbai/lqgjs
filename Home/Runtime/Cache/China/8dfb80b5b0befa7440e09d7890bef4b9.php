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
                <div class="search cleafix left">
                    <form method="post" action="<?php echo U('China/Search/result');?>" enctype="multipart/form-data">
                    <input class="searchTxt" name="search" type="text" placeholder="Search"/>
                    <input class="searchBut" type="button" value="GO"/>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>


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
            <img src="__ROOT__/Public/Home/China/images/subFoc.jpg" />
            <div class="breadCrumb">
                <a href="<?php echo U('China/Index/index');?>">首页</a>&rsaquo;关于我们
            </div>
            <div class="rightBotPane">
                <h2>关于我们</h2>
                <p><?php if(is_array($aboutLs)): $i = 0; $__LIST__ = $aboutLs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["content"]); endforeach; endif; else: echo "" ;endif; ?>
                 </p>

            </div>
        </div>
    </div>
</div>


<!-- <div class="main clearfix pt20">
	<div class="detail fl">
    	<h3 class="tit">公司简介</h3>
        <div class="pic pt30 pb10"><img src="__ROOT__<?php echo ($aboutInfo['cover']); ?>" /></div>
        <div class="con"><?php echo ($aboutInfo["content"]); ?></div>
    </div>
    <div class="side_right fr">
    	<h3 class="tit">关于我们</h3>
        <ul class="related">
			<?php if(is_array($aboutLs)): $i = 0; $__LIST__ = $aboutLs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <h3 class="tit mt30">联系我们</h3>
        <table>
        	<tr>
            	<th width="53">地&nbsp;&nbsp;址：<br />&nbsp;</th><td><?php echo ($siteInfo["site_address"]); ?></td>
            </tr>
            <tr>
                <th>邮&nbsp;&nbsp;编：</th><td><?php echo ($siteInfo["site_code"]); ?></td>
            </tr>
            <tr>
                <th>电&nbsp;&nbsp;话：</th><td><?php echo ($siteInfo["site_tel"]); ?></td>
            </tr>
            <tr>
                <th>邮&nbsp;&nbsp;箱：</th><td><?php echo ($siteInfo["site_mail"]); ?></td>
            </tr>
        </table>
        <table>
            <tr>
                <th width="63">技术支持：</th><td><?php echo ($siteInfo["site_help"]); ?></td>
            </tr>
        </table>
        <div class="map mt30"><img src="__ROOT__<?php echo ($adMap['picture']); ?>" /></div>
    </div>
    <div class="clear"></div>
</div> -->

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