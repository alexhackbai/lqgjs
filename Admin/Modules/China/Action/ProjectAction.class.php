<?php
// 本类由系统自动生成，仅供测试用途
class ProjectAction extends ChinaAction {

	  public function index()
    {
        $caseDao = D('Project');
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

	  public function projectAdd()
    {
        $this->display();
    }
    public function doProjectAdd()
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
        $id = D('Project')->add($insert);
        if (!empty($id)) {
            $this->success('信息处理成功!', U('China/Project/index'));
        } else {
            $this->error('信息处理失败!');
        }
    }

    public function projectEdit()
    {
        $id = $this->_get('id');
        $fourInfo = D('Project')->find($id);
        if (!empty($fourInfo['cover_id'])) {
            $cover = D('Picture')->find($fourInfo['cover_id']);
            $fourInfo['cover'] = $cover['path'];
        }
        $this->assign('fourInfo', $fourInfo);
        $this->display();
    }

    public function doProjectEdit()
    {
        $id = $this->_post('id');
        $coverId = $this->_post('cover_id');
        $update = $_POST['data'];
        if (!empty($coverId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($coverId);
        }
        $result = D('Project')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('China/Project/index', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('China/Project/projectEdit', array('id'=>$id)));
        }
    }

    public function delProject()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('Project')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('China/Project/index'));
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