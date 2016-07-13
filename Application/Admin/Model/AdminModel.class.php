<?php

namespace Admin\Model;
use Think\Model;

class AdminModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function adminCheckLogin($phone,$password)
	{
		$user['phone']=$phone;
		$user['password']=$password;

		$result=$this->where($user)->select();

		return $result;
	}

	

}
