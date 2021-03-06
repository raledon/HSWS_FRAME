<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>登陆</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="系统登录">
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
                                    <li class="active"><a href="<?php echo U('login/register');?>">注册</a></li>
                                    <li><a href="#">主页面</a></li>
                                </ul>
                            </nav>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <form role="form" action="<?php echo U('login/register');?>" method="post">
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user fw"></i>
                                                </span>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="用户名">
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-key fw"></i>
                                                </span>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="密码">
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-key fw"></i>                             
                                                </span>
                                                <input type="password" name="repassword" id="repassword" class="form-control" placeholder="再次输入密码">
                                            </div>  
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope fa-fw"></i>
                                                </span>
                                                <input type="text" name="email" id="email" class="form-control" placeholder="邮箱">
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-phone fa-fw"></i>
                                                </span>
                                                <input type="text" name="mobile" id="mobile" class="form-control" placeholder="联系方式">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <select name="character" class="form-control">
                                                            <option value="1" selected="">普通用户</option>
                                                            <option value="2">医生</option>
                                                            <option value="3">教练</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="gender" id="gender-female" value="1" checked> 
                                                            <span style="color: black"><i class="fa fa-female fa-fw"></i>女   </span>
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="gender" id="gender-female" value="2">
                                                            <span style="color: black"><i class="fa fa-male fa-fw"></i>男   </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label style="color:black">你的宣言</label>
                                                <textarea name=slogan class="form-control" rows="3" placeholder="不超过100字"></textarea>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary">提交</button>
                                                <button type="reset" class="btn btn-danger">清空</button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="mastfoot"></div>
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