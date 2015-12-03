<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author john
 */
namespace Home\Model;
use Think\Model;

//class UserModel extends Model{
//     /**
//     * 自动验证
//     * self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）
//     * self::MUST_VALIDATE 或者1 必须验证
//     * self::VALUE_VALIDATE或者2 值不为空的时候验证
//     */
//    protected $_validate = array(              
//        array('password', '/^([a-zA-Z0-9@*#]{6,22})$/', '密码格式不正确,请重新输入！', 0),
//        array('repassword', 'password', '确认密码不正确', 0, 'confirm'), // 验证确认密码是否和密码一致
//        array('name', 'require', '用户名不能为空！'), //默认情况下用正则进行验证
//       // array('name', '', '该用户名已被注册！', 0, 'unique', 1), // 在新增的时候验证name字段是否唯一        
//        array('gender', '/^0|1$/', '性别不可以为空'),        
//        array('telephone', '/^1[34578]\d{9}$/', '手机号码格式不正确', 0), // 正则表达式验证手机号码               
//        array('telephone', '', '该手机号码已被占用', 0, 'unique', 1), // 新增的时候mobile字段是否唯一
//        //array('email', '', '该邮箱已被占用', 0, 'unique', 1), // 新增的时候email字段是否唯一               
//        array('email', 'email', '邮箱格式不正确'), // 内置正则验证邮箱格式
//        array('character','/[0-3]/','该角色不存在'),
//        //array('slogan', '')验证不超过50个字
//        //array('agree', 'is_agree', '请先同意网站安全协议！', 1, 'callback'), // 判断是否勾选网站安全协议
//    );
// 
//    /**
//     * 自动完成
//     */
//    protected $_auto = array (
//        array('createdAt', 'time', 1, 'function'), // 对regdate字段在新增的时候写入当前时间戳
//        
//    );
// 
//}
