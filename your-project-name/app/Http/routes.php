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
    return view('welcome');
});
//登录路由
Route::get('auth/login', 'Auth\AuthController@getLogin');//加载登录
Route::post('auth/login', 'Auth\AuthController@postLogin');//执行登录
Route::get('auth/logout', 'Auth\AuthController@getLogout');//退出登录

// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');//加载注册
Route::post('auth/register', 'Auth\AuthController@postRegister');//执行注册
//认证成功后重定向页面
Route::get('/admin',function(){
	return view('admin.index');
})->middleware('auth');//admin/useradd
//加载后台主页桌面
Route::get('admin/index', 'Admin\IndexController@Index');
Route::get('admin/list', 'Admin\MemberController@Index');
//加载后台用户添加页面
Route::get('admin/create', 'Admin\MemberController@create');
//加载后台用户修改页面
Route::get('admin/edit/{id}', 'Admin\MemberController@edit');
//执行后台用户删除
Route::get('admin/destroy/{id}', 'Admin\MemberController@destroy');
//执行添加后台用户
Route::post('admin/store', 'Admin\MemberController@store');
//执行后台用户修改
Route::post('admin/update/{id}', 'Admin\MemberController@update');
//加载导航栏分类列表页面
Route::get('navigation/index', 'Admin\NavigationController@Index');
//加载类别修改页面
Route::get('navigation/edit/{id}', 'Admin\NavigationController@edit');
//执行类别修改
Route::post('navigation/update/{id}','Admin\NavigationController@update');
//加载导航栏分类列表页面
Route::get('navig/index', 'Admin\NavigController@Index');
//加载分类列表添加页面
Route::post('navig/store','Admin\NavigController@store');
Route::get('navig/create', 'Admin\NavigController@create');
//执行类别修改


// 轮播管理
Route::get('banner','Admin\BannerController@index');//查看
Route::get('banner/create','Admin\BannerController@create');
Route::post('banner/uplode','Admin\BannerController@uplode');
Route::post('banner/store','Admin\BannerController@store');