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
          <cite>首页推荐管理</cite>
        </a>
        <a>
          <cite>添加首推标题</cite>
        </a>
      </span>
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
       <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('admin/sytjindex')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
    </div>
        @include('flash::message')
        <form class="layui-form" method="post" action="{{url('admin/sytjstore')}}">
          {{csrf_field()}}
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>顶级类别名
              </label>
              <div class="layui-input-inline">
                  <select name='name'>
                      <option value="0">请选择类别名</option>
                      @foreach($nav as $v)
                      <option value="{{$v->name}}">{{$v->name}}</option>
                      @endforeach
                  </select>
              </div>
          </div>
           <div class="layui-form-item">
              <label for="L_email" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>状态
              </label>
              <div class="layui-input-inline">
                  <select name="stated">
                    <option value="1" >启用
                    </option>
                    <option value="0"  
                     >禁用
                    </option>
                  </select>
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label" style="width: 100px;">
              </label>
              <button  class="layui-btn">
                  提交
              </button>
          </div>
        </form>
    </div>
@endsection


