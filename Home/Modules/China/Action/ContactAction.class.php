<?php
// 本类由系统自动生成，仅供测试用途
class ContactAction extends ChinaAction {
    public function index()
    {
        $this->assign('caseInfo', $this->caseInfo());
         $this->assign('projectInfo', $this->projectInfo());
 $this->assign('serviceInfo', $this->serviceInfo());
        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = '联系我们'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = '联系我们'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = '联系我们,'.$seoInfo['site_desc'];
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
    
    public function message()
    {
        $contactDao = D('Contact');
        if ($contactDao->create()) {
            $insert['name'] = $this->_post('name');
            $insert['tel'] = $this->_post('tel');
            $insert['content'] = $this->_post('content');
            $insert['ctime'] = time();
            $id = $contactDao->add($insert);
            if (!empty($id)) {
                $this->success('留言成功!', U('China/Contact/index'));
            } else {
                $this->error('留言失败!', U('China/Contact/index'));
            }
        } else {
            $this->error($contactDao->getError());
        }
        $this->_post();
    }
}