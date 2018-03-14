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
          <cite>商品分类管理</cite>
        </a>
        <a>
          <cite>侧边导航分类</cite>
        </a>
        <a>
          <cite>添加分类</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('navig/index')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回主类列表</a>
    </div>
    <div style="height: 40px;">
      
    </div>

        @include('flash::message')

        <form class="layui-form" method="post" action='{{ url("navig/store")}}' enctype="multipart/form-data" >
          {{csrf_field()}}
          <div class="layui-form-item">
            <input type="hidden" name="id" value="">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>类别名
              </label>
              <div class="layui-input-inline">
                <input type="hidden"  name="id"  class="layui-input" value="{{$id}}">
                <input type="text"  name="name"  class="layui-input" value="">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>           
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>图标
              </label>
              <div class="layui-form-mid layui-word-aux">
                  <button type="button" class="layui-btn" id="test1">
                    <i class="layui-icon">&#xe67c;</i>上传图片
                  </button>
                <input type="hidden"  name="url"  class="layui-input" value="" id="imgur">
                <input type="hidden"  name="img"  class="layui-input" value="" id="img">
                  @if (count($errors) > 0)

                    <span class="x-red">{{ $errors->first('url') }}</span>  
                    @endif
              </div>
          </div>

          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn">
                  确认添加
              </button>

          </div>
        </form>
        <hr>
        <span>*注：当您在添加主类时，上传图片框是为主类添加图标的展示图片;</span><br>
        <span>*注：当您在添加分类时，上传图片框是为分类类添加入口的展示图片！！</span>

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
          elem: '#test1' //绑定元素
          ,url: '{{ url("navig/tupiana")}}'//上传接口
          ,field:'file'
          ,done: function(res){
              $('#imgur').val(res.data.src);    
          }
          ,error: function(){
            //请求异常回调
            return "上传失败！";
          }
        });
      });
      </script>
@endsection
