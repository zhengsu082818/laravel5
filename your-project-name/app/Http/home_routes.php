<?php



//加载前台首页
Route::get('/', 'Home\IndexsController@index');

// 加载商品列表页
Route::get('home/prolistindex/{id}', 'Home\ProlistsController@index');
//加载搜索属性值页面
Route::get('home/prolistshow/{id}/{name}', 'Home\ProlistsController@show');
//加载搜索商品页面
Route::get('home/prosearch', 'Home\ProlistsController@store');


// 加载商品详情页面
Route::get('home/shopgoodindex/{id}', 'Home\ShopgoodsController@index');



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


//购物车前台功能实现
Route::resource('home/shopping','Home\ShoppingController');
//支付验证页面and订单遍历
Route::resource('home/orderform','Home\OrderformController');
//加载订单转跳商品详情带id
Route::resource('home/goodsinfo','Home\GoodsinfoController');
