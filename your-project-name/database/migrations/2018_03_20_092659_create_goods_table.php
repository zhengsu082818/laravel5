<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('goods')) {
            Schema::create('goods', function (Blueprint $table) {
                $table->increments('id');//商品编号
                $table->tinyInteger('djid');//一级分类编号
                $table->tinyInteger('cjid');//二级分类编号
                $table->tinyInteger('sj_id');//无限分类三级类别id
                $table->tinyInteger('gt_id');//商品属性名
                $table->tinyInteger('gtv_id');//属性值id
                $table->string('title',255);//商品标题
                $table->string('img',255);//商品图片
                $table->decimal('price','11');//商品价格
                $table->tinyInteger('nums');//商品库存数量
                $table->text('content');//商品详情
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
        Schema::drop('goods');
    }
}
