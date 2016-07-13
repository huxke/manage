<?php
namespace Home\Common;

use Think\Controller;

class BaseController extends Controller
{
         public function _initialize(){
        //判断用户是否已经登录
        if (!isset($_SESSION['loginname'])) {
            $this->error('对不起,您还没有登录!请先登录再进行浏览', U('Home/Index/login'), 3);
        }
    }
}