<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdviceModel
 *
 * @author john
 */
namespace Home\Model;
use Think\Model;
class AdviceModel extends Model{
    //put your code here
    protected $tableName = 'advice';
    protected $fields = array('adviceId', 'content', 'createdBy', 'createdAt', 'topic');
    protected $pk = 'adviceId';
    

    protected $_validate = array(
        array('topic', 'require', '主题不能为空'),
        array('content', 'require', '提问内容不能为空！'), //默认情况下用正则进行验证
        array('password', 'require', '登录密码不能为空！'), // 默认情况下用正则进行验证
    );    
    
    protected $_auto = array (
        /* 登录的时候自动完成 */
        array('createdAt', 'curDate',1, 'callback' ),
    );
    
    protected function curDate(){
        return date('Y-m-d');
    }
    
    public function getAdviceList($userId){
        $result = $this->where(array('createdBy'=>$userId))->order(array('adviceId'=>'desc'))->select();
        return $result;
    }
    
    public function getLatestAdvices($userId){
        $result = $this->where(array('createdBy'=>$userId))->order(array('adviceId'=>'desc'))->limit(10)->select();
        return $result;
    }
    
    public function getAdviceListByDay($userId, $date=null){
        if($date === null){
            $date = date('Y-m-d');
        }
        $result = $this->where(array('createdBy'=>$userId, 'createdAt'=>$date))->select();
        return $result;
    }
    
    public function getAdviceById($adviceId){
        $result = $this->where(array('adviceId'=>$adviceId))->find();
        return $result;
    }
    
}
