<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends ChinaAction {
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
            'cases'   => '产品',
            'project'   => '项目',
            'news'      => '资讯',          
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
                '基本信息' => U('China/Global/basic'),
                '管理员' => U('China/Home/upwd'),
                '客户留言' => U('China/Contact/message'),
            ),
        );

        // 全局
        $menu['global'] = array(
            '全局配置' => array(
                '基本信息' => U('China/Global/basic'),
                '管理员' => U('China/Home/upwd'),
            ),
        );
		//信息
		  $menu['allinfo']=array(
			 '服务' => array(
                '服务管理' => U('China/Service/service'),              
            ),
			 '产品' => array(
                '产品管理' => U('China/Case/index'),               
            ),
			 '项目' => array(
                '项目管理' => U('China/Ad/ad'),               
            ),
		  ); 

        // 服务
        $menu['service'] = array(
            '服务' => array(
                '服务管理' => U('China/Service/service'),              
            ),
        );
          // 产品
        $menu['cases'] = array(
            '产品' => array(
                '产品管理' => U('China/Case/index'),               
            ),
        );
          // 项目
        $menu['project'] = array(
           '项目' => array(
                '项目管理' => U('China/Project/index'),               
            ),
        );

        // 资讯
        $menu['news'] = array(
            // '商业信息' => array(
            //     '商业信息' => U('China/News/business'),
            // ),
            // '快捷服务' => array(
            //     '快捷服务' => U('China/News/service'),
            // ),
            '相关资讯' => array(
                '资讯管理' => U('China/News/news'),
                '资讯分类' => U('China/News/type'),
            ),
        );

        // 案例
        $menu['case'] = array(
            '案例展示' => array(
                '服务项目一' => U('China/Case/one'),
                '服务项目二' => U('China/Case/two'),
                '服务项目三' => U('China/Case/three'),
                '服务项目四' => U('China/Case/four'),
            ),
        );

        // 单页
        $menu['contact'] = array(
            '联系我们' => array(
                '客户留言' => U('China/Contact/message'),
                '关于我们' => U('China/Contact/about'),
            ),
        );

        // 广告
        $menu['ad'] = array(
            '广告管理' => array(
                '广告管理' => U('China/Ad/ad'),
                '添加广告位' => U('China/Ad/adType'),
            ),
        );

        return $menu;
    }
}