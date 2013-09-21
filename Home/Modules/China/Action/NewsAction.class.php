<?php
// 本类由系统自动生成，仅供测试用途
class NewsAction extends ChinaAction {
    public function index()
    {
        $newsDao = D('News');
        $map['type_id'] = array('eq', 5);
        import('ORG.Util.Page');
        $count = $newsDao->where($map)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $this->assign('page',$show);
        $newsInfo = $newsDao->where($map)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($newsInfo)) {
            for ($i=0; $i < count($newsInfo); $i++) { 
                $cover = D('Picture')->find($newsInfo[$i]['cover_id']);
                $newsInfo[$i]['cover'] = $cover['path'];
                $newsInfo[$i]['link'] = U('China/News/detail', array('id'=>$newsInfo[$i]['id']));
                load(extend);
                $newsInfo[$i]['desc'] = msubstr(strip_tags($newsInfo[$i]['desc']), 0, 105);
                $newsInfo[$i]['title'] = _msubstr(strip_tags($newsInfo[$i]['title']), 0, 29);
            }
        }
        // var_dump($newsInfo);
        $newsLs = D('News')->where('type_id = 5')->limit(3)->order('views DESC')->select();
        if (!empty($newsLs)) {
            for ($i=0; $i < count($newsLs); $i++) { 
                $newsLs[$i]['link'] = U('China/News/detail', array('id'=>$newsLs[$i]['id']));
            }
        }
        // var_dump($newsLs);
        $this->assign('newsInfo', $newsInfo);
        $this->assign('newsLs', $newsLs);
        $this->assign('adMap', $this->adMap());

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = '奇嘉动态'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = '奇嘉动态'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = '奇嘉动态,'.$seoInfo['site_desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }

    public function detail()
    {
        $id = $this->_get('id');
        if (empty($id)) {
            $this->error('信息不存在或已删除!');
        }
        // echo $id;
        $newsDao = D('News');
        $detailInfo = $newsDao->find($id);
        // var_dump($detailInfo);
        $newsDao->where('id ='.$id)->setInc('views',1);
        $hotNews = $newsDao->where('type_id = 5')->limit(3)->order('views DESC')->select();
        if (!empty($hotNews)) {
            for ($i=0; $i < count($hotNews); $i++) { 
                $hotNews[$i]['link'] = U('China/News/detail', array('id'=>$hotNews[$i]['id']));
                load(extend);
                $hotNews[$i]['title'] = _msubstr(strip_tags($hotNews[$i]['title']), 0, 22);
            }
        }
        // var_dump($hotNews);

        $this->assign('detailInfo', $detailInfo);
        $this->assign('hotNews', $hotNews);
        $this->assign('adMap', $this->adMap());

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = $detailInfo['title'];
        $_SEO['kwd'] = '奇嘉动态'.','.$detailInfo['title'].','.$seoInfo['site_kwd'];
        $_SEO['desc'] = '奇嘉动态,'.$detailInfo['desc'].','.$seoInfo['site_desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }
}