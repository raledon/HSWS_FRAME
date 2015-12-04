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
    protected $fields = array('adviceId', 'content', 'createdBy', 'createdAt');
    protected $pk = 'adviceId';
    
    
}
