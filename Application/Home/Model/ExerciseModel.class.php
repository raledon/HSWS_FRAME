<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Model;
use Think\Model;
/**
 * Description of ExerciseModel
 *
 * @author rale
 */
class ExerciseModel extends Model{
    //put your code here
    protected $tableName = 'exerciseInfo';
    protected $fields = array('infoId', 'userId', 'createdAt', 'distance', 'lasted');
    protected $pk = 'infoId';
    
    public function getExerciseList($userId){
        $result = $this->where(array('userId' => $userId))->select();
        return $result;
    }
    
    public function getExerciseByDay($userId,$date=null){
        if($date===null){
            $date = date('Y-m-d');
        }
        $result = $this->where(array('userId'=>$userId, 'createdAt'=>$date))->find();
        return $result;
    }
}
