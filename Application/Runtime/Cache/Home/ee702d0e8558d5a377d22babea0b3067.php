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
                                <a href="<?php echo U('health/index');?>" class="active">
                                    <i class="fa fa-heart fa-fw"></i>
                                    我的健康
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
                        <h1 class="page-header">我的健康</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs nav-justified">
                            <li role="presentation" ><a href="<?php echo U('health/index');?>" data-toggle="tab" class="active">健康管理</a></li>
                            <li role="presentation"><a href="<?php echo U('health/index');?>" data-toggle="tab" >睡眠管理</a></li>
                        </ul>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-6">
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
   
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="text-left">今日睡眠</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row show-grid text-center">
                                    <div class="col-lg-3">
                                        <h3>7hour</h3>
                                        <p>睡眠总时间</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h3>21:20:12</h3>
                                        <p>开始时间</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h3>07:10:11</h3>
                                        <p>结束时间</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h3>5hour</h3>
                                        <p>有效睡眠时间</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i>
                                睡眠曲线图
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" >
                                            选项
                                            <span class="caret"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                    
                                </div>
                            </div>
                            
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