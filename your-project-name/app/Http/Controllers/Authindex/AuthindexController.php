<?php

namespace App\Http\Controllers\Authindex;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Homeuser;
use Illuminate\Support\Facades\Session;
class AuthindexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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
        // 查案数据库和表单账号
            $b = Homeuser::where('phone',$a['phone'])->first();
            if(!$a['phone'] = $b){
                 flash()->overlay('账号不存在','5');
                 return back();
            }
        // 查看数据库和表单提交密码
            $c = Homeuser::where('password',$a['password'])->first();  
        // dd($c); 
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
        // 加载模板文件
            return view('home.index');
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
        $input = $request->all();
        // dd($input);
    // 编写验证规则
        $this->validate($request, [
            'phone' => 'required|regex:/^1[34578][0-9]{9}$/|max:11',
            'password' => 'required|confirmed|min:6|',
            'captcha'=>'required|captcha',
        ],[
        "phone.required"=>'请填写手机号',
        "name.max"=>'手机号过长',
        "password.required"=>'请填写密码',
        "password.confirmed"=>'两次密码不一样',
        "password.min"=>'最少6位密码',
        "captcha.required"=>'请填写验证码',
        "captcha.captcha"=>"验证码错误",
    ]);
     // 验证规则完成添加数据到数据库
        $home = new Homeuser;
        $home->phone = $request->phone;
        $home->password = bcrypt($request->password);
        $home->save();
    // 添加到数据库跳转到登录页面
        return view('home.login');
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
}
