<div class="container-fluid">
    <div class="row">
        <div class="col-xs-3 col-sm-2 col-md-1 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="<?php echo site_url('clients'); ?>">首页</a></li>
                <li><a href="<?php echo site_url('clients/create'); ?>">创建用户</a></li>
                <li><a href="<?php echo site_url('clients/import'); ?>">批量导入</a></li>
                <li class="active"><a href="<?php echo site_url('clients/search'); ?>">查询用户</a></li>
                <li><a href="<?php echo site_url('clients/search'); ?>">修改用户</a></li>
                <li><a href="<?php echo site_url('clients'); ?>">发布业务</a></li>
                <li><a href="<?php echo site_url('clients'); ?>">查询业务</a></li>
            </ul>
        </div>
        <div class="col-xs-9 col-xs-offset-3 col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">
            <h2><?php echo $client['name'] ?> 的详细信息：</h2>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>条目</th>
                    <th>内容</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>编号</td>
                    <td><?php echo $client['id']?></td>
                </tr>
                <tr>
                    <td>名称</td>
                    <td><?php echo $client['name']?></td>
                </tr>
                <tr>
                    <td>微信号</td>
                    <td><?php echo $client['wx_id']?></td>
                </tr>
                <tr>
                    <td>微信昵称</td>
                    <td><?php echo $client['wx_name']?></td>
                </tr>
                <tr>
                    <td>手机号</td>
                    <td><?php echo $client['phone']?></td>
                </tr>
                <tr>
                    <td>QQ号</td>
                    <td><?php echo $client['qq']?></td>
                </tr>
                <tr>
                    <td>电子邮箱</td>
                    <td><?php echo $client['email']?></td>
                </tr>
                <tr>
                    <td>地址</td>
                    <td><?php echo $client['address']?></td>
                </tr>
                <tr>
                    <td>企业/厂矿</td>
                    <td><?php echo $client['company']?></td>
                </tr>
                <tr>
                    <td>创建时间</td>
                    <td><?php echo $client['record_time']?></td>
                </tr>
                <tr>
                    <td>创建人</td>
                    <td><?php echo $client['recorder']?></td>
                </tr>
                </tbody>
            </table>
            </div>


