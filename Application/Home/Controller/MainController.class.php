<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;
/**
 * Description of MainController
 *
 * @author rale
 */
class MainController extends CommonController{
    public function index(){

        $this->assign('name',session('name'));

        $this->display('homepage');
    }
    
    public function homepage(){
        $this->display();
    }
}
