<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author john
 */
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
    
    public function index(){
       // $this->userList();
    }
    //put your code here
    public function userList(){
         
        $list = M('user')->find();
        var_dump($list);
    }
    
    
}

