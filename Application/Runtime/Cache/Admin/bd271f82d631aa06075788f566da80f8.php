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
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script src="/Public/js/xdda.js"></script>
<link rel="stylesheet" href="/Public/css/xdda.css"/>
<body>
<div id="bgimg"><img src="/Public/img/xddB.gif" alt=""/></div>
<div>
    <div class="col-md-12 blist">
        <div class="col-md-6"><a href="xddb.html" style="text-decoration:none;color: #000000">小B审核</a></div>
        <div class="col-md-6" id="mine_ask">提现申请</div>
        <!--<div class="col-md-4"><a href="xddb.html" style="text-decoration:none;color: #000000">小B列表</a></div>-->
    </div>
    <div class="col-md-12 blist1">
        <div class="col-md-3" id="my_ask">提现申请</div>
        <div class="col-md-3" id="my_notpass">提现未通过</div>
        <div class="col-md-3" id="my_pass">提现已通过</div>
        <div class="col-md-3" id="my_finish">提现已发放</div>
    </div>
    <div class="col-md-12 blist2">
        <div class="col-md-3">小B姓名</div>
        <div class="col-md-3">手机号</div>
        <div class="col-md-3">提现金额</div>
        <div class="col-md-3">审核</div>
    </div>
    <!--审核未通过-->
    <div id="notpass">
    <div class="col-md-12 blist3">
        <div class="col-md-3">abc</div>
        <div class="col-md-3">18060020175</div>
        <div class="col-md-3">500.00</div>
        <div id="changenpass">
        <div class="col-md-1"><input type="button" value="同意"  style="border: none;outline: none" onclick="change(this.id)"/></div>
        <div class="col-md-1" hidden="hidden" ></div>
        <div class="col-md-1"><input type="button" value="拒绝" style="border: none;outline: none" onclick="change(this.id)"/></div>
        </div>
        </div>
    </div>
    <!--申请-->
    <div id="ask">
    <div class="col-md-12 blist3">
        <div class="col-md-3">abc</div>
        <div class="col-md-3">18060020175</div>
        <div class="col-md-3">500.00</div>
        <div id="change">
        <div class="col-md-1"><input type="button" value="同意"  style="border: none;outline: none" onclick="change(this.id)"/></div>
        <div class="col-md-1" hidden="hidden" ></div>
        <div class="col-md-1"><input type="button" value="拒绝"  style="border: none;outline: none" onclick="change(this.id)"/></div>
        </div>
        </div>
    </div>
    <!--已通过-->
    <div id="pass">
        <div class="col-md-12 blist3">
            <div class="col-md-3">abc</div>
            <div class="col-md-3">18060020175</div>
            <div class="col-md-3">500.00</div>
            <div id="changepass">
                <div class="col-md-1"><input type="button" value="同意"  style="border: none;outline: none" onclick="change(this.id)"/></div>
                <div class="col-md-1" hidden="hidden" ></div>
                <div class="col-md-1"><input type="button" value="拒绝"  style="border: none;outline: none" onclick="change(this.id)"/></div>
            </div>
        </div>
    </div>
    <!--已发放-->
    <div id="finish">
        <div class="col-md-12 blist3">
            <div class="col-md-3">abc</div>
            <div class="col-md-3">18060020175</div>
            <div class="col-md-3">500.00</div>
            <div id="changefinish">
                <div class="col-md-1"><input type="button" value="同意"  style="border: none;outline: none" onclick="change(this.id)"/></div>
                <div class="col-md-1" hidden="hidden" ></div>
                <div class="col-md-1"><input type="button" value="拒绝"  style="border: none;outline: none" onclick="change(this.id)"/></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>