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
        "content"=>'required',
    ];
    //编写错误信息
    protected $messages =[
        "title.required"=>'商品名必填',
        "title.max"=>'商品名过长',
        "price.required"=>'价格必填',
        "price.numeric"=>'价格格式不正确',
        "nums.required"=>'数量必填',
        "nums.numeric"=>'数量格式不正确',
        "content.required"=>'详情必填',
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
            $goods = good::where('title','like',"%$keywords%")->orderBy('gtv_id','desc')->paginate(11);
            $count = good::where('title','like',"%$keywords%")->count();
        }else{
            $goods = good::orderBy('gtv_id','desc')->paginate(11);
            $count = good::count();
        }

        $gt = goodtype::get(['id','gt_name'])->toArray();
        $data = [];
        foreach($gt as $k=>$v){
            $data[$v['id']] =$v['gt_name'];
        }

        $nav = Navig::get(['id','name'])->toArray();
        $datas = [];
        foreach ($nav as $k => $v) {
           $datas[$v['id']]=$v['name'];
        }

        $gtv = goodtypeval::get(['id','gtv_name'])->toArray();
        $gtvs = [];
        foreach ($gtv as $k => $v) {
           $gtvs[$v['id']]=$v['gtv_name'];
        }
        // dd($gtvs);
        return view('admin.good.index',['goods'=>$goods,'count'=>$count,'keywords'=>$keywords ,'data'=>$data,
        'datas'=>$datas,'gtvs'=>$gtvs]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data = Navig::where('depth','0')->get()->toArray();

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
        if($request->djid==0 || $request->cjid==0 || $request->sj_id==0 || $request->gt_id==0 || $request->gtv_id==0  ){
            flash()->overlay('添加失败,请选择类别', '5');
            return back();
        }
        $good = new good;
        $this->validate($request,$this->rules,$this->messages);
        $input=$request->except('_token');
        if(!$good->img = $input['img'] ){
            flash()->overlay('添加失败,没有图片上传','5');
            return back();
        }
        $input['img']=explode(',', rtrim($input['img'],','));

       
        $good->djid = $input['djid'];
        $good->cjid = $input['cjid'];
        $good->sj_id = $input['sj_id'];
        $good->gt_id = $input['gt_id'];
        $good->gtv_id = $input['gtv_id'];
        $good->title = $input['title'];
        $good->img = $input['img'][0];
        $good->img1 = $input['img'][1];
        $good->img2 = $input['img'][2];

        $good->price = $input['price'];
        $good->nums = $input['nums'];
        $good->content = $input['content'];
        $good->save();
        flash()->overlay('添加成功','1');
        return redirect('admin/goodindex');
    }

    /**
     * 查看商品详情
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $good = good::findOrFail($id);
        return view('admin.good.show',['good'=>$good]);
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
        $good = good::findOrFail($id);
        $input = $request->except('_token');
        $input['img']=explode(',', rtrim($input['img'],','));
        // dd($input);
        
        $good->title = $input['title'];
        $good->img = $input['img'][0];
        $good->img1 = $input['img'][1];
        $good->img2 = $input['img'][2];

        $good->price = $input['price'];
        $good->nums = $input['nums'];
        $good->content = $input['content'];
        
     $good->save();
         
             flash()->overlay('修改成功','1');
             return redirect('admin/goodindex');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $good = good::findOrFail($id);
        $num = good::findOrFail($id)->nums;
        if($num == 0){
            $del = $good->delete();
            if($del > 0){
                flash()->overlay('删除成功', '1');
                return redirect('admin/goodindex');
            }else{
                flash()->overlay('删除失败', '5');
                return redirect('admin/goodindex');
            }
        }else{
            flash()->overlay('删除失败,该商品还有库存', '5');
            return redirect('admin/goodindex');
        }

       
    }


    //执行五级联动1
    public function goodwjld(Request $request){
        $all = navig::where('parent_id',$request->id)->get()->toArray();
        // dd($all);
        return ['code'=>0,'msg'=>'','data'=>$all];
    }
    
    //执行五级联动2
    public function goodwjld2(Request $request){
        $all2 = navig::where('parent_id',$request->id)->get()->toArray();
        return ['code'=>0,'msg'=>'','data'=>$all2];
    }

    //执行五级联动3
    public function goodwjld3(Request $request){
        $all3 = goodtype::where('nav_id',$request->id)->get()->toArray();
        return ['code'=>0,'msg'=>'','data'=>$all3];
    }

    //执行五级联动4
    public function goodwjld4(Request $request){
        $all4 = goodtypeval::where('gt_id',$request->id)->get()->toArray();
        return ['code'=>0,'msg'=>'','data'=>$all4];
    }
}
