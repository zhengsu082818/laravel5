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
                $table->Integer('one_id');
                $table->Integer('two_id');
                $table->Integer('nav_id');
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
