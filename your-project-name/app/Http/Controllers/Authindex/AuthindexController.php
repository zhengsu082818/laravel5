<?php

namespace App\Http\Controllers\Authindex;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Homeuser;
use Illuminate\Support\Facades\Session;
use Route;
class AuthindexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
        // 编写验证规则
            $this->validate($request, [
                'phone' => 'required', 'password' => 'required','captcha'=>'required|captcha'
            ],[
              'phone.required'=>'用户名必填', 
              'password.required'=>'密码必填',
              'captcha.required'=>'验证码必填',
            ]);
        // 获取表单提交账号密码
            $a = ['phone'=>$request->phone,'password'=>$request->password];
            // dd($a);
        // 查案数据库和表单账号
            $b = Homeuser::where('phone',$a['phone'])->first();
            if(!$a['phone'] = $b){
                 flash()->overlay('账号不存在','5');
                 return back();
            }
            $password = md5($a['password']);
        // 查看数据库和表单提交密码

            $c = Homeuser::where('password',$password)->first();   

            if(!$a['password'] = $c){
                 flash()->overlay('密码不正确','5');
                 return back();
            }
        // 判断账号状态
            $d = Homeuser::get(['stated'])->toArray();
            foreach($d as $v){
                if($v['stated'] == '禁用'){
                    flash()->overlay('账号被禁用','5');
                    return back();
                }
            }
        // 存入session
           $request->session()->put('phone',$request->phone); 
           // dd(session('phone'));
           $phone =session('phone');//获取当前用户的登录号
         // dd($phone);
            $personals =Homeuser::where('phone',$phone)->firstOrFail()->toArray();//
            // dd($personals);
            //存入session
           $request->session()->put($personals); 
            // dd(session('username'));

        // 加载模板文件

           return redirect('/');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // 点击登录加载登录页面
        return view('home.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // 删除session
       $request->session()->forget('phone');
       // 点击退出跳转登录页面
       return view('home.login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // 点击注册跳转注册页面
        return view('home.register');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    // 接受表单数据
        $input = $request->only(['phone', 'password','captcha']);
      
       
    // 编写验证规则
        $this->validate($request, [
            'phone' => 'required|regex:/^1[34578][0-9]{9}$/|max:11|unique:homeusers',
            'password' => 'required|confirmed|min:6|',
            'captcha'=>'required|captcha',
        ],[
        "phone.required"=>'请填写手机号',
        "phone.max"=>'手机号过长',
        "phone.regex"=>'手机号格式不正确',
        "phone.unique"=>'手机号已注册',
        "password.required"=>'请填写密码',
        "password.confirmed"=>'两次密码不一样',
        "password.min"=>'最少6位密码',
        "captcha.required"=>'请填写验证码',
        "captcha.captcha"=>"验证码错误",
    ]);
     // 验证规则完成添加数据到数据库
        $home = new Homeuser;
        $home->phone = $request->phone;
        $home->password = md5($request->password);
        $home->save();
    // 添加到数据库跳转到登录页面
        return redirect('authindex/login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return view('home.password');
    }

    public function login()
    {
        return view('home.login');
    }
}
