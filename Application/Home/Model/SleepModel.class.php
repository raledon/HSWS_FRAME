<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sleep
 *
 * @author john
 */
namespace Home\Model;
use Think\Model;
class SleepModel extends Model{
    //put your code here
    protected $tableName = 'sleepInfo';
    protected $fields = array('infoId', 'userId', 'startDate', 'startAt', 'endData', 'endAt','validSleepTime');
    protected $pk = 'infoId';
    
    public function getSleepList($userId){
        $result = $this->where("userId = $userId")->select();
        return $result;
    }
    
    public function getSleepByDay($userId, $date = null){
        if($date == null){
            $date = date('Y-m-d');
        }
        
        $result = $this->where(array('userId' => $userId , 'startDate'=>$date))->find();
        //dump($result);
        return $result;
    }
    
    
}
