<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/4/25
 * Time: 下午11:45
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
<!--                <li class="active"><a href="--><?php //echo site_url('clients/search'); ?><!--">修改用户</a></li>-->
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
                        <h3 class="panel-title">修改用户 #<?php echo $id?></h3>
                    </div>
                    <div class="panel-body">
                        <!--创建表单-->
                        <?php echo form_open('clients/modify/'.$id); ?>
                        <label for="inputer" class="control-label">客户性质：</label>
                        <select name="myselect1" id="inputer">
                            <option value="未知" <?php echo  set_select('myselect1', '1', $result['role_id']=='未知'?TRUE:FALSE); ?> >未知</option>
                            <option value="厂矿" <?php echo  set_select('myselect1', '2', $result['role_id']=='厂矿'?TRUE:FALSE); ?> >厂矿</option>
                            <option value="供应商" <?php echo  set_select('myselect1', '3', $result['role_id']=='供应商'?TRUE:FALSE); ?> >供应商</option>
                            <option value="物流公司" <?php echo  set_select('myselect1', '4', $result['role_id']=='物流公司'?TRUE:FALSE); ?> >物流公司</option>
                        </select>
                        <label for="inputer" class="control-label">货物类型：</label>
                        <select name="myselect2" id="inputer">
                            <option value="未知" <?php echo  set_select('myselect2', '1', $result['product_id']=='未知'?TRUE:FALSE); ?> >未知</option>
                            <option value="原煤" <?php echo  set_select('myselect2', '2', $result['product_id']=='原煤'?TRUE:FALSE); ?> >原煤</option>
                            <option value="块煤" <?php echo  set_select('myselect2', '3', $result['product_id']=='块煤'?TRUE:FALSE); ?> >块煤</option>
                            <option value="煨煤" <?php echo  set_select('myselect2', '4', $result['product_id']=='煨煤'?TRUE:FALSE); ?> >煨煤</option>
                            <option value="动力煤" <?php echo  set_select('myselect2', '5', $result['product_id']=='动力煤'?TRUE:FALSE); ?> >动力煤</option>
                            <option value="一精煤" <?php echo  set_select('myselect2', '6', $result['product_id']=='一精煤'?TRUE:FALSE); ?> >一精煤</option>
                            <option value="二精煤" <?php echo  set_select('myselect2', '7', $result['product_id']=='二精煤'?TRUE:FALSE); ?> >二精煤</option>
                            <option value="洗选煤" <?php echo  set_select('myselect2', '8', $result['product_id']=='洗选煤'?TRUE:FALSE); ?> >洗选煤</option>
                            <option value="其他" <?php echo  set_select('myselect2', '9', $result['product_id']=='其他'?TRUE:FALSE); ?> >其他</option>
                        </select>
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
                            <input type="text" placeholder="微信号..." class="form-control" name="wx_id"
                                   id="inputWxNum" value="<?php echo $result['wx_id']?>">
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
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputPosition" class="control-label">职位：</label>
                            <input type="text" placeholder="职位..." class="form-control" name="position"
                                   id="inputPosition" value="<?php echo $result['position']?>">
                            <p class="help-block">请正确输入用户的职位</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputLinephone" class="control-label">固定电话：</label>
                            <input type="text" placeholder="固定电话..." class="form-control" name="linephone"
                                   id="inputLinephone" value="<?php echo $result['linephone']?>">
                            <p class="help-block">请正确输入用户的固定电话</p>
                        </div>
                        <input type="text" name="id" class="hide form-group" value="<?php echo $result['id']?>">
                        <button type="submit" name="submit" class="btn btn-default">修改</button>

                        </form>
                    </div>
                </div>
            </div>
