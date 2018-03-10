@extends('layouts.master')

@section('title', '考拉海购--后台主站')

  
@section('content')
    <div class="x-body">
      <div class="x-nav">
      <span class="layui-breadcrumb">
        <a>
          <cite>管理员管理</cite>
        </a>
        <a>
          <cite>管理员列表</cite>
        </a>
        <a>
          <cite>管理员列表修改</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('admin/list')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
      
    </div>

        <form class="layui-form" method="post" action='{{ url("admin/update/$user->id")}}'>
          {{csrf_field()}}
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>邮箱
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_email" name="email"  class="layui-input" disabled value="{{$user->email}}" disabled="disabled" style="background: #efefe0">
              </div>
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>用户名
              </label>
              <div class="layui-input-inline">
                  <input type="text" name="name" 
                  class="layui-input" value="{{$user->name}} " disabled="disabled" style="background: #efefe0">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('name') }}</span>  
                    @endif
              </div>
          </div>
          
           <div class="layui-form-item">
              <label class="layui-form-label">
                <span class="x-red">*</span>状态
              </label>
              <div class="layui-input-inline" style="width: 190px;height: 38px;">
                  <select name="stated">
                    <option value="1" 
                      @if($user->stated === '启用')
                        selected
                      @endif >启用
                    </option>
                    
                    <option value="0"  
                      @if($user->stated === '禁用')
                         selected
                      @endif>禁用
                    </option>
                     
                  
                  </select>
              </div>
          </div>

          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn">
                  修改
              </button>

          </div>
      </form>

    </div>
@endsection

@section('js')
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
          
          
        });
    </script>
@endsection
  