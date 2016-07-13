<?php

namespace Home\Model;
use Think\Model;

class UserModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function checkLogin($phone,$password)
	{
		$user['phone']=$phone;
		$user['password']=$password;

		$result=$this->where($user)->select();

		session('loginname', $user['phone']);

                          return $result;
	}

	public function register($user)
	{
		$result=$this->add($user);
		return $result;
	}

	public function getSubordinate($phone)
	{
		$user['parentPhone']=$phone;
		// var_dump($user);
		$result=$this->where($user)->select();
		// var_dump($result);

		return $result;
	}
}