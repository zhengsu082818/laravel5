<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goodtypeval extends Model
{
	protected $fillable = ['gtv_name','gtt_id'];
    //定义属性值所对应属性名 多对一
    public function goodtypes()
    {
        return $this->belongsTo('App\Models\Goodtype','gtt_id','id');
    }
}
