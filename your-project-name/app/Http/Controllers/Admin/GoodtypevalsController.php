<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Goodtypeval;
use App\Models\Goodtype;
use App\Models\Good;

use App\Models\Navig;


class GoodtypevalsController extends Controller
{
      // 编写验证规则
    protected $rules =[
        "gtv_name"=>'required|unique:goodtypevals|max:32',
    ];
    //编写错误信息
    protected $messages =[
        "gtv_name.required"=>'属性值必填',
        "gtv_name.unique"=>'属性值重复',
        "gtv_name.max"=>'属性值过长',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($data);
        $where=[];
        $keywords = Request()->gtv_name;
        if ($keywords != '') {
            $goodtypeval = goodtypeval::where('gtv_name','like',"%$keywords%")->orderBy('id','desc')->paginate(10);
            $count = goodtypeval::where('gtv_name','like',"%$keywords%")->count();

        }else{
            $goodtypeval = goodtypeval::orderBy('gt_id','desc')->paginate(10);
            // dd($goodtypeval->toArray());
            $count = goodtypeval::count();
        }

        $nav = Navig::get(['id','name'])->toArray();
        $data = [];
        foreach ($nav as $k => $v) {
           $data[$v['id']]=$v['name'];
        }
        // dd($data);
        return view('admin.goodtypeval.index',['goodtypeval'=>$goodtypeval,'count'=>$count,'keywords'=>$keywords ,'data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nav = Navig::where('depth',0)->get()->toArray();
        // dd($nav);
       return view('admin.goodtypeval.create',['nav'=>$nav]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->yiji_id==0 || $request->erji_id==0 || $request->sanji_id==0 || $request->gt_id==0){
            flash()->overlay('添加失败,请选择分类', '5');
            return back();
        }
        $this->validate($request,$this->rules,$this->messages);

        $input=$request->except('_token');
        // dd($input);
        $gtv = new goodtypeval;
        $gtv->yiji_id = $input['yiji_id'];
        $gtv->erji_id = $input['erji_id'];
        $gtv->sanji_id = $input['sanji_id'];
        $gtv->gt_id = $input['gt_id'];
        $gtv->gtv_name = $input['gtv_name'];
        $gtv->save();
        flash()->overlay('添加成功', '1');
        return redirect("admin/goodtypevalindex");

        
        
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
        $goodtypeval =  goodtypeval::with('goodtypes')->findOrFail($id);
        $gtvid =  goodtypeval::findOrFail($id)->sanji_id;//获取分类的id
        $nav_name = Navig::where('id',$gtvid)->get()->toArray();
        //通过分类id获取分类名
        $data = [];
        foreach ($nav_name as $k => $v) {
            $data[$v['id']] = $v['name'];
        }
        return view('admin.goodtypeval.edit',['goodtypeval'=>$goodtypeval,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,$this->rules,$this->messages);
        $input = $request->except('_token');
        $update = goodtypeval::where('id',$id)->update($input);
        //判断是否修改成功
        if($update) {
            flash()->overlay('修改成功', '1');
            return redirect('admin/goodtypevalindex');
        }else{
            flash()->overlay('修改失败', '5');
            return redirect('admin/goodtypevalindex');       
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
        $idArray = good::where('gtv_id',$id)->get()->toArray();
        if(!$idArray){
            $dele =goodtypeval::destroy($id);
            //判断是否删除成功
            if ($dele) {
                flash()->overlay('删除成功', '1');
                return redirect('admin/goodtypevalindex');
            }else{
                flash()->overlay('删除失败', '5');
                return redirect('admin/goodtypevalindex');
            }
        }else{
            flash()->overlay('删除失败, 该属性值下还有商品','5');
            return redirect('admin/goodtypevalindex');
        }
        
    }

     //执行四级联动1
    public function goodtypevalfour(Request $request){
        $all = navig::where('parent_id',$request->id)->get()->toArray();
        return ['code'=>0,'msg'=>'','data'=>$all];
    }
    
    //执行四级联动2
    public function goodtypevalfour2(Request $request){
        $all2 = navig::where('parent_id',$request->id)->get()->toArray();

        return ['code'=>0,'msg'=>'','data'=>$all2];
    }

    //执行四级联动3
    public function goodtypevalfour3(Request $request){
        $all3 = goodtype::where('nav_id',$request->id)->get()->toArray();
        
        return ['code'=>0,'msg'=>'','data'=>$all3];
    }
    
}
