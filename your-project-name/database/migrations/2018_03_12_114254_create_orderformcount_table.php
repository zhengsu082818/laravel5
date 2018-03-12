<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderformcountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // 每个用户订单数量表
        if (!Schema::hasTable('orderformcount')) {
            Schema::create('orderformcount', function (Blueprint $table) {
                $table->increments('id');
                // 用户id
                $table->integer('uid');
                // 订单id
                $table->integer('cid');
                // 订单数量
                $table->integer('num');
                
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
        Schema::drop('orderformcount');
    }
}
