<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Personal;
use App\Http\Controllers\Controller;
use App\Models\Homeuser;
use App\Models\Navig;
//管理前台用户控制器
class HomeuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $where=[];
        $keywords = $request->username;
        if ($keywords != '') {

            $stus = homeuser::where('username','like',"%$keywords%")->orderBy('id','desc')->paginate(5);
            $count = homeuser::where('username','like',"%$keywords%")->count();

        }else{
            $stus = homeuser::orderBy('id','desc')->paginate(5);
            $count = homeuser::count();
        }
        return view('admin.homeuser.list',['stus'=>$stus,'count'=>$count,'keywords'=>$keywords]);

    }

    /**
     * Show the form for creating a new resource.
     *加载完善个人信息页面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $phone =session('phone');//获取当前用户的登录号
        // dd($phone);
        $personals =Homeuser::where('phone',$phone)->firstOrFail();//获取当前用户的完整数据
        // dd($personals);
        return view('home.zhenghao',['personals'=>$personals]);
    }

    /**
     * Store a newly created resource in storage.
     *执行个人信息完善
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        $input = $request->except('_token');//接收除_token字段的数据
        $update = homeuser::where('id',$id)->update($input);
        return redirect('home/home/number');
        
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
        $user = homeuser::findOrFail($id);
        return view('admin.homeuser.edit',['user' => $user]);
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
        $update = homeuser::where('id',$id)->update($input);
        //判断是否修改成功
        if($update) {
            flash()->overlay('修改成功', '1');
            return redirect('admin/homeindex');
        }else{
            flash()->overlay('修改失败', '5');
            return redirect('admin/homeindex');       
        }
    }

    
    
}
