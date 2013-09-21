<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><?php if(empty($_SEO)): ?><title><?php echo ($siteInfo["site_title"]); ?>-<?php echo ($siteInfo["site_name"]); ?></title><meta name="keywords" content="<?php echo ($siteInfo["site_kwd"]); ?>" /><meta name="description" content="<?php echo ($siteInfo["site_desc"]); ?>" /><?php else: ?><title><?php echo ($_SEO["title"]); ?></title><meta name="keywords" content="<?php echo ($_SEO["kwd"]); ?>" /><meta name="description" content="<?php echo ($_SEO["desc"]); ?>" /><?php endif; ?><link href="__ROOT__/Public/Home/China/Css/basic.css" type="text/css" rel="stylesheet" /><link href="__ROOT__/Public/Home/China/Css/style.css" type="text/css" rel="stylesheet" /></head><body><div class="top"><div class="top_box clearfix"><div class="vl fl">&nbsp;&nbsp;<img src="__ROOT__/Public/Home/China/Img/tel_tel.gif" />&nbsp;&nbsp;</div><div class="vl fl">&nbsp;&nbsp;<img src="__ROOT__/Public/Home/China/Img/email.gif" />&nbsp;&nbsp;</div><div class="vl fl">			&nbsp;&nbsp;<a href="<?php echo U('China/Index/index');?>"><img src="__ROOT__/Public/Home/China/Img/china.gif" /></a>			&nbsp;<a href="<?php echo U('English/Index/index');?>"><img src="__ROOT__/Public/Home/China/Img/english.gif" /></a>			&nbsp;<a href="<?php echo U('Land/Index/index');?>"><img src="__ROOT__/Public/Home/China/Img/land.gif" /></a></div><div class="search fr inline"><form method="post" action="<?php echo U('China/Search/result');?>" enctype="multipart/form-data"><input type="text" name="search" class="ipt" value="输入检索的关键词" onblur="if(value==''){value='输入检索的关键词'} else {check_login_input(this);} " onfocus="if(value=='输入检索的关键词'){value=''} else {this.select()}" /><input type="submit" name="submit" class="smt" value="&nbsp;" /></form></div><div class="clear"></div></div></div><div class="logo_nav clearfix"><div class="logo fl"><a href="<?php echo U('China/Index/index');?>"><img src="__ROOT__/Public/Home/China/Img/logo.png" /></a></div><div class="nav fr"><ul class="clearfix"><li><a href="<?php echo U('China/Index/index');?>">首页</a></li><li><a href="<?php echo U('China/About/index');?>">关于我们</a></li><li><a href="<?php echo U('China/News/index');?>" class="current">奇嘉动态</a></li><li><a href="<?php echo U('China/Case/index');?>">案例展示</a></li><li><a href="<?php echo U('China/Service/index');?>">品牌服务</a></li><li><a href="<?php echo U('China/Contact/index');?>">联系方式</a></li></ul></div><div class="clear"></div></div><div class="sub_banner"><div class="sub_banner_box clearfix"><div class="fl inline mt30"><h3 class="cn">奇嘉动态</h3><h3 class="en">Qijia News</h3></div><p class="fr">我们坚信敏锐的洞察与创新设计创造商机、未来！</p></div></div><div class="main clearfix pt20"><div class="detail fl"><h3 class="tit">奇嘉动态</h3><div class="news_ls"><ul><?php if(is_array($newsInfo)): $i = 0; $__LIST__ = $newsInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="clearfix"><div class="pic fl"><img src="__ROOT__<?php echo ($vo['cover']); ?>" /></div><div class="txt fr"><h4><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["title"]); ?></a></h4><div class="time"><?php echo (date('Y年m月d日', $vo["ctime"])); ?>&nbsp;&nbsp;浏览次数：<?php echo ($vo["views"]); ?>次</div><p><?php echo ($vo["desc"]); ?><a href="<?php echo ($vo['link']); ?>">阅读更多&gt;&gt;</a></p></div><div class="clear"></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="page"><?php echo ($page); ?></div></div><div class="side_right fr"><h3 class="tit">奇嘉动态</h3><ul class="related"><?php if(is_array($newsLs)): $i = 0; $__LIST__ = $newsLs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><h3 class="tit mt30">联系我们</h3><table><tr><th width="53">地&nbsp;&nbsp;址：<br />&nbsp;</th><td><?php echo ($siteInfo["site_address"]); ?></td></tr><tr><th>邮&nbsp;&nbsp;编：</th><td><?php echo ($siteInfo["site_code"]); ?></td></tr><tr><th>电&nbsp;&nbsp;话：</th><td><?php echo ($siteInfo["site_tel"]); ?></td></tr><tr><th>邮&nbsp;&nbsp;箱：</th><td><?php echo ($siteInfo["site_mail"]); ?></td></tr></table><table><tr><th width="63">技术支持：</th><td><?php echo ($siteInfo["site_help"]); ?></td></tr></table><div class="map mt30"><img src="__ROOT__<?php echo ($adMap['picture']); ?>" /></div></div><div class="clear"></div></div><div class="all_news mt35"><div class="news_box clearfix"><ul class="business fl"><h3 class="business mb15">商业信息</h3><?php if(is_array($businessInfo)): $i = 0; $__LIST__ = $businessInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><ul class="server fl inline ml45"><h3 class="server mb15">快捷服务</h3><?php if(is_array($serviceInfo)): $i = 0; $__LIST__ = $serviceInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><div class="contact fr"><h3 class="contact mb10">联系方式</h3><div class="address">地址：<?php echo ($siteInfo["site_address"]); ?></div><div class="tel"><?php echo ($siteInfo["site_tel"]); ?></div><div class="mail"><?php echo ($siteInfo["site_mail"]); ?></div><div class="map"><a href="<?php echo U('China/Contact/index');?>">地图上寻找我们</a></div></div><div class="clear"></div></div></div><div class="footer"><div class="footer_box"><span class="fr"><a href="./"><img src="__ROOT__/Public/Home/China/Img/twitter.gif" /></a>&nbsp;
            <a href="./"><img src="__ROOT__/Public/Home/China/Img/facebook.gif" /></a>&nbsp;
            <a href="./"><img src="__ROOT__/Public/Home/China/Img/icon.gif" /></a>&nbsp;
            <a href="./"><img src="__ROOT__/Public/Home/China/Img/in.gif" /></a>&nbsp;
            <a href="./"><img src="__ROOT__/Public/Home/China/Img/rass.gif" /></a></span><span><?php echo ($siteInfo["site_right"]); ?></span></div></div></body></html>