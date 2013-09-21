<?php
// 本类由系统自动生成，仅供测试用途
class SearchAction extends EnglishAction {
    public function result()
    {
        $titleKey = $this->_post('search');
        if (!empty($titleKey)) {
            $map['title'] = array('like', "%$titleKey%");
        }
        $map['type_id'] = array('in', '1,2,5');
        $newsDao = D('News');
        import('ORG.Util.EnPage');
        $count = $newsDao->where($map)->count();
        $Page = new Page($count, 6);
        $show = $Page->show();
        $this->assign('page',$show);
        $resultInfo = $newsDao->where($map)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        // $resultInfo = D('News')->where($map)->select();
        if (!empty($resultInfo)) {
            for ($i=0; $i < count($resultInfo); $i++) { 
                $cover = D('Picture')->find($resultInfo[$i]['cover_id']);
                $resultInfo[$i]['cover'] = $cover['path'];
                $resultInfo[$i]['link'] = U('English/News/detail', array('id'=>$resultInfo[$i]['id']));
                load(extend);
                $resultInfo[$i]['desc'] = msubstr(strip_tags($resultInfo[$i]['desc']), 0, 200);
                $resultInfo[$i]['title'] = _msubstr(strip_tags($resultInfo[$i]['title']), 0, 29);
            }
        }
        // var_dump($resultInfo);

        $this->assign('resultInfo', $resultInfo);
        $this->assign('serName', $this->serName());
        $this->assign('adMap', $this->adMap());

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = 'searching result'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = 'searching result'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = 'searching result'.','.$seoInfo['site_desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }

    public function searchCase()
    {
        $nameKey = $this->_post('name');
        if (!empty($nameKey)) {
            $map['name'] = array('like', "%$nameKey%");
        }
        $caseDao = D('Case');
        import('ORG.Util.EnPage');
        $count = $caseDao->where($map)->count();
        $Page = new Page($count, 12);
        $show = $Page->show();
        $this->assign('page',$show);
        $searchCaseInfo = $caseDao->field('id, cover_id')->where($map)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($searchCaseInfo)) {
            for ($i=0; $i < count($searchCaseInfo); $i++) { 
                $cover = D('Picture')->find($searchCaseInfo[$i]['cover_id']);
                $searchCaseInfo[$i]['cover'] = $cover['path'];
                $searchCaseInfo[$i]['link'] = U('English/Case/detail', array('id'=>$searchCaseInfo[$i]['id']));
            }
        }
        $this->assign('searchCaseInfo', $searchCaseInfo);
        $this->assign('serName', $this->serName());
        $this->assign('adMap', $this->adMap());

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = 'searching result'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = 'searching result'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = 'searching result'.','.$seoInfo['site_desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }
}