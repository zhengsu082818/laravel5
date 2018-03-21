<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Navig;
use App\Models\Banner;
use App\Models\Good;

class IndexsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //遍历商品导航
        $list = navig::get()->toHierarchy();
        // dd($list->toArray());

        //遍历轮播图片
        $banner = banner::where('static','启用')->get();

        //轮播个数
        $bancount = banner::where('static','启用')->count();

        //遍历每日上新,根据每次添加商品的时间倒叙
        $gengxin = good::orderBy('created_at','desc')->limit(11)->get();

        //遍历母婴儿童
        $mother_id = navig::where('name','母婴儿童')->first()->id;
        $mother  = navig::where('id',$mother_id)->first()->immediateDescendants()->limit(6)->get();
        // dd($mother);
        //遍历母婴儿童的换一换
        $mhyh = good::where('djid',$mother_id)->orderBy('nums')->limit(3)->get();
    
        //遍历美容美妆
        $mei_id = navig::where('name','美容美妆')->first()->id;
        $mei_rong  = navig::where('id',$mei_id)->first()->immediateDescendants()->get();
        //遍历美容美妆的换一换
        $mrhyh = good::where('djid',$mei_id)->orderBy('nums')->limit(3)->get();

        //遍历手表配饰
        $watch = navig::where('name','手表配饰')->first()->id;
        $wt_ps  = navig::where('id',$watch)->first()->immediateDescendants()->limit(6)->get();
        // dd($wt_ps);
        //遍历手表配饰的换一换
        $wthyh = good::where('djid',$watch)->orderBy('nums')->limit(8)->get();

        return view('home.index',[
            'list'=>$list,
            'bancount'=>$bancount,
            'banner'=>$banner,
            'gengxin'=>$gengxin,
            'mother'=>$mother,
            'mhyh'=>$mhyh,
            'mei_rong'=>$mei_rong,
            'mrhyh'=>$mrhyh,
            'wt_ps'=>$wt_ps,
        ]);
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
