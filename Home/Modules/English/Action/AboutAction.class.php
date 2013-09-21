<?php
// 本类由系统自动生成，仅供测试用途
class AboutAction extends EnglishAction {

    public function index()
    {
        $map['type_id'] = array('eq', 3);
        $aboutInfo = D('News')->where($map)->order('id ASC')->find();
        if (!empty($aboutInfo)) {
            $cover = D('Picture')->find($aboutInfo['cover_id']);
            $aboutInfo['cover'] = $cover['path'];
        }
        // var_dump($aboutInfo);
        $condition['id'] = array('in', '1,2,3,4');
        $bandsInfo = D('Service')->field('id, home')->where($condition)->order('id ASC')->select();
        if (!empty($bandsInfo)) {
            for ($i=0; $i < count($bandsInfo); $i++) {
                $bandsInfo[$i]['link'] = U('English/Service/detail', array('id'=>$bandsInfo[$i]['id']));
            }
        }
        // var_dump($bandsInfo);
        $teamInfo = D('News')->field('id, cover_id')->where('type_id = 4')->limit(4)->select();
        if (!empty($teamInfo)) {
            for ($i=0; $i < count($teamInfo); $i++) {
                $cover = D('Picture')->find($teamInfo[$i]['cover_id']);
                $teamInfo[$i]['cover'] = $cover['path'];
                $teamInfo[$i]['link'] = U('English/About/detail', array('id'=>$teamInfo[$i]['id']));
            }
        }
        // var_dump($teamInfo);
        $this->assign('aboutInfo', $aboutInfo);
        $this->assign('bandsInfo', $bandsInfo);
        $this->assign('teamInfo', $teamInfo);

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = 'about us'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = 'about us'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = 'about us,'.$aboutInfo['desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }

    public function detail()
    {
        $id = $this->_get('id');
        if (empty($id)) {
            $this->error('This information has been deleted or does not exist!');
        }
        // echo $id;
        $newsDao = D('News');
        $detailInfo = $newsDao->find($id);
        // var_dump($detailInfo);

        $this->assign('detailInfo', $detailInfo);
        $this->assign('serName', $this->serName());
        $this->assign('adMap', $this->adMap());

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = $detailInfo['title'].'-'.'our teams'.'-'.'about us'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = 'our teams'.','.'about us'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = 'our teams'.','.'about us'.','.$detailInfo['desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }
}