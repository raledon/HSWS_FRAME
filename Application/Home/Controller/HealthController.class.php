<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;
/**
 * Description of HealthController
 *
 * @author rale
 */
class HealthController extends CommonController{
    //put your code here
    
    
    public function index(){
        $this->display('exercise');
    }
    
    public function health(){
        
    }
    
    public function sleep(){
        $sleepDao = new \Home\Model\SleepModel();
        $result = $sleepDao->getSleepByDay(session('uid'));
        //dump($result);
        $this->assign('totalTime', 10);//添加计算睡眠时间的方法
        $this->assign('startTime', $result['startat']);
        $this->assign('endTime', $result['endat']);
        $this->assign('validSleepTime', $result['validsleeptime']);
        $this->display();
        //$this->getSleepByDay(1,'2015-12-02');
        
    }
    
    public function exercise(){
        $exerciseDao = new \Home\Model\ExerciseModel();
        $result = $exerciseDao->getExerciseByDay(session('uid'));
        //dump($result);
        $this->assign('distance',$result['distance']);
        $this->assign('lasted',$result['lasted']);
        $this->assign('calory', 10000);//添加计算热量的算法
        $this->assign('walk',1000);//添加计算步数的算法
        $this->display();
    }
    
    public function getAllSleep(){
        
    }
    
 
    
    
}
