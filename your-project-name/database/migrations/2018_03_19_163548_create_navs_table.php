<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if (!Schema::hasTable('nav')) {
         Schema::create('nav', function(Blueprint $table) {
            $table->increments('id');//导航表id
            $table->char('name');//导航名
            $table->enum('static',['启用','禁用']);//导航状态
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
       Schema::drop('nav');
    }
}
