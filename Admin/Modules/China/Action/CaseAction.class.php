<?php
// 本类由系统自动生成，仅供测试用途
class CaseAction extends ChinaAction {

	  public function index()
    {
        $caseDao = D('Case');
        import('ORG.Util.Page');
      $count = $caseDao->where('1 = 1')->count();
        $Page = new Page($count, 12);
        $show = $Page->show();
        $this->assign('page',$show);
        $oneInfo = $caseDao->where('1 = 1')->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($oneInfo)) {
            load(extend);
            for ($i=0; $i < count($oneInfo); $i++) { 
                $oneInfo[$i]['desc'] = msubstr(strip_tags($oneInfo[$i]['desc']), 0, 49);
            }
        }
        //dump($oneInfo);
        $this->assign('oneInfo', $oneInfo);
        $this->display();
    }

	  public function caseAdd()
    {
        $this->display();
    }
    public function doCaseAdd()
    {
        $insert = $_POST['data'];
        if (!empty($insert) && !empty($_FILES['cover']['name'])) {
            $insert['cover_id'] = $this->addCover();
        }
        if (!empty($insert)) {
            $insert['service_id'] = 4;
            $insert['ctime'] = time();
        }
        // var_dump($insert);
        $id = D('Case')->add($insert);
        if (!empty($id)) {
            $this->success('信息处理成功!', U('China/Case/index'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function caseEdit()
    {
        $id = $this->_get('id');
        $fourInfo = D('Case')->find($id);
        if (!empty($fourInfo['cover_id'])) {
            $cover = D('Picture')->find($fourInfo['cover_id']);
            $fourInfo['cover'] = $cover['path'];
        }
        $this->assign('fourInfo', $fourInfo);
        $this->display();
    }

    public function doCaseEdit()
    {
        $id = $this->_post('id');
        $coverId = $this->_post('cover_id');
        $update = $_POST['data'];
        if (!empty($coverId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($coverId);
        }
        $result = D('Case')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/Case/index', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('China/Case/caseEdit', array('id'=>$id)));
        }
    }

    public function delCase()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('Case')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('China/Case/index'));
        } else {
            $this->error('信息删除失败!');
        }
    }


    public function one()
    {
        $caseDao = D('Case');
        import('ORG.Util.Page');
        $count = $caseDao->where('service_id = 1')->count();
        $Page = new Page($count, 12);
        $show = $Page->show();
        $this->assign('page',$show);
        $oneInfo = $caseDao->where('service_id = 1')->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($oneInfo)) {
            load(extend);
            for ($i=0; $i < count($oneInfo); $i++) { 
                $oneInfo[$i]['desc'] = msubstr(strip_tags($oneInfo[$i]['desc']), 0, 49);
            }
        }
        //dump($oneInfo);
        $this->assign('oneInfo', $oneInfo);
        $this->display();
    }

    public function oneAdd()
    {
        $this->display();
    }

    public function doOneAdd()
    {
        $insert = $_POST['data'];
        if (!empty($insert) && !empty($_FILES['cover']['name'])) {
            $insert['cover_id'] = $this->addCover();
        }
        if (!empty($insert)) {
            $insert['service_id'] = 1;
            $insert['ctime'] = time();
        }
        // var_dump($insert);
        $id = D('Case')->add($insert);
        if (!empty($id)) {
            $this->success('信息处理成功!', U('China/Case/one'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function oneEdit()
    {
        $id = $this->_get('id');
        $oneInfo = D('Case')->find($id);
        if (!empty($oneInfo['cover_id'])) {
            $cover = D('Picture')->find($oneInfo['cover_id']);
            $oneInfo['cover'] = $cover['path'];
        }
        $this->assign('oneInfo', $oneInfo);
        $this->display();
    }

    public function doOneEdit()
    {
        $id = $this->_post('id');
        $coverId = $this->_post('cover_id');
        $update = $_POST['data'];
        if (!empty($coverId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($coverId);
        }
        $result = D('Case')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/Case/oneEdit', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('China/Case/oneEdit', array('id'=>$id)));
        }
    }

    public function delOne()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('Case')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('China/Case/one'));
        } else {
            $this->error('信息删除失败!');
        }
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function two()
    {
        $caseDao = D('Case');
        import('ORG.Util.Page');
        $count = $caseDao->where('service_id = 2')->count();
        $Page = new Page($count, 12);
        $show = $Page->show();
        $this->assign('page',$show);
        $twoInfo = $caseDao->where('service_id = 2')->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($twoInfo)) {
            load(extend);
            for ($i=0; $i < count($twoInfo); $i++) { 
                $twoInfo[$i]['desc'] = msubstr(strip_tags($twoInfo[$i]['desc']), 0, 49);
            }
        }
        //dump($twoInfo);
        $this->assign('twoInfo', $twoInfo);
        $this->display();
    }

    public function twoAdd()
    {
        $this->display();
    }

    public function doTwoAdd()
    {
        $insert = $_POST['data'];
        if (!empty($insert) && !empty($_FILES['cover']['name'])) {
            $insert['cover_id'] = $this->addCover();
        }
        if (!empty($insert)) {
            $insert['service_id'] = 2;
            $insert['ctime'] = time();
        }
        // var_dump($insert);
        $id = D('Case')->add($insert);
        if (!empty($id)) {
            $this->success('信息处理成功!', U('China/Case/two'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function twoEdit()
    {
        $id = $this->_get('id');
        $twoInfo = D('Case')->find($id);
        if (!empty($twoInfo['cover_id'])) {
            $cover = D('Picture')->find($twoInfo['cover_id']);
            $twoInfo['cover'] = $cover['path'];
        }
        $this->assign('twoInfo', $twoInfo);
        $this->display();
    }

    public function doTwoEdit()
    {
        $id = $this->_post('id');
        $coverId = $this->_post('cover_id');
        $update = $_POST['data'];
        if (!empty($coverId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($coverId);
        }
        $result = D('Case')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/Case/twoEdit', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('China/Case/twoEdit', array('id'=>$id)));
        }
    }

    public function delTwo()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('Case')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('China/Case/two'));
        } else {
            $this->error('信息删除失败!');
        }
    }
//////////////////////////////////////////////////////////////////////////////////////////////////
    public function three()
    {
        $caseDao = D('Case');
        import('ORG.Util.Page');
        $count = $caseDao->where('service_id = 3')->count();
        $Page = new Page($count, 12);
        $show = $Page->show();
        $this->assign('page',$show);
        $threeInfo = $caseDao->where('service_id = 3')->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($threeInfo)) {
            load(extend);
            for ($i=0; $i < count($threeInfo); $i++) { 
                $threeInfo[$i]['desc'] = msubstr(strip_tags($threeInfo[$i]['desc']), 0, 49);
            }
        }
        //dump($threeInfo);
        $this->assign('threeInfo', $threeInfo);
        $this->display();
    }

    public function threeAdd()
    {
        $this->display();
    }

    public function doThreeAdd()
    {
        $insert = $_POST['data'];
        if (!empty($insert) && !empty($_FILES['cover']['name'])) {
            $insert['cover_id'] = $this->addCover();
        }
        if (!empty($insert)) {
            $insert['service_id'] = 3;
            $insert['ctime'] = time();
        }
        // var_dump($insert);
        $id = D('Case')->add($insert);
        if (!empty($id)) {
            $this->success('信息处理成功!', U('China/Case/three'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function threeEdit()
    {
        $id = $this->_get('id');
        $threeInfo = D('Case')->find($id);
        if (!empty($threeInfo['cover_id'])) {
            $cover = D('Picture')->find($threeInfo['cover_id']);
            $threeInfo['cover'] = $cover['path'];
        }
        $this->assign('threeInfo', $threeInfo);
        $this->display();
    }

    public function doThreeEdit()
    {
        $id = $this->_post('id');
        $coverId = $this->_post('cover_id');
        $update = $_POST['data'];
        if (!empty($coverId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($coverId);
        }
        $result = D('Case')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/Case/threeEdit', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('China/Case/threeEdit', array('id'=>$id)));
        }
    }

    public function delThree()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('Case')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('China/Case/three'));
        } else {
            $this->error('信息删除失败!');
        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function four()
    {
        $caseDao = D('Case');
        import('ORG.Util.Page');
        $count = $caseDao->where('service_id = 4')->count();
        $Page = new Page($count, 12);
        $show = $Page->show();
        $this->assign('page',$show);
        $fourInfo = $caseDao->where('service_id = 4')->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        if (!empty($fourInfo)) {
            load(extend);
            for ($i=0; $i < count($fourInfo); $i++) { 
                $fourInfo[$i]['desc'] = msubstr(strip_tags($fourInfo[$i]['desc']), 0, 49);
            }
        }
        //dump($fourInfo);
        $this->assign('fourInfo', $fourInfo);
        $this->display();
    }

    public function fourAdd()
    {
        $this->display();
    }

    public function doFourAdd()
    {
        $insert = $_POST['data'];
        if (!empty($insert) && !empty($_FILES['cover']['name'])) {
            $insert['cover_id'] = $this->addCover();
        }
        if (!empty($insert)) {
            $insert['service_id'] = 4;
            $insert['ctime'] = time();
        }
        // var_dump($insert);
        $id = D('Case')->add($insert);
        if (!empty($id)) {
            $this->success('信息处理成功!', U('China/Case/four'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function fourEdit()
    {
        $id = $this->_get('id');
        $fourInfo = D('Case')->find($id);
        if (!empty($fourInfo['cover_id'])) {
            $cover = D('Picture')->find($fourInfo['cover_id']);
            $fourInfo['cover'] = $cover['path'];
        }
        $this->assign('fourInfo', $fourInfo);
        $this->display();
    }

    public function doFourEdit()
    {
        $id = $this->_post('id');
        $coverId = $this->_post('cover_id');
        $update = $_POST['data'];
        if (!empty($coverId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($coverId);
        }
        $result = D('Case')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/Case/fourEdit', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('China/Case/fourEdit', array('id'=>$id)));
        }
    }

    public function delFour()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('Case')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('China/Case/four'));
        } else {
            $this->error('信息删除失败!');
        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////
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