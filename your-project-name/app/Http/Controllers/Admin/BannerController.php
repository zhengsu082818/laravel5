<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 111;
         $banner = Banner::all();
         // dd($banner);
         $count =Banner::count();
         return view('admin.banner.index',['banner'=>$banner,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }
    
    public function uplode(Request $request)
    {
        // 接受上传文件名
        $filed = $request->file('file');
        // dd($filed);
        // 判断文件是否上传
        if ($request->file('file')->isValid()) {
              // 文件上传成功获取后缀
              $ext = $filed->getClientOriginalExtension();
              // 文件上传成功设置新文件名
              $filename = time().rand(1,9999).'.'.$ext;
              // 文件上传移动文件
              $path = $filed->move('storage/uploads',$filename);
        }
        return ['code'=>0,'msg'=>'','data'=>["src"=>$filename]];
        
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
       if(Banner::create($input)){
          return redirect('banner');
          // flash('添加成功')->success();
       }else{
          return back();
          // flash('添加失败')->error();
       }
       // dd($input);
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
        //
    }
}