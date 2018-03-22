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


Route::get('/', function (){
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
// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
// 密码重置链接的路由...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
// 密码重置的路由...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
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

// 加载导航
Route::get('admin/navindex','Admin\NavController@index');
// 加载导航添加页面
Route::get('admin/navcreate','Admin\NavController@create');
// 导航添加
Route::post('admin/navstore','Admin\NavController@store');
// 删除导航
Route::get('admin/navdestroy/{id}','Admin\NavController@destroy');
// 加载修改页面
Route::get('admin/navedit/{id}','Admin\NavController@edit');
// 执行修改
Route::post('admin/navupdate/{id}','Admin\NavController@update');

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
// 加载注册验证规则
Route::post('authindex/update','Authindex\AuthindexController@update');
// 注册成功跳转登录
Route::get('authindex/success','Authindex\AuthindexController@login');
// 找回密码路由
Route::get('authindex/password','Authindex\PasswordController@index');
// 加载验证码
Route::post('password/code','Authindex\PasswordController@code');
// 判断验证码
Route::get('password/yanz','Authindex\PasswordController@Verification');
// 加载重置密码页面
Route::get('password/reset','Authindex\PasswordController@reset');
// 加载主页
Route::get('authindex/redirect','Authindex\AuthindexController@index');
// 加载商品属性
Route::get('admin/goodtypeindex', 'Admin\GoodtypesController@index');
//加载商品属性添加页
Route::get('admin/goodtypecreate', 'Admin\GoodtypesController@create');
//执行添加
Route::post('admin/goodtypestore', 'Admin\GoodtypesController@store');
//加载商品属性修改页面
Route::get('admin/goodtypeedit/{id}', 'Admin\GoodtypesController@edit');
//执行修改
Route::post('admin/goodtypeupdate/{id}', 'Admin\GoodtypesController@update');
//执行删除
Route::get('admin/goodtypedestroy/{id}', 'Admin\GoodtypesController@destroy');
//ajax三级联动1
Route::get('admin/goodtypeSjld1','Admin\GoodtypesController@goodtypeSjld1');
//ajax三级联动2
Route::get('admin/goodtypeSjld2','Admin\GoodtypesController@goodtypeSjld2');


//加载商品属性值
Route::get('admin/goodtypevalindex', 'Admin\GoodtypevalsController@index');
//添加商品属性值
Route::get('admin/goodtypevalcreate', 'Admin\GoodtypevalsController@create');
//执行添加
Route::post('admin/goodtypevalstore', 'Admin\GoodtypevalsController@store');
//修改商品属性值
Route::get('admin/goodtypevaledit/{id}', 'Admin\GoodtypevalsController@edit');
//执行修改
Route::post('admin/goodtypevalupdate/{id}', 'Admin\GoodtypevalsController@update');
//删除属性值
Route::get('admin/goodtypevaldestroy/{id}', 'Admin\GoodtypevalsController@destroy');
//ajax四级联动1
Route::get('admin/goodtypevalfour','Admin\GoodtypevalsController@goodtypevalfour');
//ajax四级联动2
Route::get('admin/goodtypevalfour2','Admin\GoodtypevalsController@goodtypevalfour2');
//ajax四级联动3
Route::get('admin/goodtypevalfour3','Admin\GoodtypevalsController@goodtypevalfour3');


//加载职位管理列表
Route::get('admin/role', 'Admin\RolesController@index');
//加载职位添加页面
Route::get('admin/role/create', 'Admin\RolesController@create');
//执行职位添加页面
Route::post('admin/role/store', 'Admin\RolesController@store');
//加载职位修改页面
Route::get('admin/role/edit/{id}', 'Admin\RolesController@edit');
//执行职位修改页面
Route::post('admin/role/update/{id}', 'Admin\RolesController@update');
//删除职位
Route::get('admin/role/destroy/{id}', 'Admin\RolesController@destroy');

//加载权限管理列表
Route::get('admin/permission', 'Admin\PermissionsController@index');
//加载权限添加页面
Route::get('admin/permission/create', 'Admin\PermissionsController@create');
//执行添加页面
Route::post('admin/permission/store', 'Admin\PermissionsController@store');
//加载权限修改页面
Route::get('admin/permission/edit/{id}', 'Admin\PermissionsController@edit');
//执行权限修改
Route::post('admin/permission/update/{id}', 'Admin\PermissionsController@update');
//删除权限
Route::get('admin/permission/destroy/{id}', 'Admin\PermissionsController@destroy');



//加载商品属性值添加页
Route::get('admin/goodtypevalcreate', 'Admin\GoodtypevalsController@create');
//执行添加
Route::post('admin/goodtypevalstore', 'Admin\GoodtypevalsController@store');
//加载商品属性值修改页面
Route::get('admin/goodtypevaledit/{id}', 'Admin\GoodtypevalsController@edit');
//执行修改
Route::post('admin/goodtypevalupdate/{id}', 'Admin\GoodtypevalsController@update');
//执行删除
Route::get('admin/goodtypevaldestroy/{id}', 'Admin\GoodtypevalsController@destroy');



	
// 加载商品列表
Route::get('admin/goodindex', 'Admin\GoodsController@index');
//加载商品添加页
Route::get('admin/goodcreate', 'Admin\GoodsController@create');
//执行添加
Route::post('admin/goodstore', 'Admin\GoodsController@store');
//加载商品属性值修改页面
Route::get('admin/goodedit/{id}', 'Admin\GoodsController@edit');
//执行修改
Route::post('admin/goodupdate/{id}', 'Admin\GoodsController@update');
//执行删除
Route::get('admin/gooddestroy/{id}', 'Admin\GoodsController@destroy');
// ajax图片上传
Route::post('admin/gooduplode', 'Admin\GoodsController@uplode');
//ajax五级联动1
Route::get('admin/goodwjld','Admin\GoodsController@goodwjld');
//ajax五级联动2
Route::get('admin/goodwjld2','Admin\GoodsController@goodwjld2');
//ajax五级联动3
Route::get('admin/goodwjld3','Admin\GoodsController@goodwjld3');
//ajax五级联动4
Route::get('admin/goodwjld4','Admin\GoodsController@goodwjld4');

//加载用户中心收货地址主页
Route::get('admin/personalindex', 'Admin\PersonalsController@index');

