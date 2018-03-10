<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('banner')) {
            Schema::create('banner', function (Blueprint $table) {
                $table->increments('id');
                $table->string('img',32);
                $table->string('url',255);
                $table->tinyInteger('static');
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
         Schema::drop('shang');
    }
}
