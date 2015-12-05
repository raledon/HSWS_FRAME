<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdviceController
 *
 * @author john
 */
namespace Home\Controller;
use Think\Controller;
class AdviceController extends Controller{
    //put your code here
    public function index(){
        $this->display('advice');
    }
    
    public function advice(){
        $adviceDao = new \Home\Model\AdviceModel();
        $adviceList = $adviceDao->getLatestAdvices(session('uid'));
        $this->assign('adviceList', $adviceList);
        //dump($adviceList);
        $this->display('advice/advice');
    }
    
    public function adviceToDoctor(){
        if(IS_POST){
            $adviceDao = D('advice');

            $data = $adviceDao->create();
            $adviceDao->createdBy = session('uid');

            if(!$data){
                exit($adviceDao->getError());
            }else{
                $adviceId = $adviceDao->add();
            }
            
            /*
             * 将消息发送给医生
             */
            /**
             * 加一个判断方法，医生的id是否合法
             */
            $this->send($adviceId, $this->parseDoctors(I('doctors','')));
            
            //显示所有查询历史
            $this->history();
        }else{
            $this->advice();
        }
    }
    
    public function adviceToCoach(){
        if(IS_POST){
            $adviceDao = D('advice');

            $data = $adviceDao->create();
            $adviceDao->createdBy = session('uid');

            if(!$data){
                exit($adviceDao->getError());
            }else{
                $adviceId = $adviceDao->add();
            }
            
            /*
             * 将消息发送给教练
             */
            /**
             * 加一个判断方法，教练的id是否合法
             */
            $this->send($adviceId, $this->parseCoaches(I('coaches','')));
            
            //显示所有查询历史
            $this->history(); 
        }else{
            $this->advice();
        }
    }
    
    
    private function send($adviceId, $list){
            foreach ($list as $item){
                $dataList[] = array(
                    'adviceId' => $adviceId,
                    'sendTo' => $item,
                    'createdAt' => date('Y-m-d'),
                    'isReplied' => 0
                );
            }
            $sendDao = D('send');
            $sendDao->table('sendAdvice')->addAll($dataList);
    }
    
    private function parseDoctors($doctors){
        $idList = explode(';', $doctors);
        return $idList;
    }
    
    private function parseCoaches($coaches){
        $idList = explode(';', $coaches);
        return $idList;
    }
    
    
    public function history(){
        $replyDao = new \Home\Model\ReplyModel();
        $latestReply = $replyDao->getReplyByDate(3);
        dump($latestReply);
        $this->assign('latestReply',$latestReply);
        
        
        $this->display('advice/history');
    }
}
