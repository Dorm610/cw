<div class="container-fluid">
    <div class="row">
        <div class="col-xs-3 col-sm-2 col-md-1 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="<?php echo site_url('clients'); ?>">首页</a></li>
                <li><a href="<?php echo site_url('clients/create'); ?>">创建用户</a></li>
                <li><a href="<?php echo site_url('clients/import'); ?>">批量导入</a></li>
                <li><a href="<?php echo site_url('clients/search'); ?>">查询用户</a></li>
                <li><a href="<?php echo site_url('clients/search'); ?>">修改用户</a></li>
                <li class="active"><a href="<?php echo site_url('messages/create'); ?>">发布业务</a></li>
                <li><a href="<?php echo site_url('messages/search'); ?>">查询业务</a></li>
            </ul>
        </div>
        <div class="col-xs-9 col-xs-offset-3 col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">
            <?php echo validation_errors(); ?>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">发布业务</h3>
                    </div>
                    <div class="panel-body">
                        <!--创建表单-->
                        <?php echo form_open('messages/create'); ?>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputTitle" class="control-label">标题：</label>
                            <input type="text" placeholder="标题..." class="form-control" name="title"
                                   id="inputTitle">
                            <p class="help-block">请正确输入业务的标题</p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <label for="inputContent" class="control-label">内容：</label>
                            <textarea class="form-control" rows="5" name="content" id="inputContent"></textarea>
                            <p class="help-block">请正确输入业务的内容</p>
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">发布</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
