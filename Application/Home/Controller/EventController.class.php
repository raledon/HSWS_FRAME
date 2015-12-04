<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;
use Think\Controller;
/**
 * Description of EventController
 *
 * @author rale
 */
class EventController extends Controller {
    //put your code here
    public function index(){
        $this->display();
    }
    
    public function event(){
        $this->display();
    }
}
