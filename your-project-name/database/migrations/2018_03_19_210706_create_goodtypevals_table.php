<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodtypevalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('goodtypevals')) {
            Schema::create('goodtypevals', function (Blueprint $table) {
                $table->increments('id');
                $table->tinyInteger('yiji_id');
                $table->tinyInteger('erji_id');
                $table->tinyInteger('sanji_id');
                $table->tinyInteger('gt_id');
                $table->string('gtv_name',255);//商品属性名
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
        Schema::drop('goodtypevals');
    }
}
