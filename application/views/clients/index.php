
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-3 col-sm-2 col-md-1 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="<?php echo site_url('clients'); ?>">首页</a></li>
                <li><a href="<?php echo site_url('clients/create'); ?>">创建用户</a></li>
                <li><a href="<?php echo site_url('clients/search'); ?>">查询用户</a></li>
                <li><a href="<?php echo site_url('clients'); ?>">修改用户</a></li>
                <li><a href="<?php echo site_url('clients'); ?>">发布业务</a></li>
                <li><a href="<?php echo site_url('clients'); ?>">查询业务</a></li>
            </ul>
        </div>
        <div class="col-xs-9 col-xs-offset-3 col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">
            <h1>欢迎访问超级矿后台管理系统</h1>
            <h2><?php echo $title; ?></h2>
            <p><a href="<?php echo site_url('clients/create'); ?>">添加新客户</a></p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>名称</th>
                    <th>详细</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?php echo $client['id']; ?></td>
                        <td><?php echo $client['name']; ?></td>
                        <td><a href="<?php echo site_url('clients/' . $client['id']); ?>">view more</a></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>

        </div>


