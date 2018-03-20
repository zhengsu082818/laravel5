<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         // 购物车数据表
        if (!Schema::hasTable('shopping')) {
            Schema::create('shopping', function (Blueprint $table) {
                $table->increments('id');
                // 缩略图
                $table->string('img',255);
                // 产品名
                $table->string('product');
                // 售价
                $table->integer('price');
                // 数量
                $table->integer('num');
                // 总计
                $table->integer('aotal');
                // 用户id
                $table->integer('uid');
                // 商品id
                $table->integer('gid');
                // 状态   
                $table->string('state');
                
                
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
        Schema::drop('shopping');
    }
}
