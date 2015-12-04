<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>我的活动</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="历史咨询">
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
                    <a class="navbar-brand" href="<?php echo U('Index/index');?>">RunningOwl</a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i>
                                        评论
                                        <span class="pull-right text-muted small">几条新消息</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i>
                                        跟随者
                                        <span class="pull-right text-muted small">几个人</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
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
                                <a href="<?php echo U('main/index');?>">
                                    <i class="fa fa-dashboard fa-fw"></i>
                                    用户主页
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo U('health/health');?>">
                                    <i class="fa fa-heart fa-fw"></i>
                                    健康管理
                                </a>                                                   
                            </li>
                            <li>
                                <a href="<?php echo U('health/sleep');?>">
                                    <i class="fa fa-moon-o fa-fw"></i>
                                    睡眠管理
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo U('health/exercise');?>">
                                    <i class="fa fa-rocket"></i>
                                    运动管理
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="divider"></li>
                            <li class="divider"></li>
                            
                            <li>
                                <a href="<?php echo U('advice/advice');?>">
                                    <i class="fa fa-leaf fa-fw"></i>
                                    咨询医生
                                </a>                               
                            </li>                                                   
                            
                            <li>
                                <a href="<?php echo U('advice/history');?>">
                                    <i class="fa fa-envelope fa-fw"></i>
                                    咨询历史
                                </a>
                            </li>
                            
                            <li class="divider"></li>
                            <li class="divider"></li>
                            <li class="divider"></li>
                            
                            <li>
                                <a href="<?php echo U('event/event');?>">
                                    <i class="fa fa-tasks"></i>
                                    官方活动
                                </a>
                            </li>
                            
                            <li class="active">
                                <a href="<?php echo U('event/myEvent');?>">
                                    <i class="fa fa-flag"></i>
                                    我的活动
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?php echo U('event/createEvent');?>">
                                    <i class="fa fa-dribbble"></i>
                                    创建活动
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
                        <h1 class="page-header">我的活动</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <span><i class="fa fa-star"></i></span>
                                最近活动
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><span><i class="fa fa-arrow-circle-o-up"></i></span>排名</th>
                                                <th>活动名称</th>
                                                <th>发起人</th>
                                                <th>开始时间</th>
                                                <th>结束时间</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <span><i class="fa fa-fighter-jet"></i></span>
                                我的活动
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>活动名称</th>
                                                <th>发起人</th>
                                                <th>开始时间</th>
                                                <th>结束时间</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <span><i class="fa fa-globe"></i></span>
                                等待我参加的活动
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>活动编号</th>
                                                <th>活动名称</th>
                                                <th>活动内容</th>
                                                <th>活动类型</th>
                                                <th>举办方</th>
                                                <th>开始时间</th>
                                                <th>结束时间</th>
                                                <th>点我加入</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
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