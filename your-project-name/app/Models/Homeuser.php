<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homeuser extends Model
{
    protected $fillable = ['stated'];

    public function getStatedAttribute($value){
        $stated = ['1'=>'启用','0'=>'禁用'];
        return $stated[$value];
    }
    public $timestamps = true;
}
