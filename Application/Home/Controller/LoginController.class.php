<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author john
 */
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{
    //put your code here
    
    public function index(){
       $this->display();
   }
     
    public function login()
    {
        
        // 判断提交方式
        if (IS_POST) {
            // 实例化Login对象
            $login = D('login');
            //dump($_POST);
            // 自动验证 创建数据集
            
            if (!$data = $login->create()) {
                dump($data);
                header("Content-type: text/html; charset=utf-8");
                exit($login->getError());
            }
            //dump($data);
            // 组合查询条件
            $where = array();
            $where['userId'] = $data['userId'];
            //dump($where);
            $result = $login->where($where)->field('userId,password')->find();
            // 验证用户名 对比 密码
            if ($result && $result['password'] == $data['password']) {
                // 存储session
                session('uid', $result['userid']);
 
                // 更新用户登录信息
                $where['userid'] = session('uid');
                //U('path',array()传参， ''设置后缀, 1是否跳转)
                $this->success('登录成功,正跳转至系统首页...', U('Index/index'));
            } else {
                $this->error('登录失败,用户名或密码不正确!');
            }
        } else {
            $this->display();
        }
    }
 
    //<foreach name='' key='' item=''>
    //</foreach>
    /**
     * 用户注册
     */
    public function register()
    {
        // 判断提交方式 做不同处理
        if(IS_POST){
            $user = M('User');
            //dump($_POST);
            $data = $user->create();
                        dump($user);
                
            dump($data);

            if($data){
//                  $user->name = I('name','');
//                  $user->password = I('password','');
//                  $user->email = I('email','');
//                  //$user->
//                $data['name'] = I('name','');
//                $data['password'] = I('password','');
//                $data['email'] = I('email','');
//                $data['mobile'] = I('mobile','');
//                $data['character'] = I('character','');
//                $data['gender'] = I('gender','');
//                $data['slogan'] = I('slogan','');
                
                $lastId = $user->add();

                echo $lastId;
                if($lastId){
                    echo '填写成功';
                }else{
                    echo '填写失败';
                }
            }
        }else{
            $this->display();
        }
        
    }
 
    /**
     * 用户注销
     */
    public function logout()
    {
 
    }
 
    /**
     * 验证码
     */
    public function verify()
    {
        // 实例化Verify对象
        $verify = new \Think\Verify();
 
        // 配置验证码参数
        $verify->fontSize = 14;     // 验证码字体大小
        $verify->length = 4;        // 验证码位数
        $verify->imageH = 34;       // 验证码高度
        $verify->useImgBg = true;   // 开启验证码背景
        $verify->useNoise = false;  // 关闭验证码干扰杂点
        $verify->entry();
}
}