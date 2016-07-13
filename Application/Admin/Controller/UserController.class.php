<?php
namespace Admin\Controller;

use Think\Controller;

class UserController extends Controller
{

    public function login()
    {
        $phone = I('post.username');
        $password = I('post.password');

        $user = D('Admin');

        $result = $user->adminCheckLogin($phone, $password);

        if (empty($result)) {
            echo "管理员账号或密码错误";
        }else{
            $audituser=$this->getAudit();

        $this->assign('audituser',$audituser);
        $this->display('User/xdda');
        }
    }

    public function getAudit()
    {
        $user = D('User');
        $audituser=$user->getAuditUser();
        return $audituser;
    }

    public function audit($phone,$status,$parentPhone)
    {
        //获得审核状态

        $user=D('User');
        $cash=D('Cash');
        $cashdetail=D('CashDetail');

        $result=$user->audit($phone,$status);

        if($status=='success'){
            $cash->basicsBonus($phone);

            if(!empty($parentPhone)){
                //获得上级账号
                // $upper=$user->getParentPhone($parentPhone);
                //上级账号佣金增加
                $upperCash=$cash->completePromotion($parentPhone);
                //产生详细佣金信息
                $cashinfo=$CashDetail->completePromotion($phone,$parentPhone);
            }
        }
        return $result;
    }

    public function auditWithdrawals($phone,$childPhone,$status)
    {
        //获得提现状态
        $cashdetail=D('CashDetail');
        $result=$cashdetail->dealWithdrawals($phone,$childPhone,$status);

        return $result;

    }

}