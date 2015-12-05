<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
function p($array){
    dump($array, true, '<pre>', 0);
}
 */
function is_login(){
    
}

function getUserById($id){
    $result = M('user')->where("userId=$id")->find();
    dump($result);
    return $result;
}

function sleepLevel(){
    
}
?>