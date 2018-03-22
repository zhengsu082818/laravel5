<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homeuser extends Model
{
    protected $table = 'homeusers';
    protected $fillable = ['stated'];
    public function getStatedAttribute($value){
        $stated = ['1'=>'启用','0'=>'禁用'];
        return $stated[$value];
    }
    public $timestamps = true;
    // public function getSexAttribute($value){
    //     $sex = ['m'=>'男','w'=>'女'];
    //     return $sex[$value];
    // }
     public function comment()
    {
        return $this->hasMany('App\Models\Comment','id');
    }
}
