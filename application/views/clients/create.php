
<div class="container-fluid">
    <div class="row">
<!--        <div class="col-xs-3 col-sm-2 col-md-1 sidebar">-->
<!--            <ul class="nav nav-sidebar">-->
<!--                <li><a href="--><?php //echo site_url('clients'); ?><!--">首页</a></li>-->
<!--                <li class="active"><a href="--><?php //echo site_url('clients/create'); ?><!--">创建用户</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/import'); ?><!--">批量导入</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/search'); ?><!--">查询用户</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients/search'); ?><!--">修改用户</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients'); ?><!--">发布业务</a></li>-->
<!--                <li><a href="--><?php //echo site_url('clients'); ?><!--">查询业务</a></li>-->
<!--                <li><a href="--><?php //echo site_url('company/create'); ?><!--">创建企业</a></li>-->
<!--                <li><a href="--><?php //echo site_url('company/search'); ?><!--">查询企业</a></li>-->
<!--            </ul>-->
<!--        </div>-->
        <div class="main">
            <?php echo validation_errors(); ?>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">创建用户</h3>
                    </div>
                    <div class="panel-body">
                        <!--创建表单-->
                        <?php echo form_open('clients/create'); ?>
                        <label for="inputer" class="control-label">采集人：</label>
                        <select name="myselect" id="inputer">
                            <option value="刘宝键" <?php echo  set_select('myselect', '1', TRUE); ?> >刘宝键</option>
                            <option value="刘启梦" <?php echo  set_select('myselect', '2'); ?> >刘启梦</option>
                            <option value="王泉森" <?php echo  set_select('myselect', '3'); ?> >王泉森</option>
                            <option value="王端阳" <?php echo  set_select('myselect', '4'); ?> >王端阳</option>
                            <option value="任祯" <?php echo  set_select('myselect', '5'); ?> >任祯</option>
                            <option value="刘宣" <?php echo  set_select('myselect', '6'); ?> >刘宣</option>
                            <option value="李拥政" <?php echo  set_select('myselect', '7'); ?> >李拥政</option>
                            <option value="荀辰龙" <?php echo  set_select('myselect', '8'); ?> >荀辰龙</option>
                            <option value="王超一" <?php echo  set_select('myselect', '9'); ?> >王超一</option>
                            <option value="诸欠文" <?php echo  set_select('myselect', '10'); ?> >诸欠文</option>
                        </select>
                        <label for="inputer" class="control-label">客户性质：</label>
                        <select name="myselect1" id="inputer">
                            <option value="未知" <?php echo  set_select('myselect1', '1', TRUE); ?> >未知</option>
                            <option value="厂矿" <?php echo  set_select('myselect1', '2'); ?> >厂矿</option>
                            <option value="供应商" <?php echo  set_select('myselect1', '3'); ?> >供应商</option>
                            <option value="物流公司" <?php echo  set_select('myselect1', '4'); ?> >物流公司</option>
                        </select>
                        <label for="inputer" class="control-label">货物类型：</label>
                        <select name="myselect2" id="inputer">
                            <option value="未知" <?php echo  set_select('myselect2', '1', TRUE); ?> >未知</option>
                            <option value="原煤" <?php echo  set_select('myselect2', '2'); ?> >原煤</option>
                            <option value="块煤" <?php echo  set_select('myselect2', '3'); ?> >块煤</option>
                            <option value="煨煤" <?php echo  set_select('myselect2', '4'); ?> >煨煤</option>
                            <option value="动力煤" <?php echo  set_select('myselect2', '5'); ?> >动力煤</option>
                            <option value="一精煤" <?php echo  set_select('myselect2', '6'); ?> >一精煤</option>
                            <option value="二精煤" <?php echo  set_select('myselect2', '7'); ?> >二精煤</option>
                            <option value="洗选煤" <?php echo  set_select('myselect2', '8'); ?> >洗选煤</option>
                            <option value="其他" <?php echo  set_select('myselect2', '9'); ?> >其他</option>
                        </select>
                        <div class="control-group">
                            <label for="inputName" class="control-label">信息来源：</label>
                            <input type="text" placeholder="用户名..." class="form-control" name="name"
                                   id="inputName">
                            <p class="help-block">请正确输入采集信息的来源网站</p>
                        </div>
                        <div class="control-group">
                            <label for="inputName" class="control-label">用户名：</label>
                            <input type="text" placeholder="用户名..." class="form-control" name="name"
                                   id="inputName">
                            <p class="help-block">请正确输入用户的姓名</p>
                        </div>
                        <div class="control-group">
                            <label for="inputWxNum" class="control-label">微信号：</label>
                            <input type="text" placeholder="微信号..." class="form-control" name="wx_id"
                                   id="inputWxNum">
                            <p class="help-block">请正确输入用户的微信号</p>
                        </div>
                        <div class="control-group">
                            <label for="inputWxName" class="control-label">微信名：</label>
                            <input type="text" placeholder="微信名..." class="form-control" name="wx_name"
                                   id="inputWxName">
                            <p class="help-block">请正确输入用户的微信名</p>
                        </div>
                        <div class="control-group">
                            <label for="inputQq" class="control-label">QQ号：</label>
                            <input type="text" placeholder="QQ号..." class="form-control" name="qq"
                                   id="inputQq">
                            <p class="help-block">请正确输入用户的QQ号</p>
                        </div>
                        <div class="control-group">
                            <label for="inputPhone" class="control-label">手机号：</label>
                            <input type="text" placeholder="手机号..." class="form-control" name="phone"
                                   id="inputPhone">
                            <p class="help-block">请正确输入用户的手机号</p>
                        </div>

                        <!--地址-->
                        <div class="control-group">
                            <label for="inputDistrict" class="control-label">地址：</label>
                            <span id="areaContainer"></span>
                            <p/>
                        </div>
                        <div class="control-group">
                            <label for="inputTown" class="control-label">具体区域：</label>
                            <input type="text" placeholder="具体区域..." class="form-control" name="town"
                                   id="inputTown">
                            <p class="help-block">请输入具体区域</p>
                        </div>
                        <input type="text" name="districtID" id="districtID" style="display:none;">
                        <input type="text" name="districtStr" id="districtStr" style="display:none;">


                        <div class="control-group">
                            <label for="inputEmail" class="control-label">Email：</label>
                            <input type="text" placeholder="Email..." class="form-control" name="email"
                                   id="inputEmail">
                            <p class="help-block">请正确输入用户的Email</p>
                        </div>
                        <div class="control-group">
                            <label for="inputCompany" class="control-label">公司名：</label>
                            <input type="text" placeholder="公司/企业/厂矿名..." class="form-control" name="company"
                                   id="inputCompany">
                            <p class="help-block">请正确输入用户的公司/企业/厂矿名</p>
                        </div>
                        <div class="control-group">
                            <label for="inputDDescri" class="control-label">详细地址：</label>
                            <input type="text" placeholder="职位..." class="form-control" name="d_descri"
                                   id="inputDDescri">
                            <p class="help-block">请正确输入详细地址</p>
                        </div>
                        <div class="control-group">
                            <label for="inputPosition" class="control-label">职位：</label>
                            <input type="text" placeholder="职位..." class="form-control" name="position"
                                   id="inputPosition">
                            <p class="help-block">请正确输入用户的职位</p>
                        </div>
                        <div class="control-group">
                            <label for="inputLinephone" class="control-label">固定电话：</label>
                            <input type="text" placeholder="固定电话..." class="form-control" name="linephone"
                                   id="inputLinephone">
                            <p class="help-block">请正确输入用户的固定电话</p>
                        </div>
                        <button type="submit" name="submit" id="getValueBtn"  class="btn btn-default">创建</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="js/area.js"></script>
        <script type="text/javascript">

            $(function(){
                Area.init('<?php echo $base_url;?>'+'js/area.json');
                var area  = new Area('#areaContainer');
                area.select('110108');

                $('#getValueBtn').click(function(){
                    var code = area.getAddress();
                    var address = Area.getAddressByCode(code);
                    $('#districtID').val(code);
                    $('#districtStr').val(address);

                });
            });
        </script>