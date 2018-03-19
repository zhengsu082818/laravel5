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
          <cite>商品属性值管理</cite>
        </a>
        <a>
          <cite>添加商品属性值</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
       <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('admin/goodtypevalindex')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
      
    </div>
      
        @include('flash::message')

        <form class="layui-form" method="post" action="{{url('admin/goodtypevalstore')}}">
          {{csrf_field()}}
         
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>所属分类名
              </label>
              <div class="layui-input-inline">
                  <select name='yiji_id' lay-filter="gtv">
                    <option value="0">请选择一级类名</option>
                    @foreach ($data as $k => $v) 
                    <option value="{{$v['id']}}">{{$v['name']}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="layui-input-inline">
                  <select name='erji_id' lay-filter="gtv1" id="twolei" >
                    <option  value="{{$v['id']}}">请选择二级类名</option>
                   
                  </select>
              </div>
              <div class="layui-input-inline">
                  <select name='sanji_id' id="threelei" lay-filter="gtv2">
                    <option  value="{{$v['id']}}">请选择三级类名</option>
                  </select>
              </div>
               <div class="layui-input-inline">
                  <select name='gt_id' id="fourlei" >
                    <option  value="{{$v['id']}}">请选择属性类名</option>
                  </select>
              </div>
              
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>属性值
              </label>
               <div class="layui-input-inline">
                  <input type="text" name="gtv_name"  class="layui-input">
              </div>
               <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('gtv_name') }}</span>  
                    @endif
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
      layui.use(['form'], function(){
         var $ = layui.$ ;
         $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        var form = layui.form;
        form.on('select(gtv)', function(data){
          $.ajax({
            type:"GET",
            url:'{{ url("admin/goodtypevalfour") }}?id='+data.value,
            success:function(msg){
              var twolei = $("#twolei");
              twolei.find("option").remove();
              for(var i = 0; i<msg.data.length; i++){ 
                twolei.append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
              }
             form.render('select'); 
            },
            error:function(data){

            }
          })
        });
         var form = layui.form;
        form.on('select(gtv1)', function(data){
          $.ajax({
            type:"GET",
            url:'{{ url("admin/goodtypevalfour2") }}?id='+data.value,
            success:function(msg){
              var threelei = $("#threelei");
              threelei.find("option").remove();

              for(var i = 0; i<msg.data.length; i++){ 
                threelei.append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
              }
             form.render('select'); 
            },
            error:function(data){

            }
          })
        });

         var form = layui.form;
        form.on('select(gtv2)', function(data){
          $.ajax({
            type:"GET",
            url:'{{ url("admin/goodtypevalfour3") }}?id='+data.value,
            success:function(msg){
              var threelei = $("#fourlei");
              threelei.find("option").remove();

              for(var i = 0; i<msg.data.length; i++){ 
                threelei.append("<option value='"+msg.data[i].id+"'>"+msg.data[i].gt_name+"</option>");
              }
             form.render('select'); 
            },
            error:function(data){

            }
          })
        });
  
      });
      </script>
@endsection



