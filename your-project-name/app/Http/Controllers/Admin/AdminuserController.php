<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminuserController extends Controller
{  

    // 编写验证规则
    protected $rules =[
        'email' => 'required|email|unique:users',
        "name"=>'required|max:255',
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
        "password.max"=>'密码长度过长'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 查询加载用户列表
     */
    public function index(Request $request)
    {
        $where=[];
        $keywords = $request->name;
        if ($keywords != '') {
            $stus = User::where('name','like',"%$keywords%")->orderBy('id','desc')->paginate(env('PAGE_SIZE',5));
            $count = User::where('name','like',"%$keywords%")->count();

        }else{
            $stus = User::orderBy('id','desc')->paginate(env('PAGE_SIZE',5));
            $count = User::count();
        }
        return view('admin.adminuser.list',['stus'=>$stus,'count'=>$count,'keywords'=>$keywords]);

        // $stus = User::paginate(5);
        // //dd($stus);
        // $count =count(User::all());
        // return view('admin.huiyuan.list',['stus' => $stus,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * //加载后台用户添加页面
     */
    public function create()
    {
        return view('admin.adminuser.useradd');
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
        $input  = $request->except('password_confirmation');
        $add= User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'stated' => $input['stated'],
            'password' => bcrypt($input['password']),
        ]);
        //判断是否添加成功
        if ($add) {
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
        $user = User::findOrFail($id);
        return view('admin.adminuser.edit',['user' => $user]);
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
        $input = $request->except('_token');
        $update = User::where('id',$id)->update($input);
        //判断是否修改成功
        if($update) {
            flash()->overlay('修改成功', '1');
            return redirect('admin/list');
        }else{
            flash()->overlay('修改失败', '5');
            return redirect('admin/list');       
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dele =User::destroy($id);
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