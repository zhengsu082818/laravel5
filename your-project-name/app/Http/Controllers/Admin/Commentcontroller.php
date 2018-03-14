<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Homeuser;
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
        // 接受传的name值
       $keywords= $request->name;
        // dd( $keywords);
        // 判断name值是否为空
       if ($keywords != '') {
            $homeuser = Comment::where('comment','like',"%$keywords%")->orderBy('id','desc')->with('homeuser')->paginate(10);
            $count = Comment::where('comment','like',"%$keywords%")->count();
       }else{
            $homeuser = Comment::orderBy('id','desc')->with('homeuser')->paginate(10);
            // dd($homeuser->toArray());
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $root = Comment::create(['sid'=>'1','uid'=>'1','comment'=>'wwww','reply'=>'wwwwwww']);
        // $root1 = $root -> children() ->create(['sid'=>'1','uid'=>'1','comment'=>'wwww1','reply'=>'wwwwwww1']);
        // $root2 = $root1 -> children() ->create(['sid'=>'1','uid'=>'1','comment'=>'wwww2','reply'=>'wwwwwww2']);
        // $root3= $root2 -> children() ->create(['sid'=>'1','uid'=>'1','comment'=>'wwww3','reply'=>'wwwwwww3']);
        // $root11 = Comment::create(['sid'=>'2','uid'=>'2','comment'=>'qqq','reply'=>'qqq']);
        // $root12 = $root11 -> children() ->create(['sid'=>'2','uid'=>'2','comment'=>'wwww12','reply'=>'wwwwwww12']);
        // $root13 = $root12 -> children() ->create(['sid'=>'2','uid'=>'2','comment'=>'wwww13','reply'=>'wwwwwww13']);
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
        // baum安装包方法 查看这个节点以上所有的父节点
        $parent = $comment->getAncestors();
        // dd($comment->getAncestors()->toArray());
        // 加载回复页面
        return view('admin.comment.edit',['comment'=>$comment,'parent'=>$parent]);
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
