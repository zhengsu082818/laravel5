<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('goods')) {
            Schema::create('goods', function (Blueprint $table) {
                $table->increments('id');//商品编号
                $table->tinyInteger('nav_id');//无限分类三级类别id
                $table->tinyInteger('gt_id');//商品属性名
                $table->tinyInteger('gtv_id');//属性值id
                $table->string('title',255);//商品标题
                $table->string('img',255);//商品图片
                $table->tinyInteger('price');//商品价格
                $table->tinyInteger('nums');//商品库存数量
                $table->string('content');//商品详情
                $table->timestamps();
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods');
    }
}
