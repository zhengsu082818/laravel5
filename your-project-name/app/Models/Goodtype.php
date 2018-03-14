<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goodtype extends Model
{
	//定义属性名所对应的属性值 一对多
    public function goodtypeval()
    {
    	return $this->hasMany('App\Models\Goodtypeval','gtt_id','gt_id');
        
    }

    
}
