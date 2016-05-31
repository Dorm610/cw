<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/30
 * Time: 下午11:26
 */
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>WeUI</title>
    <!--	这句必须加，否则ci会定位不到css和js文件-->
    <base href = "<?php echo $base_url;?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/weui.css" rel="stylesheet">
    <link href="css/example.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .fixbody {
            overflow:auto;
            padding-bottom: 55px;
        }

        .fixfooter {
            position: absolute;
            margin-top: -55px;
            height: 55px;
            width: 100%;
            bottom: 0px;
            left: 0px;
        }
    </style>
</head>