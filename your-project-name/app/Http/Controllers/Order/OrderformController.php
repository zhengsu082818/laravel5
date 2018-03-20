<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $where=Input::get('where')?Input::get('where'):null; 

         $hcount = DB::table('homeusers')->count();
         $ocount = DB::table('commodity')->count();
         $count=$hcount+$ocount;
        $info = DB::table('homeusers')
            ->join('orderformcount', 'homeusers.id', '=', 'orderformcount.uid')
            ->where('name','like',"%$where%")
            ->orWhere('phone','like',"%$where%")
            ->orderBy('homeusers.id', 'desc')
            ->paginate(10);
            // dd($info);
        return view('orderform/index',['info'=>$info,'count'=>$count,'where'=>$where]);
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

        $state = Input::get('state');
        $id = Input::get('id');
        $uid=DB::table('commodity')->where('id',$id)->value('uid');
        
        $list=DB::table('commodity')
            ->where('id', $id)
            ->update(['state' => $state]);
        if($list){
             flash()->overlay('修改成功','1');
             return redirect("order/$uid");
         }else{
             flash()->overlay('修改失败','5');
             return redirect()->action("order/$uid");
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
        $where=Input::get('where')?Input::get('where'):null; 

        $count=DB::table('commodity')->where('uid',$id)->count();
        $info=DB::table('commodity')
                ->where('uid','=',$id)
                ->where(function($query) {
                $where=Input::get('where')?Input::get('where'):null; 
                $query->where('orderid','like',"%$where%")
                    ->orwhere('state','like',"%$where%")
                    ->orwhere('product','like',"%$where%");
                })      
                ->orderBy('id', 'desc')
                ->paginate(10);
        return view('orderform/hucom',['info'=>$info,'count'=>$count,'id'=>$id,'where'=>$where]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uid=DB::table('commodity')->where('id',$id)->value('uid');
        $state=DB::table('commodity')->where('id',$id)->value('state');

        return view('orderform/edit',['id'=>$id,'uid'=>$uid,'state'=>$state]);
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
