<div class="container-fluid">
    <div class="row">
        <div class="col-xs-3 col-sm-2 col-md-1 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="<?php echo site_url('clients'); ?>">首页</a></li>
                <li><a href="<?php echo site_url('clients/create'); ?>">创建用户</a></li>
                <li><a href="<?php echo site_url('clients/import'); ?>">批量导入</a></li>
                <li><a href="<?php echo site_url('clients/search'); ?>">查询用户</a></li>
                <li><a href="<?php echo site_url('clients/search'); ?>">修改用户</a></li>
                <li><a href="<?php echo site_url('messages/create'); ?>">发布业务</a></li>
                <li><a href="<?php echo site_url('messages/search'); ?>">查询业务</a></li>
            </ul>
        </div>
        <div class="col-xs-9 col-xs-3 col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">
            <!--            --><?php //echo validation_errors(); ?>
            <?php if ($success == 'create') {?>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">发布业务</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-success" role="alert">
                                <strong>发布</strong>业务成功!<a href="<?php echo site_url('messages/create'); ?>" class="pull-right">继续发布</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($success == 'search_title') {
                $title = $this->mMessages->input->post('title');
                $result = $this->mMessages->get_messages($title)
                ?>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">查询业务</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-success" role="alert">
                                <strong>查询</strong>业务成功!<a href="<?php echo site_url('messages/search'); ?>" class="pull-right">继续查询</a>
                            </div>
                            <table class="table table-bordered table-hover table-responsive table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>标题</th>
                                    <th>内容</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo $result['id']?></td>
                                    <td><?php echo $result['title']?></td>
                                    <td><?php echo $result['content']?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                $result = $this->mMessages->get_allmessages()
                ?>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">查询业务</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-success" role="alert">
                                <strong>查询</strong>业务成功!<a href="<?php echo site_url('messages/search'); ?>" class="pull-right">继续查询</a>
                            </div>
                            <table class="table table-bordered table-hover table-responsive table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>标题</th>
                                    <th>内容</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($result as $row) {?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } else if ($success == 'searchfail') { ?>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">查询业务</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-warning" role="alert">
                                <strong>查询</strong>业务失败! 暂时没有业务!<a href="<?php echo site_url('messages/search'); ?>" class="pull-right">继续查询</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>