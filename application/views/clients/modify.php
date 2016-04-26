<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/4/25
 * Time: 下午11:45
 */
    $result = $this->mClients->getClient_wx($wx_id);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-3 col-sm-2 col-md-1 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="<?php echo site_url('clients'); ?>">首页</a></li>
                <li><a href="<?php echo site_url('clients/create'); ?>">创建用户</a></li>
                <li><a href="<?php echo site_url('clients/import'); ?>">批量导入</a></li>
                <li><a href="<?php echo site_url('clients/search'); ?>">查询用户</a></li>
                <li class="active"><a href="<?php echo site_url('clients/search'); ?>">修改用户</a></li>
                <li><a href="<?php echo site_url('clients'); ?>">发布业务</a></li>
                <li><a href="<?php echo site_url('clients'); ?>">查询业务</a></li>
            </ul>
        </div>
        <div class="col-xs-9 col-xs-offset-3 col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">
            <?php echo validation_errors(); ?>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">修改用户</h3>
                    </div>
                    <div class="panel-body">
                        <!--创建表单-->
                        <?php echo form_open('clients/modify'); ?>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputName" class="control-label">用户名：</label>
                            <input type="text" placeholder="用户名..." class="form-control" name="name"
                                   id="inputName" value="<?php echo $result['name']?>">
                            <p class="help-block">请正确输入用户的姓名</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputWxNum" class="control-label">微信号：</label>
                            <input type="text" placeholder="微信号..." class="form-control" id="inputWxNum"
                                   value="<?php echo $result['wx_id']?>" disabled>
                            <p class="help-block">请正确输入用户的微信号</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputWxName" class="control-label">微信名：</label>
                            <input type="text" placeholder="微信名..." class="form-control" name="wx_name"
                                   id="inputWxName" value="<?php echo $result['wx_name']?>">
                            <p class="help-block">请正确输入用户的微信名</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputQq" class="control-label">QQ号：</label>
                            <input type="text" placeholder="QQ..." class="form-control" name="qq"
                                   id="inputQq" value="<?php echo $result['qq']?>">
                            <p class="help-block">请正确输入用户的QQ号</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputPhone" class="control-label">手机号：</label>
                            <input type="text" placeholder="手机号..." class="form-control" name="phone"
                                   id="inputPhone" value="<?php echo $result['phone']?>">
                            <p class="help-block">请正确输入用户的手机号</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputAdd" class="control-label">地址：</label>
                            <input type="text" placeholder="地址..." class="form-control" name="address"
                                   id="inputAdd" value="<?php echo $result['address']?>">
                            <p class="help-block">请正确输入用户的地址</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputEmail" class="control-label">Email：</label>
                            <input type="text" placeholder="Email..." class="form-control" name="email"
                                   id="inputEmail" value="<?php echo $result['email']?>">
                            <p class="help-block">请正确输入用户的Email</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputCompany" class="control-label">公司名：</label>
                            <input type="text" placeholder="公司/企业/厂矿名..." class="form-control" name="company"
                                   id="inputCompany" value="<?php echo $result['company']?>">
                            <p class="help-block">请正确输入用户的公司/企业/厂矿名</p>
                        </div>
                        <input type="text" name="wx_id" class="hide form-group" value="<?php echo $result['wx_id']?>">
                        <button type="submit" name="submit" class="btn btn-default">修改</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
