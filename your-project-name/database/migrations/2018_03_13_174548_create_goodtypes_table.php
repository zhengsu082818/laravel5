<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('goodtypes')) {
            Schema::create('goodtypes', function (Blueprint $table) {
                $table->increments('id');
                $table->tinyInteger('gt_id');//商品属性id
                $table->string('gt_name',255);//商品属性名
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
        Schema::drop('goodtypes');
    }
}
