<div class="container-fluid">
    <div class="row">
<!--        <div class="col-xs-3 col-sm-2 col-md-1 sidebar">-->
<!--            <ul class="nav nav-sidebar">-->
<!--                <li><a href="--><?php //echo site_url('clients'); ?><!--">首页</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/create'); ?><!--">创建用户</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/import'); ?><!--">批量导入</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/search'); ?><!--">查询用户</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/search'); ?><!--">修改用户</a></li>-->
<!--                <li><a href="--><?php //echo site_url('messages/create'); ?><!--">发布业务</a></li>-->
<!--                <li><a href="--><?php //echo site_url('messages/search'); ?><!--">查询业务</a></li>-->
<!--                <li><a href="--><?php //echo site_url('company/create'); ?><!--">创建企业</a></li>-->
<!--                <li><a href="--><?php //echo site_url('company/search'); ?><!--">查询企业</a></li>-->
<!--            </ul>-->
<!--        </div>-->
        <div class="main">
            <?php //echo validation_errors(); ?>
            <?php if ($success == 'create') {?>
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
            <?php } else if ($success == 'modify') { ?>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">修改用户</h3>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-success" role="alert">
                            <strong>修改</strong>用户成功!<a href="<?php echo site_url('clients/search'); ?>" class="pull-right">继续修改</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }else if ($success == 'modify_fail') {?>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">修改用户</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-warning" role="alert">
                                <strong>修改</strong>用户失败! 请检查数据库连接。<a href="<?php echo site_url('clients'); ?>" class="pull-right">返回主页</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($success == 'import') {?>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">批量导入</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-success" role="alert">
                                <strong>导入</strong>用户成功!<a href="<?php echo site_url('clients/import'); ?>" class="pull-right">继续导入</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($success == 'import_fail') {?>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">批量导入</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-warning" role="alert">
                                <strong>导入</strong>用户失败!<a href="<?php echo site_url('clients/import'); ?>" class="pull-right">重新导入</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($success == 'delete') {?>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">删除用户</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-warning" role="alert">
                                <strong>删除</strong>用户成功!<a href="<?php echo site_url('clients/'); ?>" class="pull-right">返回主页</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($success == 'delete_fail') {?>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">删除用户</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-warning" role="alert">
                                <strong>删除</strong>用户失败! 请检查数据库连接。<a href="<?php echo site_url('clients/'); ?>" class="pull-right">返回主页</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>