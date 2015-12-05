<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Model;
use Think\Model;
/**
 * Description of HealthModel
 *
 * @author rale
 */
class HealthModel extends Model{
    //put your code here
    protected $tableName = 'healthInfo';
    protected $fields = array('infoId', 'userId', 'createdAt', 'heartRate', 'bloodPressure');
    protected $pk = 'infoId';
    
    public function getHealthList($userId){
        $result = $this->where(array('userId'=>$userId))->select();
        return $result;
    }
    
    public function getHealthByDay($userId, $date = null){
        if($date === null){
            $date = date('Y-m-d');
        }
        $result = $this->where(array('userId'=>$userId, 'createdAt'=>$date));
        return $result;
    }
}
