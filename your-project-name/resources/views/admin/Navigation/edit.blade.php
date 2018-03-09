@extends('layouts.master')

@section('title', '考拉海购--后台主站')

@section('css')
   
    <link rel="stylesheet" href="{{asset('etsc/css/bootstrap.min.css')}}">
@endsection

@section('content')

    <div class="x-body">
      <div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="{{url('admin/index')}}">首页</a>
        <a href="{{url('admin/list')}}">分类列表</a>
        <a>
          <cite>管理分类列表</cite></a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('navigation/index')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
      
    </div>

        @include('flash::message')

        <form class="layui-form" method="post" action='{{ url("navigation/update/$Navig->id")}}' enctype="multipart/form-data" >
          {{csrf_field()}}
          <div class="layui-form-item">
            <input type="hidden" name="id" value="{{$Navig->id}}">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>类别名
              </label>
              <div class="layui-input-inline">
                  <input type="text"  name="name"  class="layui-input" value="{{$Navig->name}}">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>
                    @if (count($errors) > 0)
                     <span class="x-red">{{ $errors->first('name') }}</span> 
                     @else  
                     此项慎重修改
                    @endif             
              </div>
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>图标
              </label>
              <div class="layui-input-inline">
                  <input type="file" name="url" 
                  class="layui-input" value="{{$Navig->url}}">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('url') }}</span>  
                    @endif
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn">
                  确认修改
              </button>

          </div>
        </form>
<!--       @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif -->
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
 