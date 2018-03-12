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
          <cite>首页轮播管理</cite>
        </a>
        <a>
          <cite>图片轮播列表</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
    </div>
    
    <div class="x-body">
        <form class="layui-form layui-col-md12 x-so" action="" method="get">
          <input type="text" name="name"  placeholder="请输用户名/手机号" autocomplete="off" class="layui-input" value="">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
         <a href="{{url('admin/bannercreate')}}" style="color:#fff;"><span class="x-left layui-btn" style="line-height:40px">添加轮播</span></a>
        <span class="x-right layui-btn" style="line-height:40px">共有数据：<a href="javascript:;" style="color:#fff;"></a>  条</span>
       
      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">用户名</th>
            <th style="text-align: center;">手机号</th>
            <th style="text-align: center;">订单条数</th>
            <th style="text-align: center;">查看详细订单</th></tr>
        </thead>
        <tbody>

          @foreach ($info as $v)
              <tr>
                <td style="text-align: center;">{{$v->id}}</td>
                <td style="text-align: center;"><img src="/storage/uploads/{{$v->img}}"></td>
                <td style="text-align: center;">{{$v->name}}</td>
                <td style="text-align: center;">{{$v->phone}}</td>
                <td style="text-align: center;">{{$v->num}}</td>
                 
              </tr>
          @endforeach    
        </tbody>

      </table>

            <center>
          
            </center>
    </div>
  @endsection