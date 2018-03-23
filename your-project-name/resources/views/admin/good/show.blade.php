@extends('layouts.master')

@section('title', '考拉海购--后台主站')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('etsc/css/bootstrap.min.css')}}">
@endsection

@section('content')

    <div class="x-body">
      <div class="x-nav">
      <span class="layui-breadcrumb">
        <a>
          <cite>商品管理</cite>
        </a>
        <a>
          <cite>商品列表管理</cite>
        </a>
        <a>
          <cite>查看商品详情</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
       <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('admin/goodindex')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
      
    </div>
      
        @include('flash::message')

          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>商品名
              </label>
              <div class="layui-input-inline">
                  <input type="text" name="title"  disabled="disabled" class="layui-input" value="{{$good->title}}" style="width: 400px;">
              </div>  
               <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('title') }}</span>  
                    @endif
              </div>  
          </div>

          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>图片
              </label>
              <img src="/storage/uploads/shopping/{{$good->img}}" style="width:100px;height:100px;" id="cc">
          </div>
         
  
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>详情
              </label>
              <div class="col-sm-10" > 
                @include('vendor.UEditor.head')  
                <!-- 加载编辑器的容器 -->  
                <script id="container" name="content" type="text/plain" style='width:600px;height:200px;margin-left: -15px;'>  
                  {!!$good->content!!}
                </script> 
                  
                <!-- 实例化编辑器 -->  
                <script type="text/javascript">  
                    var ue = UE.getEditor('container');  
                    ue.ready(function(){  
                        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');   
                    });  
                </script>  
              </div>  
          </div>
         
       

    </div>
@endsection

