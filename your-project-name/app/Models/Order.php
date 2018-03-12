<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * 与模型关联的数据表。
     *
     * @var string
     */
    protected $table = 'commodity';

    /**
     * 获取与指定用户互相关联的电话纪录。
     */
	public function Orderformcount()
	{
	    return $this->hasMany('App\Models\Orderformcount');
	}

	/**
     * 获取与指定用户互相关联的电话纪录。
     */
	public function Homeuser()
	{
	    return $this->hasMany('App\Models\Homeuser');
	}
}
