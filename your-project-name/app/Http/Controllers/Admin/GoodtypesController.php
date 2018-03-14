<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Goodtype;

use App\Models\Navig;

class GoodtypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = navig::with('goodtype')->get()->toArray();
        dd($list);
        $where=[];
        $keywords = Request()->gt_name;
        if ($keywords != '') {
            $goodtype = goodtype::where('gt_name','like',"%$keywords%")->orderBy('id','desc')->paginate(5);
            $count = goodtype::where('gt_name','like',"%$keywords%")->count();

        }else{
            $goodtype = goodtype::orderBy('id','desc')->paginate(5);
            $count = goodtype::count();
        }
        return view('admin.goodtype.index',['goodtype'=>$goodtype,'count'=>$count,'keywords'=>$keywords]);


        // $list = Goodtype::with('goodtypeval')->get()->toArray();
        // dd($list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goodtype.create');
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
        $goodtype = goodtype::findOrFail($id);
        return view('admin.goodtype.edit',['goodtype'=>$goodtype]);
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
