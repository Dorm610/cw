<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<!-- Title and other stuffs -->
	<title>后台管理系统</title>
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
			<a class="navbar-brand" href="#">后台管理系统</a>
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
			<p>
				<button type="button" class="btn btn-lg btn-default">1</button>
				<button type="button" class="btn btn-lg btn-primary">2</button>
				<button type="button" class="btn btn-lg btn-success">3</button>
				<button type="button" class="btn btn-lg btn-info">4</button>
				<button type="button" class="btn btn-lg btn-warning">5</button>
				<button type="button" class="btn btn-lg btn-danger">6</button>
			</p>
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">提示信息</h3>
						</div>
						<div class="panel-body">
							<div class="alert alert-success" role="alert">
								<strong>添加</strong>用户成功！
							</div>
							<div class="alert alert-danger" role="alert">
								<strong>添加</strong>用户失败！
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">SQL查询</h3>
						</div>
						<div class="panel-body">
							<div class="control-group">
								<!-- Search input-->
								<label for="inputSql" class="control-label">输入SQL查询语句：</label>
								<textarea class="form-control" rows="3"></textarea>
								<br />
							</div>
							<button type="submit" class="btn btn-default">查询</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">用户列表</h3>
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-hover table-responsive table-striped">
								<thead>
								<tr>
									<th>#</th>
									<th>用户名</th>
									<th>手机号</th>
									<th>微信号</th>
									<th>微信昵称</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>1</td>
									<td>小沈阳</td>
									<td>13188886666</td>
									<td>xiaoshenyang</td>
									<td>我是小沈阳</td>
								</tr>
								<tr>
									<td>2</td>
									<td>宋小宝</td>
									<td>13188887777</td>
									<td>songxiaobao</td>
									<td>我是宋小宝</td>
								</tr>
								<tr>
									<td>3</td>
									<td>王小利</td>
									<td>13188889999</td>
									<td>wangxiaoli</td>
									<td>我是王小利</td>
								</tr>
								<tr>
									<td>4</td>
									<td>刘小光</td>
									<td>13188880000</td>
									<td>liuxiaoguang</td>
									<td>我是刘小光</td>
								</tr>
								</tbody>
							</table>
							<ul class="pager">
								<li class="previous"><a href="#">&laquo;上一页</a></li>
								<li class="next"><a href="#">下一页&raquo;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">查询用户</h3>
						</div>
						<div class="panel-body">
							<form class="form" role="form">
								<div class="control-group">
									<!-- Search input-->
									<label for="inputName" class="control-label">用户名：</label>
									<input type="text" placeholder="请输入用户名..." class="form-control" id="inputName">
									<p class="help-block">请正确输入用户的姓名</p>
								</div>
								<div class="control-group">
									<!-- Search input-->
									<label for="inputName" class="control-label">手机号：</label>
									<input type="text" placeholder="请输入用户名..." class="form-control" id="inputName">
									<p class="help-block">请正确输入用户的手机号</p>
								</div>
								<div class="control-group">
									<label class="control-label">用户类型：</label>
									<label class="radio-inline">
										<input type="radio" value="老板" name="group" checked="checked">老板
									</label>
									<label class="radio-inline">
										<input type="radio" value="司机" name="group">司机
									</label>
								</div>
								<button type="submit" class="btn btn-default">查询</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>



