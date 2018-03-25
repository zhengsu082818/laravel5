<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Permission;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//后台权限管理控制器
class PermissionsController extends Controller
{
         // 编写验证规则
    protected $rules =[
        "name"=>'required|max:255|string',
        'display_name' => 'required|max:255',
        'description' => 'required|min:6',
    ];
    //编写错误信息
    protected $messages =[
        "name.required"=>'请输入权限名',
        "name.max"=>'权限名过长',
        "name.string"=>'请输入users.index格式',
        "display_name.required"=> '请输入权限名称',
        "display_name.max"=>'权限名过长',
        "description.required"=>'请输入权限描述',
        "description.min"=>'最少6字描述',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = Permission::orderBy('id','desc')->paginate(5);//根据id大小排序查询
        $count = Permission::count();//查询长度
        return view('admin.permission.index',['permission'=>$permission,'count'=>$count]);//加载模板并赋值
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');//加载权限添加页面
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,$this->rules,$this->messages);//验证添加的字段
        $input  = $request->except('_token');//接收除_token字段的值
        $permission =new Permission;
        $permission->name = $input['name'];//更新赋值
        $permission->display_name = $input['display_name'];
        $permission->description = $input['description'];
        $permission->save();//执行添加数据库
        flash()->overlay('添加成功', '1');
            return redirect('admin/permission');
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
        $permission =Permission::findOrFail($id);//查询要更改的单条数据
        // dd($permission);
        return view('admin.permission.edit',['permission' => $permission]);//加载修改页面并赋值
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
        $this->validate($request,$this->rules,$this->messages);//验证添加的字段
        $input  = $request->except('_token');//接收除_token字段的值
        $update =Permission::where('id',$id)->update($input);//执行修改
        //判断是否修改成功
         if ($update) {
            flash()->overlay('修改成功', '1');
            return redirect('admin/permission');
        }else{
             flash()->overlay('修改失败', '5');
             return redirect('admin/permission/update/$id');        
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
       
       $des =Permission::where('id',$id)->first();//查询
       $info=$des->delete();//执行删除
        if($info){
            flash()->overlay('删除成功', '1');
            return redirect("admin/permission");
        }else{
            flash()->overlay('修改失败', '5');
            return redirect("admin/permission/destroy/$id");
        }
    }
}
