<!--<h2> success! </h2>-->
<!--<a href="create">another</a>-->
<!--<!--不能跳到本控制器外-->-->
<!--<!--<a href="./Pages/view">view</a>-->-->

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
                        <div class="alert alert-success" role="alert">
                            <strong>创建</strong>用户成功!<a href="create" class="pull-right">继续创建</a>
                        </div>
                    </div>
                </div>
            </div>