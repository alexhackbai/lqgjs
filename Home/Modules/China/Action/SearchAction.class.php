<?php
// 本类由系统自动生成，仅供测试用途
class SearchAction extends ChinaAction {
    public function result()
    {
        $titleKey = $this->_post('search');
        if (!empty($titleKey) && ($titleKey != '输入检索的关键词')) {
            $map['title'] = array('like', "%$titleKey%");
        }
        $map['type_id'] = array('in', '1,2,5');
        $newsDao = D('News');
        import('ORG.Util.Page');
        $count = $newsDao->where($map)->count();
        $Page = new Page($count, 5);
        $show = $Page->show();
        $this->assign('page',$show);
        $resultInfo = $newsDao->where($map)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        // $resultInfo = D('News')->where($map)->select();
        if (!empty($resultInfo)) {
            for ($i=0; $i < count($resultInfo); $i++) { 
                $cover = D('Picture')->find($resultInfo[$i]['cover_id']);
                $resultInfo[$i]['cover'] = $cover['path'];
                $resultInfo[$i]['link'] = U('China/News/detail', array('id'=>$resultInfo[$i]['id']));
                load(extend);
                $resultInfo[$i]['desc'] = msubstr(strip_tags($resultInfo[$i]['desc']), 0, 105);
                $resultInfo[$i]['title'] = _msubstr(strip_tags($resultInfo[$i]['title']), 0, 29);
            }
        }
        // var_dump($resultInfo);
        $newsLs = D('News')->where('type_id = 5')->limit(3)->order('views DESC')->select();
        if (!empty($newsLs)) {
            for ($i=0; $i < count($newsLs); $i++) { 
                $newsLs[$i]['link'] = U('China/News/detail', array('id'=>$newsLs[$i]['id']));
            }
        }
        $this->assign('resultInfo', $resultInfo);
        $this->assign('newsLs', $newsLs);
        $this->assign('adMap', $this->adMap());

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = '奇嘉搜索结果'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = '奇嘉搜索结果'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = '奇嘉搜索结果,'.$seoInfo['site_desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }
}