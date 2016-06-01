<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/4/26
 * Time: 下午7:59
 */
//    echo $error;
?>

<div class="container-fluid">
    <div class="row">
<!--        <div class="col-xs-3 col-sm-2 col-md-1 sidebar">-->
<!--            <ul class="nav nav-sidebar">-->
<!--                <li><a href="--><?php //echo site_url('clients'); ?><!--">首页</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/create'); ?><!--">创建用户</a></li>-->
<!--                <li class="active"><a href="--><?php //echo site_url('clients/import'); ?><!--">批量导入</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/search'); ?><!--">查询用户</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/search'); ?><!--">修改用户</a></li>-->
<!--                <li><a href="--><?php //echo site_url('messages/create'); ?><!--">发布业务</a></li>-->
<!--                <li><a href="--><?php //echo site_url('messages/search'); ?><!--">查询业务</a></li>-->
<!--                <li><a href="--><?php //echo site_url('company/create'); ?><!--">创建企业</a></li>-->
<!--                <li><a href="--><?php //echo site_url('company/search'); ?><!--">查询企业</a></li>-->
<!--            </ul>-->
<!--        </div>-->
        <div class="main">
            <?php echo validation_errors(); ?>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">批量导入</h3>
                    </div>
                    <div class="panel-body">
                        <!--创建表单-->
                        <?php echo form_open_multipart('clients/import'); ?>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputName" class="control-label">文件名：</label>
                            <input type="file" name="filename" placeholder="..." class="form-control" size="20" />
                            <p class="help-block">请上传Excel文件,大小需小于2M!<br/>请按用户名,微信号,微信名,QQ号,手机号,地址,Email,公司,职位,固定电话,客户性质,货物类型填写!
                            <br/>Excel第一行必须为数据,不能有表头!
                            <br/>如果与数据库中数据有重复的,按Excel进行更新!</p>
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">上传</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>