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
          <cite>修改商品</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
       <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('admin/goodindex')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
      
    </div>
      
        @include('flash::message')

        <form class="layui-form" method="post" action='{{url("admin/goodupdate/$good->id")}}' enctype="multipart/form-data">
          {{csrf_field()}}
         
          <input type="hidden" name="img"  value="" id="img">
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>商品名
              </label>
              <div class="layui-input-inline">
                  <input type="text" name="title"  class="layui-input" value="{{$good->title}}">
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
                  <span class="x-red">*</span>图标
              </label>
              
              <div class="layui-form-mid layui-word-aux">
                  <button type="button" class="layui-btn" id="tubiao">
                <i class="layui-icon">&#xe67c;</i>上传图片
              </button>
              </div>
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>价格
              </label>
              <div class="layui-input-inline">
                  <input type="text" name="price"  class="layui-input" value="{{$good->price}}">
              </div>  
               <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('price') }}</span>  
                    @endif
              </div>  
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>数量
              </label>
              <div class="layui-input-inline">
                  <input type="text" name="nums"  class="layui-input" value="{{$good->nums}}">
              </div>  
               <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('nums') }}</span>  
                    @endif
              </div>  
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
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label" style="width: 100px;">
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
      layui.use(['upload','form'], function(){
        var upload = layui.upload;
         var $ = layui.$ ;
         $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
         //执行实例
        var uploadInst = upload.render({
          elem: '#tubiao' //绑定id
          ,url: '{{ url("admin/gooduplode")}}'//上传接口到那个控制器
          ,field:'file'//设置字段名 控制器接受
          ,done: function(res){
           $name = res.data.src;
           // alert($name);  
           $('#img').val($name);
            $('#cc').attr("src","/storage/uploads/shopping/"+res.data.src);
          }
          ,error: function(){
            
          }
        });
      });
      </script>
@endsection
