<?php

namespace Admin\Model;
use Think\Model;

class CashModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function basicsBonus($phone)
	{
		$map['phone']=$phone;
		$cash=$this->where($map)->setInc('totalBonus',30);
	

	public function completePromotion($phone)
	{
		$map['phone']=$phone;
		$cash=$this->where($map)->setInc('spreadNum',1);
		$cash=$this->where($map)->setInc('totalBonus',50);
	}

	public function dealWithdrawals($phone,$childPhone)
	{
		$map['phone']=$phone;
		$map['childPhone']=$childPhone;
	}

	
}