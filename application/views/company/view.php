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
                <li><a href="<?php echo site_url('company/create'); ?>">创建企业</a></li>
                <li class="active"><a href="<?php echo site_url('company/search'); ?>">查询企业</a></li>
            </ul>
        </div>
        <div class="col-xs-9 col-xs-offset-3 col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">
            <h2><?php echo $company['name'] ?> 的详细信息：</h2>
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
                    <td><?php echo $company['id']?></td>
                </tr>
                <tr>
                    <td>名称</td>
                    <td><?php echo $company['name']?></td>
                </tr>
                <tr>
                    <td>营业许可</td>
                    <td><?php echo $company['business_license']?></td>
                </tr>
                <tr>
                    <td>产品介绍</td>
                    <td><?php echo $company['product_intro']?></td>
                </tr>
                <tr>
                    <td>公司介绍</td>
                    <td><?php echo $company['clients_intro']?></td>
                </tr>
                <tr>
                    <td>其他评价</td>
                    <td><?php echo $company['third_party_evaluate']?></td>
                </tr>
                <tr>
                    <td>类型</td>
                    <td><?php echo $company['type']?></td>
                </tr>
                <tr>
                    <td>标识</td>
                    <td><?php echo $company['remark']?></td>
                </tr>
                    <td>创建人</td>
                    <td><?php echo $company['recorder']?></td>
                </tr>
                </tbody>
            </table>
        </div>