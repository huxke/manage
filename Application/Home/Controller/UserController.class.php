<?php
namespace Home\Controller;

use Think\Controller;
use Think\Model;
use Think\Upload;
use Home\Model\UserModel;

class UserController extends Controller
{
    public function yemian()
    {
        $phone = I('post.username');
        // $password = MD5(I('post.password'));
        $password = I('post.password');

        $result=$this->login($phone,$password);
        //下级
        $subordinate=$this->subordinate($phone);
        //奖金
        $money=$this->cash($phone);
        $this->assign('result',$result);
        $this->assign('money',$money);
        $this->display();
    }

    public function share()
    {
        $phone = session('phone');
         $data = "http://".$_SERVER["SERVER_NAME"]."/?{$phone}";
        $this->assign('data',$data);
        $this->display();
    }

    public function cash($phone)
    {
        $cash=D('Cash');
        $money['allbonus']=$cash->getAllBonus($phone);
        $money['withdrawals']=$cash->getWithdrawals($phone);

        return $money;

    }

    public function subordinate($phone)
    {
        $user = D('User');
        $subordinate=$user->getSubordinate($phone);
       return $subordinate;
    }

    public function apply($phone,$parentPhone)
    {
        $cashdetail=D('CashDetail');
        $result=$cashdetail->apply($phone,$parentPhone);

        return $result;
    }

    public function login($phone,$password)
    {

        $user = D('User');
        $result = $user->checkLogin($phone, $password);
        if (empty($result)) {
            echo('用户名或密码错误');
        }
        if ($result) {
            session('phone', $result[0]['phone']);
            $auditstatus = $result[0]['isaudit'];
            if ($auditstatus == 'no') {
                echo "尚未通过审核";
            } else {
                $data = $_SERVER["SERVER_NAME"]."/?{$phone}";
                $result['data']=$data;
                return $result;
            }
        }
    }

    public function auditing()
    {
        $auditUser['phone'] = I('post.userphone');
        $auditUser['nickname'] = I('post.username');
        $auditUser['idcard'] = I('post.userid');
        $auditUser['password'] = MD5(I('post.userpwd'));
        $auditUser['parentPhone'] = I('post.parentphone');
        $auditUser['createdTime']=time();
        
        $photo=I('post.photo');
        
        $auditUser['picture']=$this->upload($photo);

        $user = D('User');
        $result = $user->register($auditUser);
        echo "已经申请，请耐心等候审核";
        return $result;
    }

    public function upload($photo){
    $upload = new \Think\Upload();
    $upload->maxSize   =     3145728 ;
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
    $upload->rootPath  =     '/var/www/Manage/Public/'; 
    $upload->savePath  =    '/pic/'; 
    $info   =   $upload->upload($photo);
    $photoinfo=$info['photo']['savepath'].$info['photo']['savename'];

    if(!$info) {
        $this->error($upload->getError());
    }else{
        $this->success('上传成功！');
        return $photoinfo;
    }
}
}