<?php
// 本类由系统自动生成，仅供测试用途
class NewsAction extends ChinaAction {

    public function business()
    {
        $newsDao = D('News');
        import('ORG.Util.Page');
        $count = $newsDao->where('type_id = 1')->count();
        $Page = new Page($count, 12);
        $show = $Page->show();
        $this->assign('page',$show);
        $businessInfo = $newsDao->where('type_id = 1')->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($businessInfo)) {
            load(extend);
            for ($i=0; $i < count($businessInfo); $i++) { 
                $businessInfo[$i]['desc'] = msubstr(strip_tags($businessInfo[$i]['desc']), 0, 40);
            }
        }
        //dump($oneInfo);
        $this->assign('businessInfo', $businessInfo);
        $this->display();
    }

    public function businessAdd()
    {
        $this->display();
    }

    public function doBusinessAdd()
    {
        $insert = $_POST['data'];
        if (!empty($insert) && !empty($_FILES['cover']['name'])) {
            $insert['cover_id'] = $this->addCover();
        }
        if (!empty($insert)) {
            $insert['type_id'] = 1;
            $insert['ctime'] = time();
        }
        // var_dump($insert);
        $id = D('News')->add($insert);
        if (!empty($id)) {
            $this->success('信息处理成功!', U('China/News/business'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function businessEdit()
    {
        $id = $this->_get('id');
        $businessInfo = D('News')->find($id);
        if (!empty($businessInfo['cover_id'])) {
            $cover = D('Picture')->find($businessInfo['cover_id']);
            $businessInfo['cover'] = $cover['path'];
        }
        $this->assign('businessInfo', $businessInfo);
        $this->display();
    }
    
    public function doBusinessEdit()
    {
        $id = $this->_post('id');
        $coverId = $this->_post('cover_id');
        $update = $_POST['data'];
        if (!empty($coverId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($coverId);
        }
        $result = D('News')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/News/businessEdit', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('China/News/businessEdit', array('id'=>$id)));
        }
    }

    public function delBusiness()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('News')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('China/News/business'));
        } else {
            $this->error('信息删除失败!');
        }
    }
//////////////////////////////////////////////////////////////////////////////////////////////
    public function service()
    {
        $newsDao = D('News');
        import('ORG.Util.Page');
        $count = $newsDao->where('type_id = 2')->count();
        $Page = new Page($count, 12);
        $show = $Page->show();
        $this->assign('page',$show);
        $serviceInfo = $newsDao->where('type_id = 2')->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($serviceInfo)) {
            load(extend);
            for ($i=0; $i < count($serviceInfo); $i++) { 
                $serviceInfo[$i]['desc'] = msubstr(strip_tags($serviceInfo[$i]['desc']), 0, 40);
            }
        }
        //dump($oneInfo);
        $this->assign('serviceInfo', $serviceInfo);
        $this->display();
    }

    public function serviceAdd()
    {
        $this->display();
    }

    public function doServiceAdd()
    {
        $insert = $_POST['data'];
        if (!empty($insert) && !empty($_FILES['cover']['name'])) {
            $insert['cover_id'] = $this->addCover();
        }
        if (!empty($insert)) {
            $insert['type_id'] = 2;
            $insert['ctime'] = time();
        }
        // var_dump($insert);
        $id = D('News')->add($insert);
        if (!empty($id)) {
            $this->success('信息处理成功!', U('China/News/service'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function serviceEdit()
    {
        $id = $this->_get('id');
        $serviceInfo = D('News')->find($id);
        if (!empty($serviceInfo['cover_id'])) {
            $cover = D('Picture')->find($serviceInfo['cover_id']);
            $serviceInfo['cover'] = $cover['path'];
        }
        $this->assign('serviceInfo', $serviceInfo);
        $this->display();
    }
    
    public function doServiceEdit()
    {
        $id = $this->_post('id');
        $coverId = $this->_post('cover_id');
        $update = $_POST['data'];
        if (!empty($coverId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($coverId);
        }
        $result = D('News')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/News/serviceEdit', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('China/News/serviceEdit', array('id'=>$id)));
        }
    }

    public function delService()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('News')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('China/News/service'));
        } else {
            $this->error('信息删除失败!');
        }
    }
//////////////////////////////////////////////////////////////////////////////////////////////
public function news()
    {
        $newsDao = D('News');
        import('ORG.Util.Page');
        $map['type_id'] = array('not in', '1,2');
        $count = $newsDao->where($map)->count();
        $Page = new Page($count, 12);
        $show = $Page->show();
        $this->assign('page',$show);
        $newsInfo = $newsDao->where($map)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($newsInfo)) {
            load(extend);
            for ($i=0; $i < count($newsInfo); $i++) { 
                $newsInfo[$i]['desc'] = msubstr(strip_tags($newsInfo[$i]['desc']), 0, 40);
            }
        }
        //dump($oneInfo);
        $this->assign('newsInfo', $newsInfo);
        $this->display();
    }

    public function newsAdd()
    {
        $map['id'] = array('not in', '1,2');
        $typeInfo = D('NewsType')->where($map)->select();
        // var_dump($typeInfo);
        $this->assign('typeInfo', $typeInfo);
        $this->display();
    }

    public function doNewsAdd()
    {
        $insert = $_POST['data'];
        if (!empty($insert) && !empty($_FILES['cover']['name'])) {
            $insert['cover_id'] = $this->addCover();
        }
        if (!empty($insert)) {
            $insert['ctime'] = time();
        }
        // var_dump($insert);
        $id = D('News')->add($insert);
        if (!empty($id)) {
            $this->success('信息处理成功!', U('China/News/news'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function newsEdit()
    {
        $map['id'] = array('not in', '1,2');
        $typeInfo = D('NewsType')->where($map)->select();
        $id = $this->_get('id');
        $newsInfo = D('News')->find($id);
        if (!empty($newsInfo['cover_id'])) {
            $cover = D('Picture')->find($newsInfo['cover_id']);
            $newsInfo['cover'] = $cover['path'];
        }
        // var_dump($newsInfo);
        $tplData = array('typeInfo'=>$typeInfo, 'newsInfo'=>$newsInfo);
        $this->assign($tplData);
        $this->display();
    }
    
    public function doNewsEdit()
    {
        $id = $this->_post('id');
        $coverId = $this->_post('cover_id');
        $update = $_POST['data'];
        if (!empty($coverId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($coverId);
        }
        $result = D('News')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/News/newsEdit', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('China/News/newsEdit', array('id'=>$id)));
        }
    }

    public function delNews()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('News')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('China/News/news'));
        } else {
            $this->error('信息删除失败!');
        }
    }
//////////////////////////////////////////////////////////////////////////////////////////////
    public function type()
    {
        $map['id'] = array('not in', '1,2');
        $typeInfo = D('NewsType')->where($map)->select();
        // var_dump($adTypeInfo);
        $this->assign('typeInfo', $typeInfo);
        $this->display();
    }

    public function typeAdd()
    {
        $this->display();
    }

    public function doTypeAdd()
    {
        $insert = $this->_post('data');
        if (!empty($insert)) {
            $id = D('NewsType')->add($insert);
        }
        if (!empty($id)) {
            $this->success('信息处理成功!', U('China/News/type'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function typeEdit()
    {
        $id = $this->_get('id');
        $typeInfo = D('NewsType')->find($id);
        // var_dump($typeInfo);
        $this->assign('typeInfo', $typeInfo);
        $this->display();
    }

    public function doTypeEdit()
    {
        $id = $this->_post('id');
        $update = $this->_post('data');
        $result = D('NewsType')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/News/typeEdit', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('China/News/typeEdit', array('id'=>$id)));
        }
    }
//////////////////////////////////////////////////////////////////////////////////////////////
public function addCover()
    {
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload->maxSize = 3145728;
        $upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');
        // 上传路径设置
        $upload->autoSub = true;
        $upload->subType = 'date';
        $upload->dateFormat = 'Y-m-d';
        $upload->savePath = './Uploads/';

        if (!$upload->upload()) {
            $this->error($upload->getErrorMsg());
        }
        $uploadinfo = $upload->getUploadFileInfo();
        if (!empty($uploadinfo)) {
            $insert['path'] = '/Uploads/'.$uploadinfo[0]['savename'];
            $id = D('Picture')->add($insert);
            return $id;
        }
    }

    public function saveCover($id)
    {
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload->maxSize = 3145728;
        $upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');
        // 上传路径设置
        $upload->autoSub = true;
        $upload->subType = 'date';
        $upload->dateFormat = 'Y-m-d';
        $upload->savePath = './Uploads/';

        if (!$upload->upload()) {
            $this->error($upload->getErrorMsg());
        }
        $uploadinfo = $upload->getUploadFileInfo();
        if (!empty($uploadinfo)) {
            $update['path'] = '/Uploads/'.$uploadinfo[0]['savename'];
            D('Picture')->where('id='.$id)->save($update);
        }
    }
}