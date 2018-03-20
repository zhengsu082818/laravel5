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
            $table->increments('id');
            $table->integer('parent_id')->nullable()->index();
            $table->integer('lft')->nullable()->index();
            $table->integer('rgt')->nullable()->index();
            $table->integer('depth')->nullable();
            $table->char('name');
            $table->string('url',255);
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
