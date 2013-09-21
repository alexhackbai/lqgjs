<?php
// 本类由系统自动生成，仅供测试用途
class ServiceAction extends ChinaAction {

	public function service()
    {
        $serviceInfo = D('Service')->order('id DESC')->select();
        // var_dump($adInfo);
        $this->assign('serviceInfo', $serviceInfo);
        $this->display();
    }

	public function doServiceAdd()
    {
        $insert = $this->_post('data');
        //var_dump($insert);
        if (!empty($insert) && !empty($_FILES['cover']['name'])) {
            $insert['cover_id'] = $this->addCover();
        }
        $id = D('Service')->add($insert);
          if (!empty($id)) {
            $this->success('信息处理成功!', U('China/Service/service'));
        } else {
            $this->error('信息处理失败!', U('China/Service/service'));
        }
    }

	   public function serviceEdit()
    {
         $id = $this->_get('id');     
         $info = D('Service')->find( $id);
        if (!empty($info['cover_id'])) {
            $pic = D('Picture')->find($info['cover_id']);
            $info['cover'] = $pic['path'];
        }
        // var_dump($info);
        $this->assign('info', $info);
        $this->display();
    }

    public function doServiceEdit()
    {
       $id = $this->_post('id');
        $pictureId = $this->_post('cover_id');
        $update = $this->_post('data');
        if (!empty($pictureId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($pictureId);
        }
        $result = D('Service')->where('id ='.$id)->save($update);
    
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/Service/service'));
        } else {
            $this->error('信息处理失败!');
        }

    }



  public function delService()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('Service')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('China/Service/service'));
        } else {
            $this->error('信息删除失败!');
        }
    }

    public function one()
    {
        $info = D('Service')->find(1);
        if (!empty($info['cover_id'])) {
            $pic = D('Picture')->find($info['cover_id']);
            $info['cover'] = $pic['path'];
        }
        // var_dump($info);
        $this->assign('info', $info);
        $this->display();
    }

    public function doOne()
    {
        // $update = $this->_post('data');
        $update = $_POST['data'];
        // var_dump($update);
        if (!empty($_FILES['cover']['name'])) {
            $this->addCover(1);
        }
        $result = D('Service')->where('id = 1')->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/Service/one'));
        } else {
            $this->error('信息处理失败!', U('China/Service/one'));
        }
    }

    public function two()
    {
        $info = D('Service')->find(2);
        if (!empty($info['cover_id'])) {
            $pic = D('Picture')->find($info['cover_id']);
            $info['cover'] = $pic['path'];
        }
        // var_dump($info);
        $this->assign('info', $info);
        $this->display();
    }

    public function doTwo()
    {
        $update = $_POST['data'];
        // var_dump($update);
        if (!empty($_FILES['cover']['name'])) {
            $this->addCover(2);
        }
        $result = D('Service')->where('id = 2')->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/Service/two'));
        } else {
            $this->error('信息处理失败!', U('China/Service/two'));
        }
    }

    public function three()
    {
        $info = D('Service')->find(3);
        if (!empty($info['cover_id'])) {
            $pic = D('Picture')->find($info['cover_id']);
            $info['cover'] = $pic['path'];
        }
        // var_dump($info);
        $this->assign('info', $info);
        $this->display();
    }

    public function doThree()
    {
        $update = $_POST['data'];
        // var_dump($update);
        if (!empty($_FILES['cover']['name'])) {
            $this->addCover(3);
        }
        $result = D('Service')->where('id = 3')->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/Service/three'));
        } else {
            $this->error('信息处理失败!', U('China/Service/three'));
        }
    }

    public function four()
    {
        $info = D('Service')->find(4);
        if (!empty($info['cover_id'])) {
            $pic = D('Picture')->find($info['cover_id']);
            $info['cover'] = $pic['path'];
        }
        // var_dump($info);
        $this->assign('info', $info);
        $this->display();
    }

    public function doFour()
    {
        $update = $_POST['data'];
        // var_dump($update);
        if (!empty($_FILES['cover']['name'])) {
            $this->addCover(4);
        }
        $result = D('Service')->where('id = 4')->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/Service/four'));
        } else {
            $this->error('信息处理失败!', U('China/Service/four'));
        }
    }
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