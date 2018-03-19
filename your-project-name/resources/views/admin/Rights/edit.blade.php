@extends('layouts.master')

@section('title', '考拉海购--后台主站')
 
  @section('css')
     <link rel="stylesheet" href="{{asset('etsc/css/bootstrap.min.css')}}">      
  @endsection

     @section('content')
     <div class="x-body">
      <div class="x-nav">
      <span class="layui-breadcrumb">
        <a>
          <cite>管理员管理</cite>
        </a>
        <a>
          <cite>职位管理列表</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('admin/role')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回职位列表</a>
    </div>
    
    <div class="x-body">
        
    
        <div class="x-body">
        <form action='{{url("admin/role/update/$role->id")}}' method="post" class="layui-form layui-form-pane">
            {{csrf_field()}}
                <div class="layui-form-item">
                    <label for="name" class="layui-form-label">
                        <span class="x-red">*</span>角色名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" name="display_name" value="{{$role->display_name}}" 
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">
                        拥有权限
                    </label>
                                    <div class="layui-input-block">
                                        @foreach($perms as $v)
                                            
                                        <input name="pid[]" type="checkbox"
                                            @foreach($role->perms as $checkperms)
                                                @if($checkperms['id']==$v['id'])
                                                    checked
                                                @endif
                                            @endforeach
                                         value="{{$v->id}}"> {{$v->display_name}}
                                             
                                        @endforeach
                                    </div>
                                
                </div>
                <div class="layui-form-item layui-form-text">
                    <label for="desc" class="layui-form-label">
                        描述
                    </label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入内容" name="description" class="layui-textarea">{{$role->description}}</textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                <button class="layui-btn" lay-submit="" lay-filter="add">确定修改</button>
              </div>
            </form>
            @if (count($errors) > 0)

                    <span class="x-red">{{ $errors->first('url') }}</span>  
             @endif
    </div>

            <center>
           
            </center>
    </div>
    
    @endsection

    @section('js')
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
          
          });

          
      @endsection
 