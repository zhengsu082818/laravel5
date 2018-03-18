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
        <form class="layui-form layui-col-md12 x-so" action="{{url('admin/bannerindex')}}" method="get">
          <input type="text" name="static"  placeholder="根据状态搜索" autocomplete="off" class="layui-input" 
          value="{{$keywords?$keywords:''}}">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
         <a href="{{url('admin/bannercreate')}}" style="color:#fff;"><span class="x-left layui-btn" style="line-height:40px">添加轮播</span></a>
        <span class="x-right layui-btn" style="line-height:40px">共有数据：<a href="javascript:;" style="color:#fff;">{{$count}}</a>  条</span>
      <table class="layui-table">
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">图片</th>
            <th style="text-align: center;">加入时间</th>
            <th style="text-align: center;">状态</th>
            <th style="text-align: center;">操作</th></tr>
        </thead>
        <tbody>
          @foreach ($banner as $v)
              <tr>
                <td style="text-align: center;">{{$v->id}}</td>
                <td style="text-align: center;"><img src='{{ URL::asset("storage/uploads/$v->img") }}' style="width: 20px;height: 20px;"></td>
                <td style="text-align: center;">{{$v->created_at}}</td>
                <td style="text-align: center;">
                   @if($v->static === '启用')
                  <span class="layui-btn layui-btn-mini layui-btn-normal ">启用</span>

                  @endif
                  @if($v->static === '禁用')
                  <span class="layui-btn layui-btn-mini layui-btn-warm ">禁用</span>
                  @endif
                </td>
                 
               

                <td class="td-manage" style="text-align: center;">
                  <a href='{{url("admin/banneredit/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini">修改</button>
                  </a>
                  <a href='{{url("admin/bannerdestroy/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini layui-btn-danger">删除</button>
                  </a>
                </td>
              </tr>
          @endforeach
        </tbody>
         
           @include('flash::message')
      </table>

            <center>
             {!! $banner->appends(['static' => $keywords])->render() !!}  
            </center>
    </div>
  @endsection
