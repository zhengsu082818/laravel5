<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Navigation;
use App\Http\Requests;
use App\Http\Controllers\Tupian\TupianController;
use App\Http\Controllers\Controller;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Navig = Navigation::paginate(5);
        $count =Navigation::count();
        return view('admin.Navigation.navigation',['Navig' => $Navig,'count'=>$count]);
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
     * 加载修改页面
     */
    public function edit($id)
    {
        //模型查询单挑数据加载进模板
        $Navig = Navigation::where('id',$id)->first();
        return view('admin.Navigation.edit',['Navig' => $Navig]);
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
        dd($input=$request->except('_token'));
       $data['name']=$input['name'];
        $data=[];
        $pic = new TupianController;
        // dd($pic);
        $data['url']=$pic->picture($request,'url','storage/uploads/');
         $data['name']=$input['name'];
            dd($data);
         $info = Navigation::where('id',$id)
                            ->update($data);
                    // dd($id);
         if($info){
              flash()->overlay('修改成功', '1');
                return redirect('navigation/index');

                   }else{
              flash()->overlay('修改失败', '5');
                return redirect("navigation/edit/{$id}");
                    }
    }
        // }else{
        //                 flash()->overlay('请选择需要上传的图片', '5');
        //                  return redirect("navigation/edit/{$id}");
        // }
        
            
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        //执行删除
        $dele =Navigation::where('id',$id)->delete();
        //判断是否删除成功
       if ($dele) {

                flash()->overlay('删除成功', '1');
                return redirect('navigation/index');
        }else{

                flash()->overlay('删除失败', '5');
                return redirect('navigation/index');
        }
    }
}
