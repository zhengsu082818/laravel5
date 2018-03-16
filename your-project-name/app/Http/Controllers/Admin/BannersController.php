<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//管理轮播图控制器
class Bannerscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $where=[];
        $keywords = $request->static;
        if ($keywords != '') {
            $banner = Banner::where('static','like',"%$keywords%")->orderBy('id','desc')->paginate(5);
            $count = Banner::where('static','like',"%$keywords%")->count();

        }else{
            $banner = Banner::orderBy('id','desc')->paginate(5);
            $count = Banner::count();
        }
        return view('admin.banner.index',['banner'=>$banner,'count'=>$count,'keywords'=>$keywords]);
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
       // dd($request->input());
       $banner = new Banner;
       $banner->img = $request->img;
       $banner->static = $request->static;
       if(!$banner->img = $request->img ){
        flash()->overlay('添加失败,没有图片上传','5');
        return back();
       }
       $banner->save();
       flash()->overlay('添加成功','1');
       return redirect()->action('Admin\BannersController@index');
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
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit',['banner'=>$banner]);
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
         $list = Banner::where('id', $id)
          ->update(['img' => $request->imgurl,'static'=>$request->static]);
         if($list){
             flash()->overlay('修改成功','1');
             return redirect()->action('Admin\BannersController@index');
         }else{
             flash()->overlay('修改失败','5');
             return redirect()->action('Admin\BannersController@edit');
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
         $flight = Banner::find($id);
         $banner = $flight->delete();
         flash()->overlay('删除成功','1');
         return redirect()->action('Admin\BannersController@index');
    }
}
