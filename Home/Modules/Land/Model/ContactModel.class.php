<?php
/**
 * 模型类
 * @version 2013-03-29
 */
class ContactModel extends Model {

    protected $_validate = array(
        array('name','require','Name can not be empty!'),
        array('mail','require','Mail can not be empty!'),
        array('content','require','Message can not be empty!'),
        // array('upwd','require','密码不能为空!'),
        // array('reupwd','upwd','两次密码不一致!',0,'confirm'),
        // array('mail','require','邮箱不能为空!'),
        // array('mail','email','邮箱格式不正确!'),
    );

}