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
          <cite>添加商品</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
       <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('admin/goodindex')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
      
    </div>
      
        @include('flash::message')

        <form class="layui-form" method="post" action="{{url('admin/goodstore')}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="hidden" name="img" value="" id="img">
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>所属分类
              </label>
              <div class="layui-input-inline">
                  <select name='' >
                    <option>请选择分类名</option>
                    @foreach ($data as $k => $v) 
                    <option value="{{$v['id']}}">{{$v['name']}}</option>
                    @endforeach
                  </select>
                  <br> 
                  <select name='' >
                      <option value="">请选择商品属性</option>
                  </select>
                   <br>
                  <select name="type_id" id="kkk" lay-ignore>
                    <option value="">请选择商品属性值</option>
                  </select>

              </div>
          
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>商品名
              </label>
               <div class="layui-input-inline">
                  <input type="text" name="title"  class="layui-input">
              </div>
          </div>

          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="margin-left: 20px;">
                  <span class="x-red">*</span>图片
              </label>
              
              <div class="layui-form-mid layui-word-aux">
                  <button type="button" class="layui-btn" id="test1">
                <i class="layui-icon">&#xe67c;</i>上传图片
              </button>
                
              </div>
          </div>
          
           <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>价格
              </label>
               <div class="layui-input-inline">
                  <input type="text" name="price"  class="layui-input">
              </div>
          </div>

           <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>库存数量
              </label>
               <div class="layui-input-inline">
                  <input type="text" name="nums"  class="layui-input">
              </div>
          </div>
          
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>商品详情
              </label>
               <div class="layui-input-inline">
                  <textarea name="content" class="layui-textarea"></textarea>
              </div>
          </div>

          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label" style="width: 100px;">
              </label>
              <button  class="layui-btn">
                  添加
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
          ,url: '{{ url("admin/gooduplode")}}'//上传接口到那个控制器
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


