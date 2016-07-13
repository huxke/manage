<?php

namespace Home\Model;
use Think\Model;

class CashModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getAllBonus($phone)
	{
		$map['phone']=$phone;
		$allbonus=$this->where($map)->field('totalBonus')->find();

		return $allbonus;
	}


	public function getWithdrawals($phone)
	{
		$map['phone']=$phone;
		$withdrawals=$this->where($map)->field('withdrawals')->find();

		return $withdrawals;
	}
}