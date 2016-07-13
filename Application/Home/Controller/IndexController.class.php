<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $oldUrl = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

        $tem=explode('?',$oldUrl);
        $parentphone=$tem[1];

        $this->assign('parentphone', $parentphone);
        $this->display();
    }

    public function login()
    {
        $this->display();
    }
}