<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Good;
use App\Models\Navig;
//商品的增删改查控制器
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $where=[];
        $keywords = Request()->name;
        if ($keywords != '') {
            $goods = good::with('navig')->where('title','like',"%$keywords%")->orderBy('id','desc')->paginate(10);
            $count = good::where('title','like',"%$keywords%")->count();
        }else{
            $goods = good::with('navig')->orderBy('id','desc')->paginate(10);
            $count = good::count();
           
        }
        return view('admin.good.index',['goods'=>$goods,'count'=>$count,'keywords'=>$keywords]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Navig::where('depth','2')->get()->toArray();


        // $list = good::with('gt')->get()->toArray();
        // dd($list);
        return view('admin.good.create',['data' => $data]);
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
        $good = new good;
        $good->img = $request->img;
        $good->title = $request->title;
        $good->price = $request->price;
        $good->nums = $request->nums;
        $good->content = $request->content;
        if(!$good->img = $request->img ){
            flash()->overlay('添加失败,没有图片上传','5');
            return back();
        }
        $good->save();
        flash()->overlay('添加成功','1');
        return redirect('admin/goodindex');

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
         $dele =good::destroy($id);
        //判断是否删除成功
        if ($dele) {
            flash()->overlay('删除成功', '1');
            return redirect('admin/goodindex');
        }else{
            flash()->overlay('删除失败', '5');
            return redirect('admin/goodindex');
        }
    }

   
}
