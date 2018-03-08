<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.zhuye');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             // dd($request->all());
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
                     return redirect('admin/list')->with('root', '添加成功');
                }else{
                     return redirect('admin/create')->with('root', '添加失败');
                }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
