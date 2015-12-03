<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdviceController
 *
 * @author john
 */
namespace Home\Controller;
use Think\Controller;
class AdviceController extends Controller{
    //put your code here
    public function index(){
        $this->display('advice');
    }
    
    public function advice(){
        $this->display();
    }
    
    public function history(){
        $this->display();
    }
}
