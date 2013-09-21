<?php
// 本类由系统自动生成，仅供测试用途
class ContactAction extends LandAction {
    public function index()
    {
        $contactMap = D('Ad')->where('type_id = 6')->order('id ASC')->find();
        $picture = D('Picture')->find($contactMap['picture_id']);
        $contactMap['picture'] = $picture['path'];
        // var_dump($contactMap);
        $map['type_id'] = array('eq', 3);
        $aboutInfo = D('News')->where($map)->order('id ASC')->find();
        load(extend);
        $aboutInfo['desc'] = _msubstr(strip_tags($aboutInfo['desc']), 0, 200);
        // var_dump($aboutInfo);

        $this->assign('contactMap', $contactMap);
        $this->assign('aboutInfo', $aboutInfo);

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = 'contant us'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = 'contant us'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = 'contant us'.','.$seoInfo['site_desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }
    public function message()
    {
        $contactDao = D('Contact');
        if ($contactDao->create()) {
            $insert['name'] = $this->_post('name');
            $insert['mail'] = $this->_post('mail');
            $insert['content'] = $this->_post('content');
            $insert['ctime'] = time();
            $id = $contactDao->add($insert);
            if (!empty($id)) {
                $this->success('Leave a message success !', U('Land/Contact/index'));
            } else {
                $this->error('Leave a message fail !', U('Land/Contact/index'));
            }
        } else {
            $this->error($contactDao->getError());
        }
        $this->_post();
    }
}