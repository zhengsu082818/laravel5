<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Goodtype;
use App\Models\Goodtypeval;
use App\Models\Navig;
//商品属性名控制器
class GoodtypesController extends Controller
{
     // 编写验证规则
    protected $rules =[
        "gt_name"=>'required|max:32',
    ];
    //编写错误信息
    protected $messages =[
        "gt_name.required"=>'属性名必填',
        "gt_name.max"=>'属性名过长',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Navig::all()->toArray();
        $data = [];
        foreach ($list as $k => $v) {
           $data[$v['id']] = $v['name'];
        }
        $where=[];
        $keywords = Request()->gt_name;
        if ($keywords != '') {
            $goodtype = goodtype::where('gt_name','like',"%$keywords%")->orderBy('nav_id','desc')->paginate(5);
            $count = goodtype::where('gt_name','like',"%$keywords%")->count();

        }else{
            $goodtype = goodtype::orderBy('nav_id','desc')->paginate(5);
            $count = goodtype::count();
        }
        return view('admin.goodtype.index',['goodtype'=>$goodtype,'count'=>$count,'keywords'=>$keywords,'data'=>$data]);


       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Navig::where('depth','0')->get()->toArray();
        return view('admin.goodtype.create' ,['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->one_id==0 || $request->two_id==0 || $request->nav_id==0){
            flash()->overlay('添加失败,请选择类别', '5');
            return back();
        }
        $this->validate($request,$this->rules,$this->messages);
        $input=$request->except('_token');
        $gt = new goodtype;
        $gt->one_id =  $input['one_id'];
        $gt->two_id =  $input['two_id'];
        $gt->nav_id =  $input['nav_id'];
        $gt->gt_name = $input['gt_name'];
        $gt->save();
        
        flash()->overlay('添加成功', '1');
        return redirect("admin/goodtypeindex");
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

        $name = goodtype::findOrFail($id)->nav_id;

        $name2 = Navig::where('id',$name)->first();
        return view('admin.goodtype.edit',['goodtype'=>$goodtype,'name2'=>$name2]);
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
        $update = goodtype::where('id',$id)->update($input);
        
        //判断是否修改成功
        if($update) {
            flash()->overlay('修改成功', '1');
            return redirect('admin/goodtypeindex');
        }else{
            flash()->overlay('修改失败', '5');
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
        $gtv = goodtypeval::where('gt_id',$id)->first();
        if($gtv == null){
            $dele =goodtype::destroy($id);
            //判断是否删除成功
            if ($dele) {
                flash()->overlay('删除成功', '1');
                return redirect('admin/goodtypeindex');
            }else{
                flash()->overlay('删除失败', '5');
                return redirect('admin/goodtypeindex');
            }
        }else{
            flash()->overlay('删除失败,该属性名下还有属性值', '5');
            return redirect('admin/goodtypeindex');
        }
       
    }

    //执行三级联动1
    public function goodtypeSjld1(Request $request){
        $all = navig::where('parent_id',$request->id)->get()->toArray();

        return ['code'=>0,'msg'=>'','data'=>$all];
    }
    
    //执行三级联动2
    public function goodtypeSjld2(Request $request){
        $all2 = navig::where('parent_id',$request->id)->get()->toArray();

        return ['code'=>0,'msg'=>'','data'=>$all2];
    }
}
