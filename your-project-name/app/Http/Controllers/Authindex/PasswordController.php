<?php

namespace App\Http\Controllers\Authindex;

use Illuminate\Http\Request;
use  App\Jobs\SendSMS;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class PasswordController extends Controller
{
   public function index(){
   	 // 加载找回密码页面
   	 return view('home.password');
   	// $sms = new SendSMS();
   	// return $sms->send();
   }

}

