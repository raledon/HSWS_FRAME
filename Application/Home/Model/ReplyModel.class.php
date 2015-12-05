<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Model;
use Think\Model;
/**
 * Description of ReplyModel
 *
 * @author rale
 */
class ReplyModel extends Model {
    //put your code here
    protected $tableName = 'reply';
    protected $fields = array('replyId', 'adviceId', 'content', 'createdAt', 'createdBy');
    protected $pk = 'replyId';
    
    protected $_validate = array(
        array('content','require', '回复内容不能为空'),
    );
    
    protected $_auto = array(
        array('createdAt','curDate', 1, 'callback'),
    );
    
    protected function curDate(){
        return date('Y-m-d');
    }
    
    /**
     * 获得单个advice的所有回复
     */
    public function getReplyList($adviceId){
        $result = $this->where(array('adviceId'=>$adviceId))->select();
        return $result;
    }
    
    /**
     * 根据replyId获得单条记录
     */
    public function getReplyById($replyId){
        $result = $this->where(array('replyId'=>$replyId))->find();
        return $result;
    }
    
    /**
     * 获得当前用户的所有回复
     */
    public function getReplyListByUser($userId){
        $result = $this->where(array('createdBy'=>$userId))->order(array('createdAt'=>'desc'))->select();
        return $result;
    }
    
    /**
     * 获得提问者的最近的五个回复
     */
    public function getReplyByDate($userId){
        
        $Model = new Model();
        $result = $Model->query("select * from advice a, reply r where a.adviceId = r.adviceId and a.createdBy=$userId order by r.replyId desc limit 5");
        return $result;
    }
}
