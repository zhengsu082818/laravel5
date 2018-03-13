<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Homeuser;

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
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dele =homeuser::destroy($id);
        //判断是否删除成功
        if ($dele) {
            flash()->overlay('删除成功', '1');
            return redirect('admin/homeindex');
        }else{
            flash()->overlay('删除失败', '5');
            return redirect('admin/homeindex');
        }
    }
}
