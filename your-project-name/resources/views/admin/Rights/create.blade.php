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
        <a  class="layui-btn" href="{{url('admin/role')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回职位列表</a>
    </div>
    <div style="height: 40px;">
      
    </div>

        @include('flash::message')

        <form class="layui-form" method="post" action='{{url("admin/role/store")}}'>
          {{csrf_field()}}
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 90px;">
                  <span class="x-red">*</span>职位名
              </label>
              <div class="layui-input-inline">
                  <input type="text" name="name" class="layui-input" value="" placeholder="请输入职位名">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                    @if (count($errors) > 0)
                     <span class="x-red">{{ $errors->first('name') }}</span> 
                     @else  
                     (纯字母)
                    @endif             
              </div>
          </div>
          <input type="hidden"  name="id"  class="layui-input" value="">
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label" style="width: 90px;">
                  <span class="x-red">*</span>职位名称
              </label>
              <div class="layui-input-inline">
                <input type="text"  name="display_name"  class="layui-input" value="" placeholder="请输入职位名称">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('display_name') }}</span>  
                    @endif
              </div>
          </div>
          <div class="layui-form-item">
             <label for="username" class="layui-form-label" style="width: 90px;">
                  <span class="x-red">*</span>职位描述
              </label>
                <div class="layui-input-inline">
                  <textarea placeholder="请输入职位描述内容" name="description" class="layui-input" ></textarea>
                </div>
                @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('description') }}</span>  
                 @endif
          </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label" style="width: 90px;">
              </label>
              <button  class="layui-btn">
                  确认添加
              </button>

          </div>
        </form>
       

    </div>
@endsection

@section('js')
      
@endsection
