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
        <a href="{{url('order')}}">
          <cite>订单管理</cite>
        </a>
        <a href='{{url("order/$uid")}}'>
          <cite>用户订单列表</cite>
          
        </a>
        <a href="">
          <cite>修改用户订单列表</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
       <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
      
    </div>
        
        <form class="layui-form" method="post" action='{{url("order")}}' enctype="multipart/form-data" >
          {{csrf_field()}}
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>状态
              </label>
              <input type="hidden" name='id' value="{{$id}}">
              <div class="layui-input-inline">
                @if($state != '已删除')
                  <select name="state">
                   
                    <option value="待发货"
                        @if($state === '待发货')
                          selected
                        @endif >待发货
                    </option>
                    <option value="待收货"
                        @if($state === '待收货')
                          selected
                        @endif >待收货
                    </option>
                    <option value="待评价"
                        @if($state === '待评价')
                          selected
                        @endif >待评价
                    </option>
                  </select> 
                  @else
                  <select name="state">      
                    <option value="已删除" selected>
                      已删除
                    </option>
                  </select> 
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
