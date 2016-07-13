<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
<!-- 可选的Bootstrap主题文件（一般不使用） -->
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap-theme.min.css"></script>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/Public/css/xddb.css"/>
<script src="/Public/js/xddb.js"></script>
<body>
<div id="bgimg"><img src="/Public/img/xddB.gif" alt=""/></div>
<div class="col-md-12 bblist">
    <div class="col-md-6"><a href="xddb.html" style="text-decoration:none;color: #000000">小B审核</a></div>
    <div class="col-md-6" id="mine_ask"><a href="xdda.html" style="text-decoration:none;color: #000000"></a>提现申请</div>
    <!--<div class="col-md-4"><a href="xddb.html" style="text-decoration:none;color: #000000">小B列表</a></div>-->
</div>
    <div class="col-md-12 blist">
        <div class="col-md-4" id="dask">待审核</div>
        <div class="col-md-4" id="npass">未通过</div>
        <div class="col-md-4" id="ypass">已通过</div>
    </div>
<div class="col-md-12 welcome">
    <p>欢迎您</p>
    <img src="/Public/img/logo.jpg" alt=""/>
</div>
<div class="col-md-12 blist1">
        <div class="col-md-3">小B姓名</div>
        <div class="col-md-3">身份证号码</div>
        <div class="col-md-3">工作证件照片</div>
        <div class="col-md-3">审核</div>
    </div>
<!--待审核-->
<div id="dask_list" >
    <div class="col-md-12 blist3">
        <div class="col-md-3">abc</div>
        <div class="col-md-3">18060020175</div>
        <div class="col-md-3"><img src="/Public/img/xdd.gif" alt=""/></div>
        <div class="col-md-3">予以提现</div>
    </div>
</div>
<!--未通过-->
<div id="ypass_list">
    <div class="col-md-12 blist3">
        <div class="col-md-3">abc</div>
        <div class="col-md-3">18060020175</div>
        <div class="col-md-3"><img src="/Public/img/xdd.gif" alt=""/></div>
        <div class="col-md-3">予以提现</div>
    </div>
</div>
<!--已审核-->
<div id="npass_list">
    <div class="col-md-12 blist3">
        <div class="col-md-3">abc</div>
        <div class="col-md-3">18060020175</div>
        <div class="col-md-3"><img src="/Public/img/xdd.gif" alt=""/></div>
        <div class="col-md-3">予以提现</div>
    </div>
</div>

</body>
</html>