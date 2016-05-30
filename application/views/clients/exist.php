<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/4/25
 * Time: 下午10:28
 */
?>
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
            <?php if ($exist == 'search_exist') { ?>
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">查询用户</h3>
                        </div>
                        <div class="panel-body">
<!--                            <div class="alert alert-info" role="alert">-->
<!--                                <strong>存在</strong>该用户!<a href="--><?php //echo site_url('clients/modify/'."$wx_id"); ?><!--" class="pull-right">是否需要修改?</a>-->
<!--                            </div>-->
                            <table class="table table-bordered table-hover table-responsive table-striped">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>名称</th>
                                        <th>详细</th>
                                        <th>修改</th>
                                        <th>删除</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($results as $client): ?>
                                        <tr>
                                            <td><?php echo $client['id']; ?></td>
                                            <td><?php echo $client['name']; ?></td>
                                            <td><a href="<?php echo site_url('clients/' . $client['id']); ?>">查看</a></td>
                                            <td><a href="<?php echo site_url('clients/modify/' . $client['id']); ?>">修改</a></td>
                                            <td><a href="<?php echo site_url('clients/delete/' . $client['id']); ?>">删除</a></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php }else if ($exist == 'search_noexist') {?>
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">查询用户</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-danger" role="alert">
                                <strong>不存在</strong>该用户!<a href="<?php echo site_url('clients/create'); ?>" class="pull-right">是否需要创建?</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>
