<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Models\Homeuser;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonalsController extends Controller
{
    protected $rules =[
        "cho_Province"=>'required',
        "cho_City"=>'required',
        "cho_Area"=>'required',
        "shdz"=>'required|max:75',
        "name"=>'required',
        "phone"=>'required|regex:/^1[34578][0-9]{9}$/|min:11|max:11',
    ];
    //编写错误信息
    protected $messages =[
        "shdz.required"=>'请输入您的详细收货地址',
        "shdz.max"=>'请输入正确收货地址',
        "name.required"=>'请输入收件人的姓名',
        "phone.required"=>'请输入收件人的手机号码',
        "phone.regex"=>'收件人的手机号码格式不正确',
        // "phone.min"=>'请正确输入收件人的手机号',
        "phone.max"=>'请正确输入收件人的手机号',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phone =session('phone');//获取当前用户的登录号
        // dd($phone);
        $id =Homeuser::where('phone',$phone)->firstOrFail()->id;//获取当前用户的id
        $personals = Personal::where('pid',$id)->get();
        $count =Personal::where('pid',$id)->count();
        return view('home.good_receipt',['personals'=>$personals,'count'=>$count]);
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
        $this->validate($request,$this->rules,$this->messages);//执行字段验证
        $phone =session('phone');//获取当前用户的登录号
        // dd($phone);
        $id =Homeuser::where('phone',$phone)->firstOrFail()->id;
        // dd($input);
        //给数据库赋值
        $personals =new Personal;
        $personals->name =$input['name'];
        $personals->phone =$input['phone'];
        $personals->pid =$id;
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
        $personals =Personal::where('id',$id)->firstOrFail();//根据id查询需要修改的数据
        $count =Personal::count();
       return  view("home.good_receipt",['personals'=>$personals,'count'=>$count]);
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
