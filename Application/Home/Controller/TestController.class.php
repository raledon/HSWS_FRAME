<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestController
 *
 * @author john
 */
namespace Home\Contorller;
use Think\Controller;
class TestController extends Controller{
    //put your code here
    public function test(){
        $data = array(
            'content' => 'waht',
            'createdBy' => 'me',
            'createdAt' => date('Y-m-d'),
        );
                
        dump($data);

        $advice = D('advice');
        $sql = $advice->data($data)->fetchSql(false)->add();
        echo $sql;
    }
}

$controller = new TestController();
$controller->test();