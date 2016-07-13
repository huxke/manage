<?php

namespace Home\Model;
use Think\Model;

class CashDetailModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function apply($phone,$parentPhone)
	{
		$map['phone']=$phone;
		$map['parentPhone']=$parentPhone;

		$data['status']='audit';

		$result=$this->where($map)->data($data)->save();

		return $result;
	}
}