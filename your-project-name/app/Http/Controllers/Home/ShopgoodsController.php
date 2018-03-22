<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Navig;
<<<<<<< HEAD
use App\Models\Good;

=======
use App\Models\Comment;
>>>>>>> 6c193091f8b6c41349cd9a8aab1f57c2068326b0

//商品详情控制器
class ShopgoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD

        $list = navig::get()->toHierarchy();//查询导航分类
        $good =Good::where('id',6)->get();//模拟id=5的数据，查询这条数据
        // dd($good);
        return view('home.shop_good',['list'=>$list,'good'=>$good]);

=======
        $list = navig::get()->toHierarchy();
        $comment = Comment::all();
        dd($comment);
        return view('home.shop_good',['list'=>$list]);
>>>>>>> 6c193091f8b6c41349cd9a8aab1f57c2068326b0
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
