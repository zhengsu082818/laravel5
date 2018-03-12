<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Navig;
use App\Http\Requests;
use App\Http\Controllers\Tupian\TupianController;
use App\Http\Controllers\Controller;
    
class NavigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id =null)
    {
        $depth=['0'=>'顶级分类','1'=>'二级分类','2'=>'三级分类','3'=>'四级分类','4'=>'五级分类'];

        if ($id==null) {
            $Navig = Navig::orderBy('id','desc')->where('parent_id',null)->paginate(10);
            $count =Navig::where('parent_id',null)->count();
            return view('admin.Navig.index',['Navig' => $Navig,'count'=>$count,'depth'=>$depth]);
        }elseif($id =='a'){
            // dd($id);
            $Navig = Navig::orderBy('id','desc')->where('depth',1)->paginate(10);

            $count =Navig::where('depth',1)->count();
           return view('admin.Navig.index',['Navig' => $Navig,'count'=>$count,'depth'=>$depth]);
        }elseif ($id =='b') {
            $Navig = Navig::orderBy('id','desc')->where('depth',2)->paginate(10);
            $count =Navig::where('depth',2)->count();
            return view('admin.Navig.index',['Navig' => $Navig,'count'=>$count,'depth'=>$depth]);
                
        }


        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id =$_GET['id']?:null;
        return view('admin.Navig.navigadd',['id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request )
    {  
        //接收除_token字段的数据
        $input=$request->except('_token');
        // dd($input);
        
        //判断id是否为空
        if(!$request->input('id')){
            // dd($input);
            $info =Navig::create($input);

        }else{
            $data =Navig::findOrFail($request->input('id'));
            $info =$data->children()->create($input);

       }
       if($info){
                  flash()->overlay('添加成功', '1');
                    return back();

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

        return view('admin.Navig.edit',['Navig' => $Navig]);
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
                ->update(['name'=>$input['name']]);
        }else{
            $updatee =Navig::where('id',$id)
                ->update(['name'=>$input['name'],'url'=>$input['url']]);
        }
        //判断是否修改成功
        if ($updatee) {
            flash()->overlay('修改成功', '1');
                         return redirect('navig/index');
        }else{
             flash()->overlay('修改失败', '5');
                         return redirect('navig/index');        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aa=Navig::where('parent_id',$id)->get()->toArray();
        // dd($aa);
       $des= Navig::where('id',$id)->first();
       $zl=$des->getDescendants()->toArray();
       // $aa=toArray($zl);
       // dd($zl);
       $va =[];
       foreach ($zl as  $k => $v) {

           $va[$k] = $v['name'];

       }
       // dd($va);
       $bb = [];
       // $qw= Navig::all();
       if($bb === $aa){
            
            $des->delete();
            flash()->overlay('删除成功', '1');
            return redirect('navig/index');
       }else{
           flash()->overlay('删除失败，请先删除'."“$va[$k]类别”", '5');
             return back();
       }
    }
}