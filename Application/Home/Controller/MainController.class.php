<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;
use Think\Controller;
/**
 * Description of MainController
 *
 * @author rale
 */
class MainController extends Controller{
    public function index(){
        $this->display("main/homepage");
    }
}
