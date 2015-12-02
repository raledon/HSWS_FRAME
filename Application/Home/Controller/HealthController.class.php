<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;
use Think\Controller;
/**
 * Description of HealthController
 *
 * @author rale
 */
class HealthController extends Controller{
    //put your code here
    public function index(){
        $this->display('sleep');
    }
    
    public function sleep(){
        $this->display();
        //$this->getSleepByDay(1,'2015-12-02');
        
    }
    
    public function getAllSleep(){
        
    }
    
    public function getSleepByDay($userId,$date=null){
        if($date === null){
            $date = date('Y-m-d');
        }
        $info = M('sleep')->where("userId=$userId")->select();
        foreach ($info as $row){
            if($row['startdate'] == $date){
                $result["$row[infoid]"] = $row;
            }
        }
        dump($result);
        return $result;
       // dump($info);
    }
    private function getSleepByWeek(){
        
    }
    
    
}
