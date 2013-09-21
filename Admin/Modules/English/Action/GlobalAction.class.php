<?php
// 本类由系统自动生成，仅供测试用途
class GlobalAction extends EnglishAction {

    /*网站基本信息*/
    public function basic()
    {
        $siteInfo = D('Setting')->find(1);
        // var_dump($siteInfo);
        $tplData = array('siteInfo'=>$siteInfo);
        $this->assign($tplData);
        $this->display();
    }
    public function doBasic()
    {
        $update = $this->_post('data');
        // var_dump($insert);
        if (!empty($update)) {
            D('Setting')->where('id = 1')->save($update);
            $this->success('网站信息更新成功!', U('English/Global/basic'));
        }
    }
}