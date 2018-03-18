<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.index');
});

// 加载后台主页面
Route::get('/admin/welcome', function(){
	return view('admin.zhuye');
});

//登录路由
Route::get('auth/login', 'Auth\AuthController@getLogin');//加载登录
Route::post('auth/login', 'Auth\AuthController@postLogin');//执行登录
Route::get('auth/logout', 'Auth\AuthController@getLogout');//退出登录


//认证成功后重定向页面
Route::get('/admin',function(){
	return view('admin.index');
})->middleware('auth');



//加载后台用户页面
Route::get('admin/list', 'Admin\AdminuserController@Index');
//加载后台用户添加页面
Route::get('admin/create', 'Admin\AdminuserController@create');
//加载后台用户修改页面
Route::get('admin/edit/{id}', 'Admin\AdminuserController@edit');
//执行后台用户删除
Route::get('admin/destroy/{id}', 'Admin\AdminuserController@destroy');
//执行添加后台用户
Route::post('admin/store', 'Admin\AdminuserController@store');
//执行后台用户修改
Route::post('admin/update/{id}', 'Admin\AdminuserController@update');

//加载前台会员页面
Route::get('admin/homeindex', 'Admin\HomeuserController@Index');
//加载前台会员修改页面
Route::get('admin/homeedit/{id}', 'Admin\HomeuserController@edit');
//执行前台会员删除
Route::get('admin/homedestroy/{id}', 'Admin\HomeuserController@destroy');
//执行前台会员修改
Route::post('admin/homeupdate/{id}', 'Admin\HomeuserController@update');


//加载侧边导航页面
Route::get('navig/index', 'Admin\NavigController@Index');
//加载类列表添加页面
Route::get('navig/create', 'Admin\NavigController@create');
//执行添加
Route::post('navig/store','Admin\NavigController@store');
//加载类别修改页面
Route::get('navig/edit/{id}', 'Admin\NavigController@edit');
//执行类别修改
Route::post('navig/update/{id}', 'Admin\NavigController@update');
//执行类别删除
Route::get('navig/destroy/{id}', 'Admin\NavigController@destroy');
//执行图片上传
Route::post('navig/tupiana','Admin\NavigController@tupiana');

//加载分类列表
Route::get('navig/index/id/{id}', 'Admin\NavigController@Index');

//加载首页轮播页面
Route::get('admin/bannerindex', 'Admin\BannersController@index');
//加载首页轮播添加页面
Route::get('admin/bannercreate', 'Admin\BannersController@create');
//加载首页轮播修改页面
Route::get('admin/banneredit/{id}', 'Admin\BannersController@edit');
//执行首页轮播删除
Route::get('admin/bannerdestroy/{id}', 'Admin\BannersController@destroy');
//执行图片轮播添加
Route::post('admin/bannerstore', 'Admin\BannersController@store');
//执行图片轮播修改
Route::post('admin/bannerupdate/{id}', 'Admin\BannersController@update');
// ajax图片上传
Route::post('admin/banneruplode', 'Admin\BannersController@uplode');

//加载个人收货地址页面
Route::get('admin/addressindex', 'Home\AddresController@index');

// 加载商品评论页面
Route::get('admin/comment','Admin\Commentcontroller@index');
// 添加数据
Route::get('admin/commentstore','Admin\Commentcontroller@store');
// 加载回复页面
Route::get('admin/commentedit/{id}','Admin\Commentcontroller@show');
Route::post('admin/commentupdate/{id}','Admin\Commentcontroller@edit');



//加载登录页面
Route::get('authindex/login','Authindex\AuthindexController@store');
// 登录成功
Route::post('authindex/index','Authindex\AuthindexController@create');
// 点击退出跳转
Route::get('authindex/out','Authindex\AuthindexController@show');
// 加载注册页面
Route::get('authindex/register','Authindex\AuthindexController@edit');
Route::post('authindex/update','Authindex\AuthindexController@update');
// 找回密码路由
Route::get('authindex/password','Authindex\AuthindexController@destroy');