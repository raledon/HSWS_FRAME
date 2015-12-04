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
            header("Content-type: text/html; charset=utf-8");

            $login = D('login');
            //dump($_POST);
            // 自动验证 创建数据集
            $data = $login->create();
            if(!$data){
                echo 'error';
                exit($login->getError());
            }
            dump($data);
            // 组合查询条件
           
            $result = $this->getUserById($data['userId']);
            dump($result);
             //验证用户名 对比 密码
            if ($result && $result['password'] === $data['password']) {
                // 存储session
                session('uid', $result['userid']);
                session('name', $result['name']);
                // 更新用户登录信息
                //U('path',array()传参， ''设置后缀, 1是否跳转)
                $this->success('登录成功,正跳转至系统首页...', U('main/index'));
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
    
    private function getUserById($userId){
        $user = M('user');
        $result = $user->where("userId = $userId")->find();
        return $result;
    }
    
    
    public function register()
    {


        // 判断提交方式 做不同处理
        if (IS_POST) {                         
            header("Content-type: text/html; charset=utf-8");
            $user = D('user');
            $data = $user->create();
            if(!$data){
                exit($user->getError());
            }else{
               $result = $user->add();

            }
            
            
            if($result){
                $this->display('login');
            }else{
                $this->error('数据插入失败', U('Login/login'));
            }
        } else {
            $this->display();
        }
        
    }
 
  
    private function gatherInfo(array $data){
        $info = array();
        if(array_key_exists( 'userId', $data)){
            $info['userId'] = I('userId','','trim');
        }
        if(array_key_exists('password', $data)){
            $info['password'] = I('password','','trim');
        }
        if(array_key_exists('name', $data)){
            $info['name'] = I('name','','trim');
        }
        if(array_key_exists('gender', $data)){
            $info['gender'] = I('gender','');
        }
        if(array_key_exists('telephone', $data)){
            $info['telephone'] = I('telephone','');
        }
        if(array_key_exists('email', $data)){
            $info['email'] = I('email','');
        }
        if(array_key_exists('slogan', $data)){
            $info['slogan'] = I('slogan', '');
        }
        if(array_key_exists('character', $data)){
            $info['character'] = I('character','');
        }
        return $info;
    }
    /**
     * 用户注销
     */
    public function logout()
    {
 
    }
   
}
