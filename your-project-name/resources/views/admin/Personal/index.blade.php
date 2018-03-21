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
          <cite>前台用户中心</cite>
        </a>
        <a>
          <cite>用户收货地址列表</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
    </div>
    
    <div class="x-body">
        <form class="layui-form layui-col-md12 x-so" action="{{ url('/admin/personalindex') }}" method="get">
          <input type="text" name="name"  placeholder="请输入关键字" autocomplete="off" class="layui-input" value="">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
        <span class="x-left layui-btn" style="line-height:40px">共有数据：<a href="javascript:;" style="color:#fff;">{{$count}}</a>  条</span>
      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">用户名</th>
            <th style="text-align: center;">收货人</th>
            <th style="text-align: center;">手机号</th>
            <th style="text-align: center;">收货地址</th>
            <th style="text-align: center;">注册时间</th>
        </thead>
        <tbody>
          @foreach ($username as $v)
              <tr>
                <td style="text-align: center;">{{$v->id}}</td>
                <td style="text-align: center;">{{$v->homeuser->username}}</td>
                <td style="text-align: center;">{{$v->name}}</td>

                <td style="text-align: center;">{{$v->phone}}</td>
                <td style="text-align: center;">{{$v->shdz}}</td>
                <td style="text-align: center;">{{$v->created_at}}</td>
              </tr>
          @endforeach    
        </tbody>

      </table>

            <center>
            </center>
    </div>
  @endsection