@extends('layouts.master')

@section('title', '考拉海购--后台主站')

@section('css')
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
          <cite>商品属性管理</cite>
        </a>
        <a>
          <cite>修改属性名</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
       <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('admin/goodtypeindex')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
      
    </div>
      
        @include('flash::message')

        <form class="layui-form" method="post" action='{{url("admin/goodtypeupdate/$goodtype->id")}}'>
          {{csrf_field()}}
         
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label" style="width: 150px;">
                  <span class="x-red">*</span>所属三级分类
              </label>
              <div class="layui-input-inline">
                  <input type="text"  name=""  class="layui-input" value="{{$name2->name}}" disabled="disabled" style="background: #efefe0">
              </div>
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 150px;">
                  <span class="x-red">*</span>属性名
              </label>
               <div class="layui-input-inline">
                  <input type="text" name="gt_name"  class="layui-input" value="{{$goodtype->gt_name}}">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('gt_name') }}</span>  
                    @endif
              </div> 
          </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label" style="width: 150px;">
              </label>
              <button  class="layui-btn">
                  修改
              </button>

          </div>
        </form>

    </div>
@endsection


