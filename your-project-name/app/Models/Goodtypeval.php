<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goodtypeval extends Model
{
	protected $fillable = ['yiji_id','erji_id','sanji_id','gt_id','gtv_name'];
	
    //定义属性值所对应属性名 多对一
    public function goodtypes()
    {
        return $this->belongsTo('App\Models\Goodtype','gt_id','id');
    }

    
}
