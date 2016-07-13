<?php

namespace Admin\Model;
use Think\Model;

class UserModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAuditUser()
	{
		$map['isaudit']  = 'no';
		$user=$this->where($map)->select();
		return $user;
	}

	public function audit($phone,$status)
	{
		$map['auditstatus']=$status;
		$map['phone']=$phone;
		$user=$this->where($map)->save();

		return $user;
	}

	public function getParentPhone($parentPhone)
	{
		$map['parentPhone']=$parentPhone;
		$user=$this->where($map)->filed('phone')->find();

		return $user;
	}
}