<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//后台管理职位控制器
class RolesController extends Controller
{
        // 编写验证规则
    protected $rules =[
        "name"=>'required|max:255|alpha',
        'display_name' => 'required|max:255',
        'description' => 'required|min:6',
    ];
    //编写错误信息
    protected $messages =[
        "name.required"=>'请输入职位名',
        "name.max"=>'职位名过长',
        "name.alpha"=>'请输入纯字母格式',
        "display_name.required"=> '请输入职位名称',
        "display_name.max"=>'职位名过长',
        "description.required"=>'请输入职位描述',
        "description.min"=>'最少6字描述',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::orderBy('id','desc')->paginate(5);
            $count = Role::count();
             return view('admin.Rights.index',['role'=>$role,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Rights.create');
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
       // dd($input);
       $role =new Role;
       $role->name = $input['name'];
       $role->display_name = $input['display_name'];
       $role->description = $input['description'];

       $role->save();//执行添加数据库
       
            flash()->overlay('添加成功', '1');
            return redirect('admin/role');
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
        $role = Role::with('perms')->findOrFail($id);//查询需要修改的职位
        $perms =Permission::all();//查询所有的权限
        // dd($role->toArray());
        return view('admin.Rights.edit',['role' => $role,'perms'=>$perms]);
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
        // dd($request->input());
        $role =Role::findOrFail($id);//查询该职位的所有信息
        // dd($role->toArray());
        $role->display_name =$request->input('display_name');//给数据库的display_name更新赋值
        $role->description =$request->input('description');//给数据库的description更新赋值
        $role ->save();//保存

        $pid =$request->input('pid',[]);//接收权限id
        // dd($pid);
        $info =$role->perms()->sync($pid);//给职位表和权限表的关联表添加数据

        if($info){
            flash()->overlay('修改成功', '1');
            return redirect("admin/role");
        }else{
            flash()->overlay('修改失败', '5');
            return redirect("admin/role/edit/$id");
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
        $des =Role::where('id',$id)->first();//查询
        $info=$des->delete();//执行删除
        if($info){
            flash()->overlay('删除成功', '1');
            return redirect("admin/role");
        }else{
            flash()->overlay('修改失败', '5');
            return redirect("admin/role/destroy/$id");
        }
    }
}
