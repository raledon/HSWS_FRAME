<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginModel
 *
 * @author john
 */
namespace Home\Model;
use Think\Model;
class LoginModel extends Model {
    //put your code here
     // 重新定义表
    protected $tableName = 'user';

    /**
     * 自动验证
     * self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）
     * self::MUST_VALIDATE 或者1 必须验证
     * self::VALUE_VALIDATE或者2 值不为空的时候验证
     */
    protected $_validate = array(
        array('username', 'require', '用户名不能为空！'), //默认情况下用正则进行验证
        array('password', 'require', '登录密码不能为空！'), // 默认情况下用正则进行验证
    );

    /**
     * 自动完成
     */
    protected $_auto = array (
        /* 登录的时候自动完成 */
        //array('password', 'md5', 3, 'function') , // 对password字段使用md5函数处理
    );
}
