<?php

namespace Admin\Model;
use Think\Model;

class CashDetailModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function completePromotion($phone,$parentPhone)
	{
		$result=$this->add($phone,$parentPhone);
		return $result;

	}

	public function dealWithdrawals($phone,$parentPhone,$status)
	{
		$map['phone']=$phone;
		$map['parentPhone']=$parentPhone;

		if($status=='success')
		{
			$data['isCash']='yes';
			$data['success']='success';
			$result=$this->where($map)->data($data)->save();

			return $result;
		}

		if($status=='fail')
		{
			$data['isCash']='no';
			$data['success']='fail';
			$result=$this->where($map)->data($data)->save();

			return $result;
		}

		// $result=$this->where($map)
	}

	
}