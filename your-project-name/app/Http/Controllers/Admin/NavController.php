<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Nav;
class NavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 查询所有数据
           $nav = Nav::orderby('id','desc')->paginate(5);
        // 查询数据总条数
           $count = Nav::count();
        // dd($count);
        // 重定向
            return view('admin.nav.index',['nav'=>$nav,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 加载添加页面
           return view('admin.nav.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 接受表单数据除了_token字段
           $nav = $request->except('_token');
        // 实例化模型
           $nav1 = new Nav;
        // 添加数据
           $nav1->name = $request->name;
           $nav1->static = $request->static;
        // 判断添加导航名是否为空
              if($request->name == null){
                 flash()->overlay('导航名不能为空', '5');
                 return back();
               }else{
                 $nav1->save();
                 flash()->overlay('添加成功', '1');
                 return redirect('admin/navindex');
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
        // 接受数据
           $nav = Nav::findOrFail($id);
           // dd($nav);
        // 加载修改页面
           return view('admin.nav.edit',['nav'=>$nav]);
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
        // 接受id穿过来的数据执行修改
           $nav = Nav::where('id', $id)
              ->update(['name' => $request->name,'static'=>$request->static]);
        // 判断是否修改 
           if($nav){
                flash()->overlay('修改成功','1');
                return redirect('admin/navindex');
           }else{
                flash()->overlay('修改失败','5');
                return back();
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
        // 获取数据
          $nav = Nav::find($id);
          // dd($nav);
        // 执行删除方法
          $nav->delete();
        // 删除成功重定向
          flash()->overlay('删除成功','1');
          return redirect('admin/navindex');
    }
}
