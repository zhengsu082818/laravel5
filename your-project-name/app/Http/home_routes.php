<?php
//加载前台首页
Route::get('/', 'Home\IndexsController@index');

// 加载商品列表页
Route::get('home/prolistindex', 'Home\ProlistsController@index');

// 加载加入购物车页面
Route::get('home/shopgoodindex', 'Home\ShopgoodsController@index');
