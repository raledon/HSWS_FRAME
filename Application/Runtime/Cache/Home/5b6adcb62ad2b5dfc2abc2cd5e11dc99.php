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
                                    <li class="active"><a href="#">登录</a></li>
                                    <li><a href="#">主页面</a></li>
                                    <li><a href="#">注册</a></li>
                                </ul>
                            </nav>
                        </div>
                        
                    </div>
                    
                    <div class="inner cover">                                                    
                        <h1 class="cover-heading">登录</h1>
                        <form action="/HSWS_FRAME/index.php?c=login" method="post" class="form-signin lead">
                            <div>
                                <label for="username" class="sr-only">用户名</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="用户名" required autofocus>
                            </div>
                            <div>
                                <label for="password" class="sr-only">密码</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="密码" required>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="rememberme">记住我</label>
                                <a>                                </a>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </form>
                        
                    </div>
                    <div class="mastfoot"></div>
                </div>
            </div>
        </div>
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/HSWS_FRAME/Public/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>