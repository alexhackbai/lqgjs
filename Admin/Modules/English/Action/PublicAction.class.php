<?php
// 本类由系统自动生成，仅供测试用途
class PublicAction extends Action {

    public function login()
    {
        if (session('?ENGLISH') && (session('ENGLISH') == '1011')) {
            $this->success('管理员无需重复登录!', U('English/Index/index'));
        }
        $this->display();
    }

    public function doLogin()
    {
        $name = $this->_post('name');
        $password = $this->_post('password');
        $code = $this->_post('code');
        if (empty($name) || empty($password) || empty($code) || ($code != '0708')) {
            $this->error('登录信息不能为空!');
        }
        $data = D('User')->find(1);
        if (($name == $data['uname']) && (md5($password) == $data['upwd'])) {
            session('ENGLISH', '1011');
            $this->success('管理员登录成功!', U('English/Index/index'));
        } else {
            $this->error('登录失败!', U('English/Public/login'));
        }
    }

    public function logout()
    {
        session('ENGLISH', null);
        $this->success('安全退出!', "__ROOT__/index.php/English/Index/index");
    }
}