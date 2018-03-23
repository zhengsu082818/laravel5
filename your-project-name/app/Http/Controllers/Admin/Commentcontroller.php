<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Homeuser;
use App\Models\Good;
use Baum\Node;
class Commentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $keywords= $request->name;
       if ($keywords != '') {
            $homeuser = Comment::where('comment','like',"%$keywords%")->orderBy('id','desc')->with('homeuser')->paginate(10);
            $count = Comment::where('comment','like',"%$keywords%")->count();
       }else{
            $homeuser = Comment::orderBy('id','desc')->with('homeuser')->paginate(10);
            // dd($homeuser);
            $count = Comment::count();
       }
       // 加载主页面并传参数
       return view('admin.comment.index',['count'=>$count,'homeuser'=>$homeuser,'keywords'=>$keywords]);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 接受id传过来的数据
        $comment = Comment::findOrFail($id);
        // dd($comment);
        // 加载回复页面
        return view('admin.comment.edit',['comment'=>$comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        // 接受除过_token的所有值
        $input = $request->except('_token');
        // 接受回复的值
        $list = Comment::where('id',$id)->update(['reply'=>$request->reply]);
        if($list){
             flash()->overlay('回复成功','1');
             return redirect('admin/comment');
        }else{
             flash()->overlay('回复失败','5');
             return back();
        }
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
