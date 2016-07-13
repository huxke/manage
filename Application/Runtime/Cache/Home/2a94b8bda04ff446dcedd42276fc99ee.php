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
<link rel="stylesheet" href="/Public/css/reg.css"/>
<body>
<!--整个div-->
<div class="reg">
    <!--top-->
    <div class="col-sm-12 reg_top">
        <img src="/Public/img/back.jpg" alt=""/>
        <span>申请成为受信合伙人</span>
    </div>
    <!--注册面板-->
    <div class="panel-body reg_main">
        <form class="form-horizontal" role="form" action="/Home/User/auditing" method="post" enctype="multipart/form-data">
            <div class="form-group col-sm-12 reg_margin">
                <label for="usertel" class="col-sm-1 control-label"><img src="/Public/img/reg1.jpg" width="19px" height="23px"alt=""/></label>
                <input class="col-sm-11  index_input" type="text" name="userphone" placeholder="请输入手机号" id="usertel" />
            </div>
            <div class="form-group col-sm-12 reg_margin">
                <label for="username" class="col-sm-1 control-label"><img src="/Public/img/reg2.jpg" width="20px" height="19px"alt=""/></label>
                <input type="text" name="username" class="col-sm-11  index_input" placeholder="请输入用户名" id="username" />
            </div>
            <div class="form-group col-sm-12 reg_margin">
                <label for="userid" class="col-sm-1 control-label"><img src="/Public/img/reg2.jpg" width="20px" height="19px"alt=""/></label>
                <input type="text" name="userid" class="col-sm-11  index_input" placeholder="请输入您的身份证号" id="userid" />
            </div>
            <div class="form-group col-sm-12 reg_margin">
                <label for="userpwd" class="col-sm-1 control-label"><img src="/Public/img/reg3.jpg" width="17px" height="24px"alt=""/></label>
                <input type="password" name="userpwd" class="col-sm-11  index_input" placeholder="输入密码" id="userpwd" />
            </div>
            <div class="form-group col-sm-12 reg_margin">
                <label for="userpwd1" class="col-sm-1 control-label"><img src="/Public/img/reg3.jpg" width="17px" height="24px"alt=""/></label>
                <input type="password" name="userpwd1" class="col-sm-11  index_input" placeholder="再次输入密码" id="userpwd1" />
            </div>
            <div class="form-group col-sm-12 reg_margin">
                <input type="hidden" name="parentphone" value="<?php echo ($parentphone); ?>" >
            </div>
            <div>
            <input type="file" name="photo" />
            </div>>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn index_login">
                        注册
                    </button>
                </div>
            </div>
        </form>
    </div>
    <footer style="text-align: center;position: fixed;bottom: 0;left: 45%"><img src="/Public/img/regbot.jpg" alt="" width="39px" height="20px"/></footer>
</div>
</body>
</html>