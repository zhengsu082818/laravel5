<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('personals')) {
            Schema::create('personals', function (Blueprint $table) {
                $table->increments('id');
                $table->string('pid');
                $table->string('name',255);
                $table->string('shdz',255);
                $table->string('phone',255);

                $table->enum('static',['启用','禁用']);
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
        Schema::drop('personals');
    }
}
