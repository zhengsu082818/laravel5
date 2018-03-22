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
                $table->int('yiji_id');
                $table->int('erji_id');
                $table->int('sanji_id');
                $table->int('gt_id');
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
