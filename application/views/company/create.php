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
<!--                <li class="active"><a href="--><?php //echo site_url('company/create'); ?><!--">创建企业</a></li>-->
<!--                <li><a href="--><?php //echo site_url('company/search'); ?><!--">查询企业</a></li>-->
<!--            </ul>-->
<!--        </div>-->
        <div class="main">
            <?php echo validation_errors(); ?>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">创建企业</h3>
                    </div>
                    <div class="panel-body">
                        <!--创建表单-->
                        <?php echo form_open('company/create'); ?>
                        <label for="inputType" class="control-label">企业类型：</label>
                        <select name="mySelect1" id="inputType">
                            <option value="上游" <?php echo  set_select('mySelect1', '1', TRUE); ?> >上游</option>
                            <option value="下游" <?php echo  set_select('mySelect1', '2'); ?> >下游</option>
                            <option value="物流公司" <?php echo  set_select('mySelect1', '3'); ?> >物流公司</option>
                            <option value="信息部" <?php echo  set_select('mySelect1', '4'); ?> >信息部</option>
                        </select>
                        <label for="inputRemark" class="control-label">企业标识：</label>
                        <select name="mySelect2" id="inputRemark">
                            <option value="普通" <?php echo  set_select('mySelect2', '1', TRUE); ?> >普通</option>
                            <option value="三星" <?php echo  set_select('mySelect2', '2'); ?> >三星</option>
                            <option value="五星" <?php echo  set_select('mySelect2', '3'); ?> >五星</option>
                            <option value="紧急" <?php echo  set_select('mySelect2', '4'); ?> >紧急</option>
                            <option value="长期" <?php echo  set_select('mySelect2', '5'); ?> >长期</option>
                        </select>
                        <label for="inpuRecorder" class="control-label">创建人：</label>
                        <select name="mySelect3" id="inpuRecorder">
                            <option value="刘宝键" <?php echo  set_select('mySelect3', '1', TRUE); ?> >刘宝键</option>
                            <option value="刘启梦" <?php echo  set_select('mySelect3', '2'); ?> >刘启梦</option>
                            <option value="王泉森" <?php echo  set_select('mySelect3', '3'); ?> >王泉森</option>
                            <option value="王端阳" <?php echo  set_select('mySelect3', '4'); ?> >王端阳</option>
                            <option value="任祯" <?php echo  set_select('mySelect3', '5'); ?> >任祯</option>
                            <option value="刘宣" <?php echo  set_select('mySelect3', '6'); ?> >刘宣</option>
                            <option value="李拥政" <?php echo  set_select('mySelect3', '7'); ?> >李拥政</option>
                            <option value="荀辰龙" <?php echo  set_select('mySelect3', '8'); ?> >荀辰龙</option>
                            <option value="王超一" <?php echo  set_select('mySelect3', '9'); ?> >王超一</option>
                        </select>
                        <div class="control-group">
                            <label for="inputName" class="control-label">企业名称：</label>
                            <input type="text" placeholder="公司名称..." class="form-control" name="name"
                                   id="inputName">
                            <p class="help-block">请输入要企业的名称</p>
                        </div>
                        <div class="control-group">
                            <label for="inputBusinessLicense" class="control-label">营业许可：</label>
                            <input type="text" placeholder="营业许可..." class="form-control" name="business_license"
                                   id="inputBusinessLicense">
                            <p class="help-block">请正确输入企业的营业许可</p>
                        </div>
                        <div class="control-group">
                            <label for="inputProductIntro" class="control-label">产品介绍：</label>
                            <textarea class="form-control" rows="5" name="product_intro" id="inputProductIntro"></textarea>
                            <p class="help-block">请正确输入企业的产品介绍</p>
                        </div>
                        <div class="control-group">
                            <label for="inputClientsIntro" class="control-label">企业介绍：</label>
                            <textarea class="form-control" rows="5" name="clients_intro" id="inputClientsIntro"></textarea>
                            <p class="help-block">请正确输入企业的介绍</p>
                        </div>
                        <div class="control-group">
                            <label for="inputThirdPartyEvaluate" class="control-label">其他评价：</label>
                            <textarea class="form-control" rows="5" name="third_party_evaluate" id="inputThirdPartyEvaluate"></textarea>
                            <p class="help-block">请正确输入第三方对企业的评价</p>
                        </div>
                        <button type="submit" name="submit" class="btn btn-default pull-right">创建</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>