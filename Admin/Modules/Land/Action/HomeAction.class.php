<?php
// 本类由系统自动生成，仅供测试用途
class HomeAction extends LandAction {

    public function upwd()
    {
        $info = D('User')->find(1);
        // var_dump($siteInfo);
        $tplData = array('info'=>$info);
        $this->assign($tplData);
        $this->display();
    }
    public function doUpwd()
    {
        $uname = $this->_post('uname');
        if (!empty($uname)) {
            $update['uname'] = $uname;
        }
        $upwd = $this->_post('upwd');
        if (!empty($upwd)) {
            $update['upwd'] = md5($upwd);
        }
        // var_dump($insert);
        if (!empty($update)) {
            D('User')->where('id = 1')->save($update);
            $this->success('管理员信息更新成功!', U('Land/Home/upwd'));
        }
    }
}