<?php
// 本类由系统自动生成，仅供测试用途
class AdAction extends LandAction {

    public function ad()
    {
        $adInfo = D('Ad')->order('id DESC')->select();
        // var_dump($adInfo);
        $this->assign('adInfo', $adInfo);
        $this->display();
    }

    public function adAdd()
    {
        $adTypeInfo = D('AdType')->select();
        // var_dump($adTypeInfo);
        $this->assign('adTypeInfo', $adTypeInfo);
        $this->display();
    }

    public function doAdAdd()
    {
        $insert = $this->_post('data');
        //var_dump($insert);
        if (!empty($insert) && !empty($_FILES['cover']['name'])) {
            $insert['picture_id'] = $this->addCover();
        }
        $id = D('Ad')->add($insert);
        if (!empty($id)) {
            $this->success('信息处理成功!', U('Land/Ad/ad'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function adEdit()
    {
        $id = $this->_get('id');
        $adTypeInfo = D('AdType')->select();
        $adInfo = D('Ad')->find($id);
        if (!empty($adInfo['picture_id'])) {
            $picture = D('Picture')->find($adInfo['picture_id']);
            $adInfo['picture'] = $picture['path'];
        }
        $tplData = array('adTypeInfo'=>$adTypeInfo, 'adInfo'=>$adInfo);
        $this->assign($tplData);
        $this->display();
    }

    public function doAdEdit()
    {
        $id = $this->_post('id');
        $pictureId = $this->_post('picture_id');
        $update = $this->_post('data');
        if (!empty($pictureId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($pictureId);
        }
        $result = D('Ad')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('Land/Ad/adEdit', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('Land/Ad/adEdit', array('id'=>$id)));
        }
    }

    public function delAd()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('Ad')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('Land/Ad/ad'));
        } else {
            $this->error('信息删除失败!');
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
//////////////////////////////////////////////////////////////////////////////////////////////

    public function adType()
    {
        $adTypeInfo = D('AdType')->select();
        // var_dump($adTypeInfo);
        $this->assign('adTypeInfo', $adTypeInfo);
        $this->display();
    }

    public function adTypeAdd()
    {
        $this->display();
    }

    public function doAdTypeAdd()
    {
        $insert = $this->_post('data');
        if (!empty($insert)) {
            $id = D('AdType')->add($insert);
        }
        if (!empty($id)) {
            $this->success('信息处理成功!', U('Land/Ad/adType'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function adTypeEdit()
    {
        $id = $this->_get('id');
        $adTypeInfo = D('AdType')->find($id);
        // var_dump($adTypeInfo);
        $this->assign('adTypeInfo', $adTypeInfo);
        $this->display();
    }

    public function doAdTypeEdit()
    {
        $id = $this->_post('id');
        $update = $this->_post('data');
        $result = D('AdType')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('Land/Ad/adTypeEdit', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('Land/Ad/adTypeEdit', array('id'=>$id)));
        }
    }
}