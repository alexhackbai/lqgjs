<?php
// 本类由系统自动生成，仅供测试用途
class ServiceAction extends EnglishAction {

    public function index()
    {
        $condition['id'] = array('in', '1,2,3,4');
        $bandsInfo = D('Service')->where($condition)->order('id ASC')->select();
        if (!empty($bandsInfo)) {
            for ($i=0; $i < count($bandsInfo); $i++) {
                $cover = D('Picture')->find($bandsInfo[$i]['cover_id']);
                $bandsInfo[$i]['cover'] = $cover['path'];
                $bandsInfo[$i]['link'] = U('English/Service/detail', array('id'=>$bandsInfo[$i]['id']));
            }
        }
        // var_dump($bandsInfo);
        $linkInfo = D('Ad')->where('type_id = 2')->limit(8)->order('id DESC')->select();
        if (!empty($linkInfo)) {
            for ($i=0; $i < count($linkInfo); $i++) { 
                $picture = D('Picture')->find($linkInfo[$i]['picture_id']);
                $linkInfo[$i]['picture'] = $picture['path'];
                // echo $picture['path'];
            }
        }
        // var_dump($linkInfo);
        $hotCase = D('Case')->limit(2)->order('views DESC')->select();
        if (!empty($hotCase)) {
            for ($i=0; $i < count($hotCase); $i++) { 
                $cover = D('Picture')->find($hotCase[$i]['cover_id']);
                $hotCase[$i]['cover'] = $cover['path'];
                // echo $cover['path'];
                $hotCase[$i]['link'] = U('English/Case/detail', array('id'=>$hotCase[$i]['id']));
            }
        }
        // var_dump($hotCase);
        $this->assign('bandsInfo', $bandsInfo);
        $this->assign('linkInfo', $linkInfo);
        $this->assign('hotCase', $hotCase);

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = 'services'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = 'all services'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = 'services'.','.$seoInfo['site_desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }

    public function detail()
    {
        $id = $this->_get('id');
        if (empty($id)) {
            $this->error('This information has been deleted or does not exist !');
        }
        // echo $id;
        $serviceDao = D('Service');
        $detailInfo = $serviceDao->find($id);
        // var_dump($detailInfo);
        $serviceDao->where('id ='.$id)->setInc('views',1);

        $this->assign('detailInfo', $detailInfo);
        $this->assign('serName', $this->serName());
        $this->assign('adMap', $this->adMap());

        // SEO
        $seoInfo = $this->siteInfo();
        // var_dump($seoInfo);
        $_SEO = array();
        $_SEO['title'] = $detailInfo['pro_name'].'-'.'services'.'-'.$seoInfo['site_title'].'-'.$seoInfo['site_name'];
        $_SEO['kwd'] = 'services'.','.$detailInfo['pro_name'].'all services'.','.$seoInfo['site_kwd'];
        $_SEO['desc'] = 'services'.','.$detailInfo['pro_name'].','.$seoInfo['site_desc'];
        // var_dump($_SEO);
        $this->assign('_SEO', $_SEO);

        $this->display();
    }
}