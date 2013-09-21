<?php
// 本类由系统自动生成，仅供测试用途
class SocialResponsibilityAction extends ChinaAction {

    public function index()
    {
       
  
            // var_dump($aboutInfo);
        $aboutLs = D('News')->where('type_id = 6')->order('id DESC')->select();
        if (!empty($aboutLs)) {
            for ($i=0; $i < count($aboutLs); $i++) { 
                $aboutLs[$i]['link'] = U('China/About/detail', array('id'=>$aboutLs[$i]['id']));
            }
        }
        // var_dump($aboutLs);
       
        $this->assign('aboutLs', $aboutLs); 
        $this->assign('serviceInfo', $this->serviceInfo());
        $this->assign('caseInfo', $this->caseInfo());
         $this->assign('projectInfo', $this->projectInfo());
        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = '企业社会责任'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = '企业社会责任,'.$seoInfo['site_kwd'];
        $_SEO['desc'] = $aboutInfo['desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }

     public function caseInfo()
    {
        $caseInfo = D('Case')->order('id DESC')->select();
        if (!empty($caseInfo)) {
            for ($i=0; $i < count($caseInfo); $i++) { 
                $cover = D('Picture')->find($caseInfo[$i]['cover_id']);
                $caseInfo[$i]['cover'] = $cover['path'];
                load(extend);
                $caseInfo[$i]['desc'] = _msubstr(strip_tags($caseInfo[$i]['desc']), 0, 15);
                $caseInfo[$i]['link'] = U('China/Case/detail', array('id'=>$caseInfo[$i]['id']));
                // echo $cover['path'];
            }
        }
        // var_dump($caseInfo);
        return $caseInfo;
    }
 public function serviceInfo()
    {
        $caseInfo = D('Service')->order('id DESC')->select();
        if (!empty($caseInfo)) {
            for ($i=0; $i < count($caseInfo); $i++) { 
                $cover = D('Picture')->find($caseInfo[$i]['cover_id']);
                $caseInfo[$i]['cover'] = $cover['path'];
                load(extend);
                $caseInfo[$i]['desc'] = _msubstr(strip_tags($caseInfo[$i]['desc']), 0, 15);
                $caseInfo[$i]['link'] = U('China/Service/detail', array('id'=>$caseInfo[$i]['id']));
                // echo $cover['path'];
            }
        }
        // var_dump($caseInfo);
        return $caseInfo;
    }
     public function projectInfo()
    {
        $caseInfo = D('Project')->order('id DESC')->select();
        if (!empty($caseInfo)) {
            for ($i=0; $i < count($caseInfo); $i++) { 
                $cover = D('Picture')->find($caseInfo[$i]['cover_id']);
                $caseInfo[$i]['cover'] = $cover['path'];
                load(extend);
                $caseInfo[$i]['desc'] = _msubstr(strip_tags($caseInfo[$i]['desc']), 0, 15);
                $caseInfo[$i]['link'] = U('China/Project/detail', array('id'=>$caseInfo[$i]['id']));
                // echo $cover['path'];
            }
        }
        // var_dump($caseInfo);
        return $caseInfo;
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
        $hotNews = $newsDao->where('type_id = 3')->limit(3)->order('views DESC')->select();
        if (!empty($hotNews)) {
            for ($i=0; $i < count($hotNews); $i++) { 
                $hotNews[$i]['link'] = U('China/About/detail', array('id'=>$hotNews[$i]['id']));
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
        $_SEO['kwd'] = $detailInfo['title'].','.$seoInfo['site_kwd'];
        $_SEO['desc'] = $detailInfo['desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }
}