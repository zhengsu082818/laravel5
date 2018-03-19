<?php



//加载前台首页
Route::get('/', 'Home\IndexsController@index');

// 加载商品列表页
Route::get('home/prolistindex', 'Home\ProlistsController@index');

// 加载加入购物车页面
Route::get('home/shopgoodindex', 'Home\ShopgoodsController@index');

//加载个人中心-收货地址页面
Route::get('home/personal', 'Home\PersonalsController@index');
//执行新增收货地址
Route::post('home/personal/store', 'Home\PersonalsController@store');
Route::get('home/personal/destroy/{id}', 'Home\PersonalsController@destroy');

