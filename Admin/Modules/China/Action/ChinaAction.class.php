<?php
// 本类由系统自动生成，仅供测试用途
class ChinaAction extends AdminAction {
    public function _initialize(){
        parent::_initialize();
        // echo '123';
        if (!session('?CHINA')) {
            $this->error('请登录后再进行相关操作!', U('China/Public/login'));
        }
        if (session('CHINA') != '1011') {
            $this->error('您不是管理员!', U('China/Public/login'));
        }
    }
}