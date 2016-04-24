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
    <base href = "<?php echo base_url();?>"/>
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
            <a class="navbar-brand" href="#">超级矿资源</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#index.html">首页</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">功能<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">用户管理</li>
                        <li><a href="#">查询</a></li>
                        <li><a href="#">添加</a></li>
                        <li><a href="#">修改</a></li>
                        <li><a href="#">删除</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">发布管理</li>
                        <li><a href="#">查询</a></li>
                        <li><a href="#">发布</a></li>
                    </ul>
                </li>
                <li><a href="#">设置</a></li>
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
                <li class="active"><a href="#">首页</a></li>
            </ul>
        </div>
        <div class="col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">