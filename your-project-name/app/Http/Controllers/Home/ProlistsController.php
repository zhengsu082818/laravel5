<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Navig;
use App\Models\Goodtypeval;
use App\Models\Goodtype;
use App\Models\Good;
class ProlistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        //遍历商品导航
        $list = navig::where('stated',1)->get()->toHierarchy();

        $proList = navig::findOrFail($id);//加载三级类别id的所有内容

        $aa = $proList->getAncestors(); //通过三级id查询顶级id,二级id

        $nav = Navig::get(['id','name'])->toArray();//通过类别id查询类别名
        $data = [];
        foreach ($nav as $k => $v) {
           $data[$v['id']]=$v['name'];
        }

        $gt = navig::with('gtype.goodtypeval')->findOrFail($id)->toArray();//遍历属性名属性值
        // dd($gt);
        
        $goodList = good::where('sj_id',$id)->paginate(12);//商品分页

        $search = $request->title;
        //加载商品列表模板
        return view('home.product_list',[
            'list'=>$list,
            'proList'=>$proList,
            'data'=>$data,
            'aa'=>$aa,
            'gt'=>$gt,
            'goodList'=>$goodList,
             'search'=>$search,
            

        ]);
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
    public function store(Request $request,$aa=null,$gt=null)
    {
        if($request->title === ''){
            return back();
        }

       
         $request->session()->put('search',$request->title);
    

       
         $search = $request->title;
        //遍历商品导航
        $list = navig::where('stated',1)->get()->toHierarchy();

        $goodList = good::where('title','like',"%$search%")->orderBy('id','desc')->paginate(12);//商品分页
       
        return view('home.product_list',[
            'list'=>$list,
            'goodList'=>$goodList,
            'aa'=>$aa,
            'gt'=>$gt,
            'search'=>$search,
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id , $name)
    {

        //遍历商品导航
        $list = navig::where('stated',1)->get()->toHierarchy();

        $type = goodtypeval::findOrFail($id);

        $typename = goodtype::where('id',$type->gt_id)->first()->gt_name;

       
        $nav = Navig::get(['id','name'])->toArray();//通过类别id查询类别名
        $data = [];
        foreach ($nav as $k => $v) {
           $data[$v['id']]=$v['name'];
        }

        $gt = navig::with('gtype.goodtypeval')->findOrFail($name)->toArray();

        $goodList = good::where('gtv_id',$id)->paginate(12);//商品分页

        //加载商品列表模板
        return view('home.prolist_search',[
            'list'=>$list,
            'data'=>$data,
            'type'=>$type,
            'typename'=>$typename,
            'gt'=>$gt,
            'goodList'=>$goodList,

        ]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
