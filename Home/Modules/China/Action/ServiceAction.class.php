<?php
// 本类由系统自动生成，仅供测试用途
class ServiceAction extends ChinaAction {
    public function index()
    {
        $serviceId = $this->_get('service');
        if (!empty($serviceId)) {
            $map['service_id'] = array('eq', $serviceId);
            // echo $serviceId;
        }
        $caseDao = D('Case');
        import('ORG.Util.Page');
        $count = $caseDao->where($map)->count();
        $Page = new Page($count, 12);
        $show = $Page->show();
        $this->assign('page',$show);
        $caseInfo = $caseDao->where($map)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($caseInfo)) {
            for ($i=0; $i < count($caseInfo); $i++) { 
                $cover = D('Picture')->find($caseInfo[$i]['cover_id']);
                $caseInfo[$i]['cover'] = $cover['path'];
                $caseInfo[$i]['link'] = U('China/Case/detail', array('id'=>$caseInfo[$i]['id']));
                load(extend);
                $caseInfo[$i]['name'] = _msubstr(strip_tags($caseInfo[$i]['name']), 0, 17);
                $caseInfo[$i]['desc'] = msubstr(strip_tags($caseInfo[$i]['desc']), 0, 40);
            }
        }
        // var_dump($caseInfo);
        $condition = array('in', '1,2,3,4');
        $serPro = D('Service')->field('id, pro_name')->where($condition)->select();
        //var_dump($serPro);
        $this->assign('caseInfo', $caseInfo);
        $this->assign('serPro', $serPro);
     
        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = '案例展示'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = '案例展示,'.$seoInfo['site_kwd'];
        $_SEO['desc'] = '案例展示,'.$seoInfo['site_desc'];
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
        $caseDao = D('Service');
        $detailInfo = $caseDao->find($id);
           $cover = D('Picture')->find($detailInfo['cover_id']);
               $detailInfo['cover'] = $cover['path'];
       

        $this->assign('detailInfo', $detailInfo);
     
         $this->assign('serviceInfo', $this->serviceInfo());
        $this->assign('caseInfoList', $this->caseInfo());
         $this->assign('projectInfo', $this->projectInfo());

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = $detailInfo['name'];
        $_SEO['kwd'] = $detailInfo['name'].',服务展示,'.$seoInfo['site_title'].','.$seoInfo['site_name'];
        $_SEO['desc'] = '服务展示,'.$detailInfo['desc'];
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
}