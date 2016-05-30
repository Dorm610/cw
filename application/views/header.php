<!--<html>-->
<!--<head>-->
<!--    <title>--><?php
//        echo $title; ?><!--</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<h1>--><?php
//    echo $title; ?><!--</h1>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title>超级矿资源</title>
    <!--	这句必须加，否则ci会定位不到css和js文件-->
    <base href = "<?php echo $base_url;?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 40px;
            color: #5a5a5a;
        }

        .sidebar {
            width: auto;
            position: fixed;
            float: left;
            top: 51px;
            bottom: 0;
            left: 0;
            z-index: 1000;
            display: block;
            padding: 20px;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: #ddd;
            border-right: 1px solid #eee;
        }

        .nav-sidebar {
            margin-right: -21px;
            margin-bottom: 20px;
            margin-left: -20px;
        }

        .nav-sidebar > li > a {
            padding-right: 20px;
            padding-left: 20px;
        }

        .nav-sidebar > .active > a,
        .nav-sidebar > .active > a:hover,
        .nav-sidebar > .active > a:focus {
            color: #fff;
            background-color: #428bca;
        }

        .main {
            padding: 20px;
        }

        .main .page-header {
            margin-top: 0;
        }
    </style>

</head>

<body>
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
                <li><a href="<?php echo site_url('clients/create'); ?>">创建用户</a></li>
                <li><a href="<?php echo site_url('clients/import'); ?>">批量导入</a></li>
                <li><a href="<?php echo site_url('clients/search'); ?>">查询用户</a></li>
                <li><a href="<?php echo site_url('clients/search'); ?>">修改用户</a></li>
                <li><a href="<?php echo site_url('messages/create'); ?>">发布业务</a></li>
                <li><a href="<?php echo site_url('messages/search'); ?>">查询业务</a></li>
                <li><a href="<?php echo site_url('company/create'); ?>">创建企业</a></li>
                <li><a href="<?php echo site_url('company/search'); ?>">查询企业</a></li>
            </ul>
<!--            <form class="navbar-form navbar-right" role="search">-->
<!--                <div class="form-group">-->
<!--                    <input type="text" class="form-control" placeholder="用户名...">-->
<!--                    <input type="password" class="form-control" placeholder="密码...">-->
<!--                </div>-->
<!--                <button type="submit" class="btn btn-default">登陆</button>-->
<!--            </form>-->
        </div>
    </div>
</nav>