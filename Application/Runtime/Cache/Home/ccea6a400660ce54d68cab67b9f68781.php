<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <link href="/Public/bootstrap-3.3.5/dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/Public/css/login.css"/>
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script>
        $("button").focus(function(){this.blur()});
    </script>
</head>
<body>
<div class="index">
    <!--div logo-->
    <div class=" index_logo">
        <img src="/Public/img/logo.jpg" width="115px" height="59px" />
    </div>
    <!--表单-->
    <div class="panel-body">
        <form class="form-horizontal" role="form" action="/Home/User/yemian" method="post">
            <div class="form-group col-sm-12">
                <label for="username" class="col-sm-1 control-label"><img src="/Public/img/user.jpg" width="13px" height="18px"alt=""/></label>
                <input class="col-sm-11  index_input" type="text" name="username" placeholder="请输入用户名" id="username" />
            </div>
            <hr style="border: solid 0.5px #D6D4D2"/>
            <div class="form-group col-sm-12">
                <label for="password" class="col-sm-1 control-label"><img src="/Public/img/pwd.jpg" width="13px" height="18px"alt=""/></label>
                <input type="password" name="password" class="col-sm-11  index_input" placeholder="密码" id="password" />
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn index_login">
                        登陆
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!--底部-->
    <div class="col-sm-12">
        <span class=" col-sm-6" style="margin-left: -2%">成为受信合伙人</span>
        <span class=" col-sm-6" style="float: right">找回密码</span>
    </div>
    <footer style="text-align: center;position: fixed;bottom: 0;left: 35%"><p>受信合伙人专用版</p></footer>
</div>
</body>
</html>