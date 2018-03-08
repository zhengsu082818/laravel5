<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{  

    // 编写验证规则
    protected $rules =[
        'email' => 'required|email|unique:users',
        "name"=>'required|max:255',
        'phone'=>'required|numeric|digits:11',
        'password' => 'required|confirmed|min:6|max:16',
    ];
    //编写错误信息
    protected $messages =[
        "name.required"=>'请输入用户名',
        "name.max"=>'用户名过长',
        "email.required"=>'请填写邮箱地址',
        "email.email"=>'请填写正确的邮箱地址',
        "email.unique"=>'邮箱地址已存在',
        "password.required"=>'请输入登录密码',
        "password.confirmed"=>'两次密码输入不一致',
        "password.min"=>'密码长度过短',
        "password.max"=>'密码长度过长',
        "phone.required"=>'请输入手机号码',
        "phone.numeric"=>'手机号码格式不正确',
        "phone.digits"=>'手机号码格式不正确',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 查询加载用户列表
     */
    public function index()
    {
        $stus = User::paginate(5);
        //dd($stus);
        $count =count(User::all());
        return view('admin.huiyuan.list',['stus' => $stus,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * //加载后台用户添加页面
     */
    public function create()
    {
        return view('admin.huiyuan.useradd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * //执行添加后台用户
     */
    public function store(Request $request)
    {
        //验证信息 
         $this->validate($request,$this->rules,$this->messages);
         // 接收除_token字段的值
          $input  = $request->except('password_confirmation');//
         
          // dd($input);
          // //添加数据
          // remember_token
            $adda= User::insert([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'ado' => $input['ado'],
            'remember_token' => $input['_token'],
            'password' => bcrypt($input['password']),

        ]);
          //判断是否添加成功
            if ($adda) {
                    flash()->overlay('添加成功', '1');
                         return redirect('admin/list');

                }else{
                    flash()->overlay('添加失败', '5');
                         return redirect('admin/create');
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 加载后台用户修改页面
     */
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.huiyuan.edit',['user' => $user]);

        // dd($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        //验证规则
        $this->validate($request,[
                "name"=>'required|max:255',
                'phone'=>'required|numeric|digits:11',
                'password' => 'required|confirmed|min:6|max:16',
        ],$this->messages);
        //接收除_token，password_confirmation字段的数据
        $input=$request->except('_token','password_confirmation');
        // dd($input);
        //加密密码
        $input['password']=bcrypt($input['password']);
       
        //执行修改
        $updatee =User::where('id',$id)
                ->update($input);
                // dd(updatee);
        //判断是否修改成功
        if ($updatee) {
            flash()->overlay('修改成功', '1');
                         return redirect('admin/list');
        }else{
             flash()->overlay('修改失败', '5');
                         return redirect('admin/list');        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //执行删除
       $dele =User::where('id',$id)->delete();
        //判断是否删除成功
       if ($dele) {
                     flash()->overlay('删除成功', '1');
                         return redirect('admin/list');
        }else{
            flash()->overlay('删除失败', '5');
                         return redirect('admin/list');
        }

    }
}