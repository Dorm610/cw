<!--<h2> success! </h2>-->
<!--<a href="create">another</a>-->
<!--<!--不能跳到本控制器外-->-->
<!--<!--<a href="./Pages/view">view</a>-->-->

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-3 col-sm-2 col-md-1 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="<?php echo site_url('clients'); ?>">首页</a></li>
                <li class="active"><a href="<?php echo site_url('clients/create'); ?>">创建用户</a></li>
                <li><a href="<?php echo site_url('clients/search'); ?>">查询用户</a></li>
                <li><a href="<?php echo site_url('clients'); ?>">修改用户</a></li>
                <li><a href="<?php echo site_url('clients'); ?>">发布业务</a></li>
                <li><a href="<?php echo site_url('clients'); ?>">查询业务</a></li>
            </ul>
        </div>
        <div class="col-xs-9 col-xs-3 col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">
<!--            --><?php //echo validation_errors(); ?>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">创建用户</h3>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-success" role="alert">
                            <strong>创建</strong>用户成功!<a href="<?php echo site_url('clients/create'); ?>" class="pull-right">继续创建</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>