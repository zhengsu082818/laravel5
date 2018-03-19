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
                 $table->tinyInteger('lei_id');
                $table->tinyInteger('gtt_id');
                $table->string('gtv_name',32);
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
