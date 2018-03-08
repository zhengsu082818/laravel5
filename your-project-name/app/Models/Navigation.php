<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
     //指定与模型关联的数据表名称
    protected $table = 'navigations';
    // 指定数据表的id
    protected $primaryKey='id';
    //时间戳自动写入（默认是开启状态）
    public $timestamps = true;
    //批量赋值设置
    protected $fillable = ['name','url','sid']; 
}
