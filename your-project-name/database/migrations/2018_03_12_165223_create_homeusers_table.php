<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if (!Schema::hasTable('homeusers')) {
            Schema::create('homeusers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('img',255);
                $table->string('username',32);
                $table->string('name',32);
                $table->enum('sex', ['w', 'm'])->default('w');
                $table->string('password', 60);
                $table->string('zfpassword', 60);
                $table->string('address',255);
                $table->tinyInteger('stated')->default('1');
                $table->decimal('phone',11);
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
        Schema::drop('homeusers');
    }
}
