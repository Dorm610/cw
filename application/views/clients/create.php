<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">超级矿资源</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse1">
            <ul class="nav navbar-nav">
                <li><a href="clients/">首页</a></li>
                <li class="active"><a>功能</a></li>
                <li><a>设置</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名...">
                    <input type="password" class="form-control" placeholder="密码...">
                </div>
                <button type="submit" class="btn btn-default">登陆</button>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 col-md-1 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">创建用户</a></li>
                <li><a href="#">查询用户</a></li>
                <li><a href="#">修改用户</a></li>
                <li><a href="#">发布业务</a></li>
                <li><a href="#">查询业务</a></li>
            </ul>
        </div>
        <div class="col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">
            <?php echo validation_errors(); ?>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">创建用户</h3>
                    </div>
                    <div class="panel-body">
                        <!--创建表单-->
                        <?php echo form_open('clients/create'); ?>
                        <label for="inputer" class="control-label">创建人：</label>
                        <select name="myselect" id="inputer">
                            <option value="name1" <?php echo  set_select('myselect', '1', TRUE); ?> >One</option>
                            <option value="name2" <?php echo  set_select('myselect', '2'); ?> >Two</option>
                            <option value="name3" <?php echo  set_select('myselect', '3'); ?> >Three</option>
                        </select>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputName" class="control-label">用户名：</label>
                            <input type="text" placeholder="请输入用户名..." class="form-control" name="name"
                                   id="inputName">
                            <p class="help-block">请正确输入用户的姓名</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputWxNum" class="control-label">微信号：</label>
                            <input type="text" placeholder="请输入微信号..." class="form-control" name="wx_id"
                                   id="inputWxNum">
                            <p class="help-block">请正确输入用户的微信号</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputWxName" class="control-label">微信名：</label>
                            <input type="text" placeholder="请输入微信名..." class="form-control" name="wx_name"
                                   id="inputWxName">
                            <p class="help-block">请正确输入用户的微信名</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputQq" class="control-label">QQ号：</label>
                            <input type="text" placeholder="请输入QQ号..." class="form-control" name="qq"
                                   id="inputQq">
                            <p class="help-block">请正确输入用户的QQ号</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputPhone" class="control-label">手机号：</label>
                            <input type="text" placeholder="请输入手机号..." class="form-control" name="phone"
                                   id="inputPhone">
                            <p class="help-block">请正确输入用户的手机号</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputAdd" class="control-label">地址：</label>
                            <input type="text" placeholder="请输入地址..." class="form-control" name="address"
                                   id="inputAdd">
                            <p class="help-block">请正确输入用户的地址</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputEmail" class="control-label">Email：</label>
                            <input type="text" placeholder="请输入Email..." class="form-control" name="email"
                                   id="inputEmail">
                            <p class="help-block">请正确输入用户的Email</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputCompany" class="control-label">公司名：</label>
                            <input type="text" placeholder="请输入公司名..." class="form-control" name="company"
                                   id="inputCompany">
                            <p class="help-block">请正确输入用户的公司名</p>
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">创建</button>
                    </div>
                    </form>
                </div>
            </div>