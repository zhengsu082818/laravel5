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
          <input type="text" name="name"  placeholder="请输入关键字" autocomplete="off" class="layui-input" value="">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
         <a href="{{url('admin/bannercreate')}}" style="color:#fff;"><span class="x-left layui-btn" style="line-height:40px">添加轮播</span></a>
        <span class="x-right layui-btn" style="line-height:40px">共有数据：<a href="javascript:;" style="color:#fff;">{{$count}}</a>  条</span>
       
      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">图片</th>
            <th style="text-align: center;">地址</th>
            <th style="text-align: center;">加入时间</th>
            <th style="text-align: center;">状态</th>
            <th style="text-align: center;">操作</th></tr>
        </thead>
        <tbody>
          @foreach ($banner as $v)
              <tr>
                <td style="text-align: center;">{{$v->id}}</td>
                <td style="text-align: center;"><img src="/storage/uploads/{{$v->img}}"></td>
                <td style="text-align: center;">{{$v->url}}</td>
                <td style="text-align: center;">{{$v->created_at}}</td>
                <td style="text-align: center;">
                   @if($v->static == '显示')
                  <span class="layui-btn layui-btn-normal layui-btn-mini">显示</span>
                  @endif
                  @if($v->static == '隐藏')
                  <span class="layui-btn layui-btn-normal layui-btn-mini" style="">隐藏</span>
                  @endif
                </td>
                 
                <td class="td-manage" style="text-align: center;">
                 <span class="layui-btn"> <a href='{{url("admin/edit/$v->id")}}' style="color: #fff;">修改</a></span>
                   <span class="layui-btn layui-btn-danger"><a href='{{url("admin/destroy/$v->id")}}'  style="color: #fff;">删除</a></span>
                </td>
              </tr>
          @endforeach    
        </tbody>

      </table>

            <center>
                 {!! $banner->render() !!}
            </center>
    </div>
  @endsection