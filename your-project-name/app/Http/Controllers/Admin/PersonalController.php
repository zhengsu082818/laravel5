<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Personal;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//管理收货地址控制器
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        
        // dd($username);
        // $info =request()->user();
        // dd($info->id);
        
       $where=[];
        $keywords = $request->name;
        if ($keywords != '') {
            $username = Personal::where('name','like',"%$keywords%")->orderBy('id','desc')->with('homeuser')->get();
       //      $list = Personal::where('name','like',"%$keywords%")->orderBy('id','desc')->paginate(5);
       //      // dd($list);
            $count = Personal::where('name','like',"%$keywords%")->count();

        }else{
            $username = Personal::with('homeuser')->orderBy('id','desc')->get();
            $count = Personal::count();
        }

         return view('admin.Personal.index',['username'=>$username,'count'=>$count]);
    }
    /**
     * 'list'=>$list,'count'=>$count,'keywords'=>$keywords,
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
