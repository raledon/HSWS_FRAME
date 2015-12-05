<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>咨询</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="运动管理">
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
                                <a href="#">
                                    <i class="fa fa-rocket"></i>
                                    运动管理
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="divider"></li>
                            <li class="divider"></li>
                            
                            <li  class='active'>
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
                        <h1 class="page-header">我的咨询</h2>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3"><i class="fa fa-leaf fa-5x"></i></div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">咨询单</div>
                                        <div>时间</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="active">
                                        <a href="#doctor" data-toggle="tab">医生</a>
                                    </li>
                                    <li>
                                        <a href="#coach" data-toggle="tab">教练</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="doctor">
                                        <form action="<?php echo U('advice/adviceToDoctor');?>" method="post" >
                                            <h3 class="text-center page-header huge">咨询医生</h3>
                                            <div class='form-group input-group'>
                                                <span class='input-group-addon'><i class='fa fa-pencil'></i></span>
                                                <input class='form-control' type="text" name='topic' placeholder='topic'>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input class="form-control" type="text" name="doctors" placeholder="sendTo">
                                            </div>
                                            <div class='form-group'>
                                                <label>具体问题：</label>
                                                <textarea class="form-control" name='content' placeholder="content" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-outline btn-success btn-lg btn-block">提交</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="coach">
                                        <form action=":U('advice/adviceToCoach')" method='post'>
                                            <h3 class='text-center page-header huge'>咨询教练</h3>
                                            <div class='form-group input-group'>
                                                <span class='input-group-addon'><i class='fa fa-pencil'></i></span>
                                                <input class='form-control' type='text' name='topic' placeholder='topic'>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input class="form-control" type="text" name="coaches" placeholder="sendTo">
                                            </div>
                                            <div class='form-group'>
                                                <label>具体问题：</label>
                                                <textarea class="form-control" name='content' placeholder="content" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-outline btn-success btn-lg btn-block">提交</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class='panel panel-info'>
                            <div class='panel-heading'>
                                <h3>最近查询</h3>
                            </div>
                            <div class="panel-body">
                            
                                <button class="btn btn-primary btn-lg list-group-item" data-toggle="modal" data-target="#item1">
                                    Launch Demo Modal
                                </button>
                            <!-- Modal -->
                                <div class="modal fade" id="item1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                            </div>
                                            <div class="modal-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    <!-- /.modal-content -->
                                    </div>
                                <!-- /.modal-dialog -->
                                </div>
                            <!-- /.modal -->
                            
                                 <button class="btn btn-primary btn-lg list-group-item" data-toggle="modal" data-target="#item2">
                                    Launch Demo Modal
                                </button>
                            <!-- Modal -->
                                <div class="modal fade" id="item2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Modal title2</h4>
                                            </div>
                                            <div class="modal-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    <!-- /.modal-content -->
                                    </div>
                                <!-- /.modal-dialog -->
                                </div>
                            <!-- /.modal -->
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