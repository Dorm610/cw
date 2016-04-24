<!--<h2>-->
<!--    --><?php //echo $title; ?>
<!--</h2>-->
<?php
//foreach ($clients as $client): ?>
<!---->
<!--<h3>--><?php //echo $client['id']; ?><!--</h3>-->
<!--<div class="main">-->
<!--    --><?php //echo $client['name']; ?>
<!--</div>-->
<!--<p><a href="--><?php //echo site_url('clients/' . $client['id']); ?><!--">view more</a></p>-->
<?php //endforeach; ?>

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
            <a class="navbar-brand">超级矿资源</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse1">
            <ul class="nav navbar-nav">
                <li class="active"><a>首页</a></li>
                <li><a href="clients/create">功能</a></li>
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
                <li class="active"><a>首页</a></li>
            </ul>
        </div>
        <div class="col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">
            <h1>欢迎访问超级矿后台管理系统</h1>
        </div>
