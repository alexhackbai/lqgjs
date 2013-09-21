<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends EnglishAction {

    public function index()
    {
        $tplData = array(
            'aboutInfo'=>$this->aboutInfo(),
            'caseInfo'=>$this->caseInfo(),
            'linkInfo'=>$this->linkInfo(),
            'sliderInfo'=>$this->sliderInfo(),
            'sertypeInfo'=>$this->sertypeInfo(),
        );
        $this->assign($tplData);
        $this->display();
    }

    public function aboutInfo()
    {
        $map['type_id'] = array('eq', 3);
        $aboutInfo = D('News')->where($map)->order('id ASC')->find();
        // var_dump($aboutInfo);
        return $aboutInfo;
    }

    public function sertypeInfo()
    {
        $map['id'] = array('in', '1,2,3,4');
        $sertypeInfo = D('Service')->where($map)->select();
        /*if (!empty($sertypeInfo)) {
            for ($i=0; $i < count($sertypeInfo); $i++) { 
                $cover = D('Picture')->find($sertypeInfo[$i]['cover_id']);
                $sertypeInfo[$i]['cover'] = $cover['path'];
            }
        }*/
        // var_dump($sertypeInfo);
        return $sertypeInfo;
    }

    public function caseInfo()
    {
        $caseInfo = D('Case')->where('status = 1')->limit(8)->order('id DESC')->select();
        if (!empty($caseInfo)) {
            for ($i=0; $i < count($caseInfo); $i++) { 
                $cover = D('Picture')->find($caseInfo[$i]['cover_id']);
                $caseInfo[$i]['cover'] = $cover['path'];
                load(extend);
                $caseInfo[$i]['desc'] = _msubstr(strip_tags($caseInfo[$i]['desc']), 0, 30);
                $caseInfo[$i]['link'] = U('English/Case/detail', array('id'=>$caseInfo[$i]['id']));
                // echo $cover['path'];
            }
        }
        // var_dump($caseInfo);
        return $caseInfo;
    }

    public function linkInfo()
    {
        $linkInfo = D('Ad')->where('type_id = 2')->limit(10)->order('id DESC')->select();
        if (!empty($linkInfo)) {
            for ($i=0; $i < count($linkInfo); $i++) { 
                $picture = D('Picture')->find($linkInfo[$i]['picture_id']);
                $linkInfo[$i]['picture'] = $picture['path'];
                // echo $picture['path'];
            }
        }
        // var_dump($linkInfo);
        return $linkInfo;
    }

    public function sliderInfo()
    {
        $sliderInfo = D('Ad')->where('type_id = 1')->limit(5)->order('id DESC')->select();
        if (!empty($sliderInfo)) {
            for ($i=0; $i < count($sliderInfo); $i++) { 
                $picture = D('Picture')->find($sliderInfo[$i]['picture_id']);
                $sliderInfo[$i]['picture'] = $picture['path'];
                // echo $picture['path'];
            }
        }
        // var_dump($sliderInfo);
        return $sliderInfo;
    }
}