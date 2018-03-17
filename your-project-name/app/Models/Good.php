<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
	//定义商品属于什么哪个类名  多对一
    public function navig()
    {
        return $this->belongsTo('App\Models\Navig','nav_id','id');
    }

    //定义商品属于哪个属性值 多对一
    public function goodtypevals()
    {
        return $this->belongsTo('App\Models\Goodtypeval','gtv_id','id');
    }

    
   
}
