<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    if (!Schema::hasTable('navigs')) {
      Schema::create('navigs', function(Blueprint $table) {
            $table->increments('id');//无限分类三级分类id
            $table->integer('parent_id')->nullable()->index();//等级类别名
            $table->integer('lft')->nullable()->index();
            $table->integer('rgt')->nullable()->index();
            $table->integer('depth')->nullable();//嵌套等级
            $table->char('name');//类别名
            $table->string('url',255);//图片
            $table->string('img',255);
            $table->timestamps();
          });
    }
      
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('navigs');
  }

}
