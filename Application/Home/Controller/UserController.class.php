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
    //put your code here
    public function userList(){
         
        $list = M('users')->where(array('userid' => $this->userid))->find();

        var_dump($list);
    }
    
}

$c = new UserController();
$c->userList();
