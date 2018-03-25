<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Navig;
use App\Models\Banner;
use App\Models\Good;
use App\Models\Sytj;
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
        $list = navig::where('stated',1)->get()->toHierarchy();

        //遍历轮播图片
        $banner = banner::where('static','启用')->get();

        //轮播个数
        $bancount = banner::where('static','启用')->count();

        //遍历每日上新,根据每次添加商品的时间倒叙
        $gengxin = good::orderBy('created_at','desc')->limit(11)->get();


        $sytj = sytj::where('stated',1)->orderBy('id','desc')->take(2)->get()->toArray();
        foreach ($sytj as $k => $v) {
           $arr[] =$v['name'];
        }

        //遍历母婴儿童
        $mother_id = navig::where('name',"$arr[0]")->first()->id;
        $mother_name = navig::where('name',"$arr[0]")->first()->name;
        $mother  = navig::where('parent_id',$mother_id)->orderBy('id','desc')->limit(6)->get();
        //遍历母婴儿童的换一换
        $mhyh = good::where('djid',$mother_id)->orderBy('nums')->limit(3)->get();
        
        //遍历美容美妆
        $mei_id = navig::where('name',"$arr[1]")->first()->id;
        $mei_name = navig::where('name',"$arr[1]")->first()->name;
        $meirong  = navig::where('parent_id',$mei_id)->orderBy('id','desc')->limit(6)->get();
        //遍历美容美妆的换一换
        $mrhyh = good::where('djid',$mei_id)->orderBy('nums')->limit(3)->get();

        return view('home.index',[
            'list'=>$list,
            'bancount'=>$bancount,
            'banner'=>$banner,
            'gengxin'=>$gengxin,

            'mother_name'=>$mother_name,
            'mother'=>$mother,
            'mhyh'=>$mhyh,

            'mei_name'=>$mei_name,
            'meirong'=>$meirong,
            'mrhyh'=>$mrhyh,
<<<<<<< HEAD
         
=======


>>>>>>> c801ea516bc50b0f4e4c0bd77c067ccd2e765dc1
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
