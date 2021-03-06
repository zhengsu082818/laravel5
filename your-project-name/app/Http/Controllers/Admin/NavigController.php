<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Navig;
use App\Http\Requests;
use App\Http\Controllers\Tupian\TupianController;
use App\Http\Controllers\Controller;
use App\Models\Goodtype;
use App\Models\Goodtypeval;
use App\Models\Good;

//后台管理分类列表控制器
class NavigController extends Controller
{
    // 编写验证规则
    protected $rules =[
        "name"=>'required|max:32',
    ];
    //编写错误信息
    protected $messages =[
        "name.required"=>'类别名必填',
        "name.max"=>'类别名过长',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $depth=['0'=>'顶级分类','1'=>'二级分类','2'=>'三级分类','3'=>'四级分类','4'=>'五级分类'];
        $where=[];
        $keywords = Request()->name;
        if ($keywords != '') {
            $Navig = Navig::where('name','like',"%$keywords%")->orderBy('rgt','desc')->paginate(10);
            $count = Navig::where('name','like',"%$keywords%")->count();
        }else{
            $Navig = Navig::orderBy('rgt','desc')->paginate(16);
            $count = Navig::count();
        }
        return view('admin.navig.index',['Navig'=>$Navig,'count'=>$count,'keywords'=>$keywords,'depth'=>$depth]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 接受表单id 没有id就为空 
        $id =$_GET['id']?:null;
        if($id===null){
           return view('admin.navig.navigadd',['id'=>$id]); 
        }else{
            // 查出这个id的name字段
            $leiall = Navig::findOrFail($id)->name;
            return view('admin.navig.navigadd',['id'=>$id,'leiall'=>$leiall]);
        } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request )
    {  
        $this->validate($request,$this->rules,$this->messages);
        //接收除_token字段的数据
        $input=$request->except('_token');
        // dd($input);
        //判断id是否为空
        if(!$request->input('id')){
            // dd($input);
            $info =Navig::create($input);
        }else{
            $data =Navig::findOrFail($request->input('id'));
            // dd($data);
            $info =$data->children()->create($input);
            // dd($info);

        }
        if($info){
            flash()->overlay('添加成功', '1');
            return redirect("navig/index");

        }else{
            flash()->overlay('添加失败', '5');
            return redirect("navig/create");
        }
        
        
    }

    public function tupiana(Request $request)
    {
         $pic = new TupianController;
         $data=$pic->picture($request,'file','storage/uploads/');
         return ['code'=>0,'msg'=>'','data'=>['src'=>$data]];
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Navig = Navig::where('id',$id)->first();
        // dd($Navig);
        $idd = $Navig->parent_id;
        if($idd != null){
            $upname = Navig::findOrFail($idd)->name;
        }else{
            $upname = '顶级分类';
        }
    
        return view('admin.navig.edit',['Navig' => $Navig,'upname'=>$upname ]);
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
        $input=$request->input();
        // dd($input);
        //验证规则
        $this->validate($request,[
                "name"=>'required|max:255',
        ],[ "name.required"=>'请输入类别名',"name.max"=>'类别名过长',]);

        if (!$input['url']) {
            $updatee =Navig::where('id',$id)
                ->update(['name'=>$input['name'],'stated'=>$input['stated']]);
        }else{
            $updatee =Navig::where('id',$id)
                ->update(['name'=>$input['name'],'url'=>$input['url'],'stated'=>$input['stated']]);
        }
        //判断是否修改成功
        if ($updatee) {
            flash()->overlay('修改成功', '1');
            return redirect('navig/index');
        }else{
             flash()->overlay('修改失败', '5');
             return redirect('navig/index');        
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
        $san = Navig::findOrFail($id)->depth; //根据id查询是几级类别
        if($san == 2){ //如果为三级
            $good = good::where('sj_id',$id)->get()->toArray(); //根据三级类别的id查询是否有商品
            if($good == []){ //如果没有商品
                $gtv1 = goodtypeval::where('sanji_id',$id)->get()->toArray();//根据id查询属性值表所有属于该类别的属性值
                if($gtv1 == [] ){ //如果没有属性值
                    $gtv = goodtype::where('nav_id',$id)->get()->toArray();//根据id查询属性名表属于所有该类别的所有属性名
                    if($gtv == []){ //如果没有属性名
                        $nav = Navig::destroy($id); //直接删除类别
                    }else{  //否则先删除所有属性名,再删除类别
                        foreach ($gtv as $k => $v) {
                           $arr2[] = $v['id'];
                        }
                        foreach ($arr2 as $key => $value) {
                            goodtype::destroy($value);
                        }
                        $nav = Navig::destroy($id);
                    }
                }else{
                    //如果有属性值,先删除所有属性值,再删除属性名,最后删除类别
                    foreach ($gtv1 as $k => $v) {
                        $arr[] = $v['id'];
                    }
                    foreach ($arr as $key => $value) {
                        goodtypeval::destroy($value);
                    }
                    foreach ($gtv as $k => $v) {
                       $arr2[] = $v['id'];
                    }
                    foreach ($arr2 as $key => $value) {
                        goodtype::destroy($value);
                    }
                    $nav = Navig::destroy($id);
                }
               
                flash()->overlay('删除成功', '1');
                return redirect('navig/index');

            }else{
                flash()->overlay('删除失败,该类别下还有商品','5');
                return back();
            }

        //如果不为三级
        }else{
            $aa=Navig::where('parent_id',$id)->get()->toArray();//根据id查询是否为顶级类别

            $des= Navig::where('id',$id)->first();
        
            $zl=$des->getDescendants()->toArray();
            
            $va =[];
            foreach ($zl as  $k => $v) {
               $va[$k] = $v['name'];
            }
          
            if($aa == [] ){
                $des->delete();
                flash()->overlay('删除成功', '1');
                return redirect('navig/index');
            }else{
                flash()->overlay('删除失败，请先删除'."“$va[$k]”类别", '5');
                return back();
            }
        }
        
    }


    
}