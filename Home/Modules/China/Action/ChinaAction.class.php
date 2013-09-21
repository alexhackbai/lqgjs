<?php
// 本类由系统自动生成，仅供测试用途
class ChinaAction extends HomeAction {
    public function _initialize(){
        parent::_initialize();
        $this->assign('businessInfo', $this->businessInfo());
        $this->assign('serviceInfo', $this->serviceInfo());
        $this->assign('siteInfo', $this->siteInfo());
    }

    public function businessInfo()
    {
        $businessInfo = D('News')->where('type_id = 1')->limit(6)->order('id DESC')->select();
        if (!empty($businessInfo)) {
            for ($i=0; $i < count($businessInfo); $i++) { 
                $cover = D('Picture')->find($businessInfo[$i]['cover_id']);
                $businessInfo[$i]['cover'] = $cover['path'];
                // echo $cover['path'];
                $businessInfo[$i]['link'] = U('China/News/detail', array('id'=>$businessInfo[$i]['id']));
                load(extend);
                $businessInfo[$i]['title'] = _msubstr(strip_tags($businessInfo[$i]['title']), 0, 17);
            }
        }
        //var_dump($businessInfo);
        return $businessInfo;
    }

    public function serviceInfo()
    {
        $serviceInfo = D('News')->where('type_id = 2')->limit(5)->order('id DESC')->select();
        if (!empty($serviceInfo)) {
            for ($i=0; $i < count($serviceInfo); $i++) { 
                $cover = D('Picture')->find($serviceInfo[$i]['cover_id']);
                $serviceInfo[$i]['cover'] = $cover['path'];
                // echo $cover['path'];
                $serviceInfo[$i]['link'] = U('China/News/detail', array('id'=>$serviceInfo[$i]['id']));
                load(extend);
                $serviceInfo[$i]['title'] = _msubstr(strip_tags($serviceInfo[$i]['title']), 0, 35);
            }
        }
        // var_dump($serviceInfo);
        return $serviceInfo;
    }

    public function siteInfo()
    {
        $siteInfo = D('Setting')->find(1);
        // var_dump($siteInfo);
        return $siteInfo;
    }

    public function adMap()
    {
        $adMap = D('Ad')->where('type_id = 4')->order('id ASC')->find();
        $picture = D('Picture')->find($adMap['picture_id']);
        $adMap['picture'] = $picture['path'];
        // var_dump($adMap);
        return $adMap;
    }
}