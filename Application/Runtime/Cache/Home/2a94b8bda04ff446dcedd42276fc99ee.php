<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>首页</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="首页">
        <link href="/HSWS_FRAME/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/HSWS_FRAME/Public/startbootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">                
        <link href="/HSWS_FRAME/Public/startbootstrap/dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="/HSWS_FRAME/Public/startbootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/HSWS_FRAME/Public/css/signin.css" rel="stylesheet">       
        <link href="/HSWS_FRAME/Public/css/cover.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    
                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">RunningOwl</h3>
                            <nav>
                                <ul class="nav masthead-nav">
                                    <li><a href="<?php echo U('login/login');?>">登录</a></li>                                   
                                    <li><a href="<?php echo U('login/register');?>">注册</a></li>
                                    <li class="active"><a href="{:U('index/index')">主页面</a></li>
                                </ul>
                            </nav>
                        </div>
                        
                    </div>
                    
                    <div class='inner cover'>
                        <h1 class='cover-heading'>RUNNING OWL</h1>
                        <p class='lead'>this is a web application aimed at helping people exploring happiness in exercising</p>
                    </div>
                    
            </div>
        </div>
            
    </div>                      
       
     
    <script src="/HSWS_FRAME/Public/startbootstrap/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="/HSWS_FRAME/Public/bootstrap/js/bootstrap.min.js"></script>

    <script src="/HSWS_FRAME/Public/startbootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    
    <script src="/HSWS_FRAME/Public/startbootstrap/dist/js/sb-admin-2.js"></script>
        
    
        </body>
</html>