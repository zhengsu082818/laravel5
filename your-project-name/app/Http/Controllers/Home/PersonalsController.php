<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonalsController extends Controller
{
    protected $rules =[
        "cho_Province"=>'required',
        "cho_City"=>'required',
        "cho_Area"=>'required',
        "shdz"=>'required|',



    ];
    //编写错误信息
    protected $messages =[
        "name.required"=>'类别名必填',
        "name.max"=>'类别名过长',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personals =Personal::all();
        return view('home.good_receipt',['personals'=>$personals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input());
        //接收除_token字段的值
        $input =$request->except('_token');
        // dd($input);
        //给数据库赋值
        $personals =new Personal;
        $personals->name =$input['name'];
        $personals->phone =$input['phone'];
        $personals->shdz =$input['cho_Province'].' '.$input['cho_City'].' '.$input['cho_Area'].' '.$input['shdz'];
        $personals->save();//执行添加数据库
        flash()->overlay('添加成功', '1');
            return redirect('home/personal');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //根据id查询需要删除的单条数据
        $flight =Personal::find($id);
        //执行删除
        $flight->delete();
        //删除之后重定向
        return redirect('home/personal');
    }
}
