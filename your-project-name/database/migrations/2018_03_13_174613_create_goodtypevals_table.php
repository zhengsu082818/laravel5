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
        Schema::create('goodtypevals', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('gtv_id');
            $table->string('gtv_name',32);
        });
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
