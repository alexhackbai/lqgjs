<?php
// 本类由系统自动生成，仅供测试用途
class ServiceAction extends LandAction {

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
            $this->success('信息处理成功!', U('Land/Service/one'));
        } else {
            $this->error('信息处理失败!', U('Land/Service/one'));
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
            $this->success('信息处理成功!', U('Land/Service/two'));
        } else {
            $this->error('信息处理失败!', U('Land/Service/two'));
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
            $this->success('信息处理成功!', U('Land/Service/three'));
        } else {
            $this->error('信息处理失败!', U('Land/Service/three'));
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
            $this->success('信息处理成功!', U('Land/Service/four'));
        } else {
            $this->error('信息处理失败!', U('Land/Service/four'));
        }
    }

    public function addCover($id)
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
            // $update['path'] = $uploadinfo[0]['savepath'].$uploadinfo[0]['savename'];
            $update['path'] = '/Uploads/'.$uploadinfo[0]['savename'];
            D('Picture')->where('id='.$id)->save($update);
        }
    }
}