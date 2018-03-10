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
        <a href="{{url('')}}">首页</a>
        <a href="{{url('')}}">分类列表</a>
        <a>
          <cite>管理分类列表</cite></a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('banner')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
      
    </div>

        @include('flash::message')

        <form class="layui-form" method="post" action="{{url('banner/store')}}" enctype="multipart/form-data" >
          {{csrf_field()}}
          <input type="hidden" name="img" value="" id="img">
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>类别名
              </label>
              <div class="layui-input-inline">
                  <select >
                     <option>已启用</option>
                     <option>已禁用</option>
                  </select>
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>           
              </div>
          </div>
           <div class="layui-form-item">
            <input type="hidden" name="id" value="">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>地址
              </label>
              <div class="layui-input-inline">
                 <input type="text" name="">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>           
              </div>
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>图标
              </label>
              
              <div class="layui-form-mid layui-word-aux">
                  <button type="button" class="layui-btn" id="test1">
                <i class="layui-icon">&#xe67c;</i>上传图片
              </button>
                
                  @if (count($errors) > 0)

                    <span class="x-red">{{ $errors->first('url') }}</span>  
                    @endif
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn">
                  提交
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
      layui.use('upload', function(){
        var upload = layui.upload;
         var $ = layui.$ ;
         $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        //执行实例
        var uploadInst = upload.render({
          elem: '#test1' //绑定id
          ,url: '{{ url("banner/uplode")}}'//上传接口到那个控制器
          ,field:'file'//设置字段名 控制器接受
          ,done: function(res){
           $name = res.data.src;
           // alert($name);  
           $('#img').val($name);
          }
          ,error: function(){
            
          }
        });
      });
      </script>
@endsection
