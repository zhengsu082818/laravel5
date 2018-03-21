<?php



//加载前台首页
Route::get('/', 'Home\IndexsController@index');

// 加载商品列表页
Route::get('home/prolistindex', 'Home\ProlistsController@index');

// 加载加入商品详情页面
Route::get('home/shopgoodindex', 'Home\ShopgoodsController@index');




//加载个人中心-收货地址页面
Route::get('home/personal', 'Home\PersonalsController@index');
//执行新增收货地址
Route::post('home/personal/store', 'Home\PersonalsController@store');
//执行删除收货地址
Route::get('home/personal/destroy/{id}', 'Home\PersonalsController@destroy');
//加载修改收货地址
Route::get('home/personal/edit/{id}', 'Home\PersonalsController@edit');


//加载完善个人信息页面number
Route::get('home/home/number', 'Admin\HomeuserController@create');
//修改头像
Route::post('home/home/number/tupiana','Admin\HomeuserController@tupiana');
//执行修改个人信息页面
Route::post('home/home/store/{id}', 'Admin\HomeuserController@store');

