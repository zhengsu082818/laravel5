<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Navig;
use App\Models\Sytj;
class SytjsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keywords = $request->name;
        if ($keywords != '') {
            $list = Sytj::where('name','like',"%$keywords%")->orderBy('id','desc')->paginate(6);
            $count = Sytj::where('name','like',"%$keywords%")->count();
        }else{
            $list = Sytj::orderBy('id','desc')->paginate(6);
            $count = Sytj::count();
        }
        return view('admin.sytj.index',['list'=>$list,'count'=>$count,'keywords'=>$keywords]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nav = Navig::where('depth',0)->where('stated',1)->get();
        return view('admin.sytj.create',['nav'=>$nav]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        // dd($input);
        $st = new Sytj;
        $st->name=  $input['name'];
        $st->stated =  $input['stated'];
        $st->save();
        flash()->overlay('添加成功', '1');
        return redirect("admin/sytjindex");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = Sytj::findOrFail($id);
        return view('admin.sytj.edit',['list'=>$list]);
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

        $input = $request->except('_token');
        
        $update = Sytj::where('id',$id)->update($input);
        //判断是否修改成功
        if($update) {
            flash()->overlay('修改成功', '1');
            return redirect('admin/sytjindex');
        }else{
            flash()->overlay('修改失败', '5');
            return redirect('admin/sytjindex');       
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
        $flight = Sytj::findOrFail($id);
        $sytj = $flight->delete();
        flash()->overlay('删除成功','1');
        return redirect('admin/sytjindex');
    }
}
