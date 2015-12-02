<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>主界面</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="用户主界面">
        <link href="/HSWS_FRAME/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/HSWS_FRAME/Public/startbootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="/HSWS_FRAME/Public/startbootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <link href="/HSWS_FRAME/Public/startbootstrap/dist/css/timeline.css" rel="stylesheet">
        <link href="/HSWS_FRAME/Public/startbootstrap/dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="/HSWS_FRAME/Public/startbootstrap/bower_components/morrisjs/morris.css" rel="stylesheet">
        <link href="/HSWS_FRAME/Public/startbootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../../../../Public/bootstrap/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="/HSWS_FRAME/Public/css/carousel.css" type="text/css">
      

    </head>
    
    
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                       
                    </button>
                    <a class="navbar-brand" href="index.html">RunningOwl</a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="">
                                    <i class="fa fa-user fa-fw"></i>
                                     用户信息                       
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="fa fa-gear fa-fw"></i> 
                                    设置
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="../Login/login.html">
                                    <i class="fa fa-sign-out fa-fw"></i>
                                    退出登录
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav in" id="side-menu">
                            <li>
                                <a href="#" class="active">
                                    <i class="fa fa-dashboard fa-fw"></i>
                                    用户主页
                                </a>
                            </li>
                            <li>
                                <a href="#" class>
                                    <i class="fa fa-heart fa-fw"></i>
                                    我的健康
                                    <span class="fa arrow"></span>
                                </a>                                                   
                            </li>
                            
                            <li class="divider"></li>
                            
                            <li>
                                <a href="#">
                                    <i class="fa fa-leaf fa-fw"></i>
                                    咨询医生
                                </a>                               
                            </li>                                                   
                            
                            <li>
                                <a href="#">
                                    <i class="fa fa-tasks"></i>
                                    活动管理
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            
            <div id="page-wrapper" style="min-height: 750px">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">我的首页</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3"><i class="fa fa-moon-o fa-5x"></i></div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">A</div>
                                        <div>睡眠质量</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3"><i class="fa fa-apple fa-5x"></i></div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">A</div>
                                        <div>健康指数</div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3"><i class="fa fa-rocket fa-5x"></i></div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">B</div>
                                        <div>运动指数</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3"><i class="fa fa-tasks fa-5x"></i></div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">10</div>
                                        <div>完成的任务</div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="event-image" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#event-image" data-slide-to="0" class="active"></li>
                                <li data-target="#event-image" data-slide-to="1"></li>
                                <li data-target="#event-image" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img class="first-slide" src="" alt="第一张图片">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <h1>活动1</h1>
                                            <p>活动简介</p>
                                            <p>
                                                <a class="btn btn-lg btn-success" href="#" role="button">
                                                    更多详情
                                                    <span class="fa fa-angle-double-right fw"></span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="second-slide" src="" alt="第二张图片">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <h1>活动2</h1>
                                            <p>活动简介</p>
                                            <p>
                                                <a class="btn btn-lg btn-success" href="#" role="button">
                                                    更多详情
                                                    <span class="fa fa-angle-double-right fw"></span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="first-slide" src="" alt="第三张图片">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <h1>活动3</h1>
                                            <p>活动简介</p>
                                            <p>
                                                <a class="btn btn-lg btn-success" href="#" role="button">
                                                    更多详情
                                                    <span class="fa fa-angle-double-right fw"></span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#event-image" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#event-image" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="/HSWS_FRAME/Public/startbootstrap/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/HSWS_FRAME/Public/startbootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/HSWS_FRAME/Public/startbootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>
        <script src="/HSWS_FRAME/Public/startbootstrap/bower_components/raphael/raphael-min.js"></script>
        <script src="/HSWS_FRAME/Public/startbootstrap/bower_components/morrisjs/morris.min.js"></script>
        <script src="/HSWS_FRAME/Public/startbootstrap/js/morris-data.js"></script>
        <script src="/HSWS_FRAME/Public/startbootstrap/dist/js/sb-admin-2.js"></script>
    </body>
</html>