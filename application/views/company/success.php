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
            <!--            --><?php //echo validation_errors(); ?>
            <?php if ($success == 'create') {?>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">创建企业</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-success" role="alert">
                                <strong>创建</strong>企业成功!<a href="<?php echo site_url('company/create'); ?>" class="pull-right">继续创建</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($success == 'searchall') {
                $result = $this->mCompany->get_allcompany()
                ?>
                <div>
                    <table class="table table-bordered table-hover table-responsive table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>企业名称</th>
                            <th>营业许可</th>
                            <th>类型</th>
                            <th>标识</th>
                            <th>创建人</th>
                            <th>详细</th>
                            <th>删除</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($result as $row) {?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['business_license']?></td>
                                <td><?php echo $row['type']?></td>
                                <td><?php echo $row['remark']?></td>
                                <td><?php echo $row['recorder']?></td>
                                <td><a href="<?php echo site_url('company/'.$row['id']); ?>">信息页面</a></td>
                                <td><a href="<?php echo site_url('company/delete/'.$row['id']); ?>">删除企业</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } else if ($success == 'searchfail') { ?>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">查询企业</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-warning" role="alert">
                                <strong>查询</strong>企业失败! 暂时没有任何企业信息!<a href="<?php echo site_url('company/create'); ?>" class="pull-right">创建企业</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>