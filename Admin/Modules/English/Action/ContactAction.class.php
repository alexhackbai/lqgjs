<?php
// 本类由系统自动生成，仅供测试用途
class ContactAction extends EnglishAction {

    public function message()
    {
        $messageDao = D('Contact');
        import('ORG.Util.Page');
        $count = $messageDao->count();
        $Page = new Page($count, 13);
        $show = $Page->show();
        $this->assign('page',$show);
        $message = $messageDao->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        //dump($message);
        $this->assign('message', $message);
        $this->display();
    }

    public function delMessage()
    {
        $id = $this->_get('id');
        // echo $id;
        $result = D('Contact')->delete($id);
        if (!empty($result)) {
            $this->success('信息删除成功!', U('English/Contact/message'));
        } else {
            $this->error('信息删除失败!');
        }
    }

    public function about()
    {
        $map['type_id'] = array('eq', 3);
        $newsInfo = D('News')->where($map)->order('id ASC')->find();
        if (!empty($newsInfo)) {
            $cover = D('Picture')->find($newsInfo['cover_id']);
            $newsInfo['cover'] = $cover['path'];
        }
        // var_dump($aboutInfo);
        $this->assign('newsInfo', $newsInfo);
        $this->display();
    }

    public function doAboutEdit()
    {
        $id = $this->_post('id');
        $coverId = $this->_post('cover_id');
        $update = $_POST['data'];
        if (!empty($coverId) && !empty($_FILES['cover']['name'])) {
            $this->saveCover($coverId);
        }
        $result = D('News')->where('id ='.$id)->save($update);
        if (!empty($result)) {
            $this->success('信息处理成功!', U('English/Contact/about', array('id'=>$id)));
        } else {
            $this->error('信息处理失败!', U('English/Contact/about', array('id'=>$id)));
        }
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
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