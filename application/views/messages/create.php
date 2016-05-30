<div class="container-fluid">
    <div class="row">
<!--        <div class="col-xs-3 col-sm-2 col-md-1 sidebar">-->
<!--            <ul class="nav nav-sidebar">-->
<!--                <li><a href="--><?php //echo site_url('clients'); ?><!--">首页</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/create'); ?><!--">创建用户</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/import'); ?><!--">批量导入</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/search'); ?><!--">查询用户</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/search'); ?><!--">修改用户</a></li>-->
<!--                <li class="active"><a href="--><?php //echo site_url('messages/create'); ?><!--">发布业务</a></li>-->
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
                        <h3 class="panel-title">发布业务</h3>
                    </div>
                    <div class="panel-body">
                        <!--创建表单-->
                        <?php echo form_open('messages/create'); ?>
                        <label for="inputOrigin" class="control-label">信息来源：</label>
                        <select name="mySelect1" id="inputOrigin">
                            <option value="客户微信" <?php echo  set_select('mySelect1', '1', TRUE); ?> >客户微信</option>
                            <option value="朋友圈" <?php echo  set_select('mySelect1', '2'); ?> >朋友圈</option>
                            <option value="电话" <?php echo  set_select('mySelect1', '3'); ?> >电话</option>
                            <option value="第三方网站" <?php echo  set_select('mySelect1', '4'); ?> >第三方网站</option>
                            <option value="其他" <?php echo  set_select('mySelect1', '5'); ?> >其他</option>
                        </select>
                        <label for="inputCategory" class="control-label">信息分类：</label>
                        <select name="mySelect2" id="inputCategory">
                            <option value="求车" <?php echo  set_select('mySelect2', '1', TRUE); ?> >求车</option>
                            <option value="空车" <?php echo  set_select('mySelect2', '2'); ?> >空车</option>
                            <option value="供应" <?php echo  set_select('mySelect2', '3'); ?> >供应</option>
                            <option value="求购" <?php echo  set_select('mySelect2', '4'); ?> >求购</option>
                            <option value="其他" <?php echo  set_select('mySelect2', '5'); ?> >其他</option>
                        </select>
                        <label for="inputRemark" class="control-label">信息标识：</label>
                        <select name="mySelect3" id="inputRemark">
                            <option value="普通" <?php echo  set_select('mySelect3', '1', TRUE); ?> >普通</option>
                            <option value="三星" <?php echo  set_select('mySelect3', '2'); ?> >三星</option>
                            <option value="五星" <?php echo  set_select('mySelect3', '3'); ?> >五星</option>
                            <option value="紧急" <?php echo  set_select('mySelect3', '4'); ?> >紧急</option>
                            <option value="长期" <?php echo  set_select('mySelect3', '5'); ?> >长期</option>
                        </select>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputContent" class="control-label">内容：</label>
                            <textarea class="form-control" rows="5" name="content" id="inputContent"></textarea>
                            <p class="help-block">请输入要发布业务信息的内容</p>
                        </div>
                        <div class="control-group">
                            <label for="inputCompany" class="control-label">企业名称：</label>
                            <input type="text" placeholder="企业名称..." class="form-control" name="company"
                                   id="inputCompany">
                            <p class="help-block">请正确输入企业的名称</p>
                        </div>
                        <div class="control-group">
                            <label for="inputCompanyType" class="control-label">企业类型：</label>
                            <input type="text" placeholder="企业类型..." class="form-control" name="company_type"
                                   id="inputCompanyType">
                            <p class="help-block">请正确输入企业的类型</p>
                        </div>
                        <div class="control-group">
                            <label for="inputContact" class="control-label">联系电话：</label>
                            <input type="text" placeholder="联系电话..." class="form-control" name="contact"
                                   id="inputContact">
                            <p class="help-block">请正确输入联系电话，不能有空格或其他符号</p>
                        </div>
                        <button type="submit" name="submit" class="btn btn-default pull-right">发布</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

