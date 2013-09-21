<?php
// 本类由系统自动生成，仅供测试用途
class NewsAction extends LandAction {
    public function index()
    {
        $newsDao = D('News');
        $map['type_id'] = array('eq', 5);
        import('ORG.Util.EnPage');
        $count = $newsDao->where($map)->count();
        $Page = new Page($count, 6);
        $show = $Page->show();
        $this->assign('page',$show);
        $newsInfo = $newsDao->where($map)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($newsInfo)) {
            for ($i=0; $i < count($newsInfo); $i++) { 
                $cover = D('Picture')->find($newsInfo[$i]['cover_id']);
                $newsInfo[$i]['cover'] = $cover['path'];
                $newsInfo[$i]['link'] = U('Land/News/detail', array('id'=>$newsInfo[$i]['id']));
                load(extend);
                $newsInfo[$i]['desc'] = msubstr(strip_tags($newsInfo[$i]['desc']), 0, 200);
                $newsInfo[$i]['title'] = _msubstr(strip_tags($newsInfo[$i]['title']), 0, 29);
            }
        }
        // var_dump($newsInfo);

        $this->assign('newsInfo', $newsInfo);
        $this->assign('serName', $this->serName());
        $this->assign('adMap', $this->adMap());

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = 'our news'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = 'our news list'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = 'our news list'.','.'our news'.','.$seoInfo['site_desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }

    public function detail()
    {
        $id = $this->_get('id');
        if (empty($id)) {
            $this->error('This information has been deleted or does not exist!');
        }
        // echo $id;
        $newsDao = D('News');
        $detailInfo = $newsDao->find($id);
        // var_dump($detailInfo);
        $newsDao->where('id ='.$id)->setInc('views',1);

        $this->assign('detailInfo', $detailInfo);
        $this->assign('serName', $this->serName());
        $this->assign('adMap', $this->adMap());

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = $detailInfo['title'];
        $_SEO['kwd'] = $detailInfo['title'].','.'our news'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = 'our news'.','.$detailInfo['desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }
}