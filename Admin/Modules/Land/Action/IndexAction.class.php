<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends LandAction {
    public function index()
    {
        $this->assign('channel', $this->_getChannel());
        $this->assign('menu',    $this->_getMenu());
        $this->display();
    }

    /**
     * 头部菜单
     */
    protected function _getChannel() {
        return array(
            'index'     => '首页',
            'global'    => '全局',
            'service'   => '服务',
            'news'      => '资讯',
            'case'      => '案例',
            'contact'   => '联系',
            'ad'        => '广告',
        );
    }

    /**
     * 左侧菜单
     */
    protected function _getMenu() {

        $menu = array();

        // 后台管理首页
        $menu['index'] = array(
            '首页' => array(
                '基本信息' => U('Land/Global/basic'),
                '管理员' => U('Land/Home/upwd'),
                '客户留言' => U('Land/Contact/message'),
            ),
        );

        // 全局
        $menu['global'] = array(
            '全局配置' => array(
                '基本信息' => U('Land/Global/basic'),
                '管理员' => U('Land/Home/upwd'),
            ),
        );

        // 服务
        $menu['service'] = array(
            '服务项目' => array(
                '服务项目一' => U('Land/Service/one'),
                '服务项目二' => U('Land/Service/two'),
                '服务项目三' => U('Land/Service/three'),
                '服务项目四' => U('Land/Service/four'),
            ),
            '案例展示' => array(
                '服务项目一' => U('Land/Case/one'),
                '服务项目二' => U('Land/Case/two'),
                '服务项目三' => U('Land/Case/three'),
                '服务项目四' => U('Land/Case/four'),
            ),
        );

        // 资讯
        $menu['news'] = array(
            '商业信息' => array(
                '商业信息' => U('Land/News/business'),
            ),
            '快捷服务' => array(
                '快捷服务' => U('Land/News/service'),
            ),
            '相关资讯' => array(
                '资讯管理' => U('Land/News/news'),
                '资讯分类' => U('Land/News/type'),
            ),
        );

        // 案例
        $menu['case'] = array(
            '案例展示' => array(
                '服务项目一' => U('Land/Case/one'),
                '服务项目二' => U('Land/Case/two'),
                '服务项目三' => U('Land/Case/three'),
                '服务项目四' => U('Land/Case/four'),
            ),
        );

        // 单页
        $menu['contact'] = array(
            '联系我们' => array(
                '客户留言' => U('Land/Contact/message'),
                '关于我们' => U('Land/Contact/about'),
            ),
        );

        // 广告
        $menu['ad'] = array(
            '广告管理' => array(
                '广告管理' => U('Land/Ad/ad'),
                '添加广告位' => U('Land/Ad/adType'),
            ),
        );

        return $menu;
    }
}