@extends('layouts.master')

@section('title', '考拉海购--后台主站')
  
  @section('css')
     <link rel="stylesheet" href="{{asset('etsc/css/bootstrap.min.css')}}">      
  @endsection
  
  @section('content')
    <div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">管理员列表</a>
        
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
    <div class="x-body">
     
      <xblock>
        <a class="layui-btn" id="backid" href="{{url('banner/create')}}"><i class="layui-icon"></i>添加</a>
        <span class="x-right" style="line-height:40px">共有数据：<a href="javascript:;" style="color: red">{{$count}}</a>  条</span>
      </xblock>

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
                   @if($v->static == '1')
                  <span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>
                  @endif
                  @if($v->static == '2')
                  <span class="layui-btn layui-btn-normal layui-btn-mini" style="">未启用</span>
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
          
            </center>
    </div>
  @endsection