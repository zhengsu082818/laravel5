<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGtNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('gt_navs')) {
            Schema::create('gt_navs', function (Blueprint $table) {
                $table->tinyInteger('id');//无限分类三级分类id
                $table->tinyInteger('gt_id');//商品属性id
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
        Schema::drop('gt_navs');
    }
}
