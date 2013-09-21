<?php
// 本类由系统自动生成，仅供测试用途
class EnglishAction extends AdminAction {
    public function _initialize(){
        parent::_initialize();
        // echo '123';
        if (!session('?ENGLISH')) {
            $this->error('请登录后再进行相关操作!', U('English/Public/login'));
        }
        if (session('ENGLISH') != '1011') {
            $this->error('您不是管理员!', U('English/Public/login'));
        }
    }
}