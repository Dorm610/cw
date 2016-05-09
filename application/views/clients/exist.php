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
            <?php if ($exist == 'create_exist') {
                $wx_id = $this->mClients->input->post('wx_id');
                $result = $this->mClients->getClient_wx($wx_id);
                ?>
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">创建用户</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-warning" role="alert">
                                <strong>存在</strong>相同用户!<a href="<?php echo site_url('clients/modify/'."$wx_id"); ?>" class="pull-right">是否需要修改?</a>
                            </div>
                            <table class="table table-bordered table-hover table-responsive table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>用户名</th>
                                    <th>微信号</th>
                                    <th>微信名</th>
                                    <th>QQ号</th>
                                    <th>手机号</th>
                                    <th>地址</th>
                                    <th>Email</th>
                                    <th>公司名</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo $result['id']?></td>
                                    <td><?php echo $result['name']?></td>
                                    <td><?php echo $result['wx_id']?></td>
                                    <td><?php echo $result['wx_name']?></td>
                                    <td><?php echo $result['qq']?></td>
                                    <td><?php echo $result['phone']?></td>
                                    <td><?php echo $result['address']?></td>
                                    <td><?php echo $result['email']?></td>
                                    <td><?php echo $result['company']?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php }else if ($exist == 'search_exist') {
                $wx_id = $this->mClients->input->post('wx_id');
                $result = $this->mClients->getClient_wx($wx_id);
                ?>
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">查询用户</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-info" role="alert">
                                <strong>存在</strong>该用户!<a href="<?php echo site_url('clients/modify/'."$wx_id"); ?>" class="pull-right">是否需要修改?</a>
                            </div>
                            <table class="table table-bordered table-hover table-responsive table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>用户名</th>
                                    <th>微信号</th>
                                    <th>微信名</th>
                                    <th>QQ号</th>
                                    <th>手机号</th>
                                    <th>地址</th>
                                    <th>Email</th>
                                    <th>公司名</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo $result['id']?></td>
                                    <td><?php echo $result['name']?></td>
                                    <td><?php echo $result['wx_id']?></td>
                                    <td><?php echo $result['wx_name']?></td>
                                    <td><?php echo $result['qq']?></td>
                                    <td><?php echo $result['phone']?></td>
                                    <td><?php echo $result['address']?></td>
                                    <td><?php echo $result['email']?></td>
                                    <td><?php echo $result['company']?></td>
                                </tr>
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
