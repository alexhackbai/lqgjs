<?php
// 本类由系统自动生成，仅供测试用途
class CaseAction extends EnglishAction {
    public function index()
    {
        $serviceId = $this->_get('service');
        if (!empty($serviceId)) {
            $map['service_id'] = array('eq', $serviceId);
            // echo $serviceId;
            $serviceName = D('Service')->field('pro_name')->where('id ='.$serviceId)->find($serviceId);
            // var_dump($serviceName);
            $this->assign('serviceName', $serviceName['pro_name']);
        }
        $caseDao = D('Case');
        import('ORG.Util.EnPage');
        $count = $caseDao->where($map)->count();
        $Page = new Page($count, 12);
        $show = $Page->show();
        $this->assign('page',$show);
        $caseInfo = $caseDao->field('id, cover_id')->where($map)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($caseInfo)) {
            for ($i=0; $i < count($caseInfo); $i++) { 
                $cover = D('Picture')->find($caseInfo[$i]['cover_id']);
                $caseInfo[$i]['cover'] = $cover['path'];
                $caseInfo[$i]['link'] = U('English/Case/detail', array('id'=>$caseInfo[$i]['id']));
            }
        }
        // var_dump($caseInfo);
        $this->assign('caseInfo', $caseInfo);

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = 'our cases'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = 'our cases'.','.'our cases list'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = 'our cases'.','.'our cases list'.','.$seoInfo['site_desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }

    public function detail()
    {
        $id = $this->_get('id');
        if (empty($id)) {
            $this->error('This information has been deleted or does not exist !');
        }
        // echo $id;
        $caseDao = D('Case');
        $detailInfo = $caseDao->find($id);
        // var_dump($detailInfo);
        $caseDao->where('id ='.$id)->setInc('views',1);

        $this->assign('detailInfo', $detailInfo);
        $this->assign('serName', $this->serName());
        $this->assign('adMap', $this->adMap());

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = $detailInfo['name'];
        $_SEO['kwd'] = 'our cases'.','.'our cases list'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = 'our cases'.','.'our cases list'.','.$detailInfo['desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }
}