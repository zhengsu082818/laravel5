<?php
namespace App\Http\Controllers\Authindex;

use Illuminate\Http\Request;
use  App\Jobs\SendSMS;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use validate;
use App\Models\Homeuser;
// session_start();
class PasswordController extends Controller
{
   public function index(){
   	 // 加载找回密码页面
   	 return view('home.password');
   }

   public function code(Request $request){
     $sms = new SendSMS();
   	 return $sms->send();
   }

   public function Verification(Request $request){
   	// 接受表单数据
   	  $value = $request->all();
   	// 取出session值
   	  $session = session('mobile_code');
   	  $mobile = session('mobile');
    // 查询session手机号和数据库手机号是否一致
   	  $home = Homeuser::where('phone',$mobile)->first();
   	// 判断验证码和手机号是否正确
   	  if($value['captcha'] == $session && $home!== null){
   	  	// 验证成功跳到重置密码页面
   	  	return view('home.resetpassword');
   	  }else{
   	  	flash()->overlay('验证码错误','5');
   	  	return back();
   	  }
   }

   public function reset(Request $request){
   	// 接受重置密码表单数据
   	  $input = $request->all();
    // 重置密码规则
   	  $this->validate($request, [
            'password' => 'required|confirmed|min:6|',
            'captcha'=>'required|captcha',
        ],[
	        "password.required"=>'请填写密码',
	        "password.confirmed"=>'两次密码不一样',
	        "password.min"=>'最少6位密码',
	        "captcha.required"=>'请填写验证码',
	        "captcha.captcha"=>"验证码错误",
       ]);
   	// 取出session手机号
   	    $mobile = session('mobile');
   	// 修改密码
   	    $homes = Homeuser::where('phone',$mobile)->update(['password' => md5($request->password)]);
   	// 重定向至登录页面
   	    return redirect('authindex/login');
   }

}

