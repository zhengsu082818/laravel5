<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Good;
use App\Models\Navig;

use App\Models\Goodtype;
use App\Models\Goodtypeval;

class GoodsController extends Controller
{
     // 编写验证规则
    protected $rules =[
        "title"=>'required|max:255',
        "price"=>'required|numeric',
        "nums"=>'required|numeric',
    ];
    //编写错误信息
    protected $messages =[
        "title.required"=>'商品名必填',
        "title.max"=>'商品名过长',
        "price.required"=>'价格必填',
        "price.numeric"=>'价格格式不正确',
        "nums.required"=>'数量必填',
        "nums.numeric"=>'数量格式不正确',
    ];
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
            // dd($goods->toArray());
            $count = good::count();
        }
        $gt = goodtype::get(['id','gt_name'])->toArray();
        $data = [];
        foreach($gt as $k=>$v){
            $data[$v['id']] =$v['gt_name'];
        }
        // dd($data);
        return view('admin.good.index',['goods'=>$goods,'count'=>$count,'keywords'=>$keywords ,'data'=>$data]);
        
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
              $path = $filed->move('storage/uploads/shopping',$filename);
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
        // dd($request->all());
        if($request->nav_id==0 || $request->gt_id==0 || $request->gtv_id==0){
            flash()->overlay('添加失败,请选择类别', '5');
            return back();
        }
        $this->validate($request,$this->rules,$this->messages);
        $input=$request->except('_token');
        
        $good = new good;
        $good->nav_id = $input['nav_id'];
        $good->gt_id = $input['gt_id'];
        $good->gtv_id = $input['gtv_id'];
        $good->title = $input['title'];
        $good->img = $input['img'];
        $good->price = $input['price'];
        $good->nums = $input['nums'];
        $good->content = $input['content'];
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
        $good = good::findOrFail($id);

        return view('admin.good.edit',['good'=>$good]);
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
        $this->validate($request,$this->rules,$this->messages);
        $input = $request->except('_token');
        $list = good::where('id', $id)->update($input);
     
         if($list > 0){
             flash()->overlay('修改成功','1');
             return redirect('admin/goodindex');
         }else{
             flash()->overlay('修改失败','5');
             return back();
         }
        
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


    //执行三级联动1
    public function goodSjld1(Request $request){
        $all = goodtype::where('nav_id',$request->id)->get()->toArray();

        return ['code'=>0,'msg'=>'','data'=>$all];
    }
    
    //执行三级联动2
    public function goodSjld2(Request $request){
        $all2 = goodtypeval::where('gtt_id',$request->id)->get()->toArray();

        return ['code'=>0,'msg'=>'','data'=>$all2];
    }
}
