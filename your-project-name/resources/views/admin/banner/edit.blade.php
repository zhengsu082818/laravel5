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
          <cite>首页轮播管理</cite>
        </a>
        <a>
          <cite>图片轮播管理</cite>
        </a>
        <a>
          <cite>修改轮播</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
       <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('admin/bannerindex')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
      
    </div>
        @include('flash::message')
        <form class="layui-form" method="post" action='{{url("admin/bannerupdate/$banner->id")}}' enctype="multipart/form-data" >
          {{csrf_field()}}
         
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>状态
              </label>

              <input type="hidden" name="imgurl" value="{{$banner->img}}" id="imgurl">
              <div class="layui-input-inline">
                  <select name="static">
                    <option value="启用" 
                      @if($banner->static === '启用')
                        selected
                      @endif >启用
                    </option>
                    
                    <option value="禁用"  
                      @if($banner->static === '禁用')
                         selected
                      @endif>禁用
                    </option>
                     
                  
                  </select>
              </div>
           
          </div>
           <div class="layui-form-item">
            <input type="hidden" name="id" value="">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>图片
              </label>
              <img src="/storage/uploads/{{$banner->img}}" style="width:200px;height:100px;" id="cc">
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>图标
              </label>
              
              <div class="layui-form-mid layui-word-aux">
                  <button type="button" class="layui-btn" id="test1">
                <i class="layui-icon">&#xe67c;</i>上传图片
              </button>
                
                  
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
          ,url: '{{ url("admin/banneruplode")}}'//上传接口到那个控制器
          ,field:'file'//设置字段名 控制器接受
          ,done: function(res){
           // $name = ;
           // alert($name);  
           $('#imgurl').val(res.data.src);
           $('#cc').attr('src',"/storage/uploads/"+res.data.src);
          }
          ,error: function(){
            
          }
        });
      });
      </script>
@endsection
