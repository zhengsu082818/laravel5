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
          <cite>管理员管理</cite>
        </a>
        <a>
          <cite>管理员列表</cite>
        </a>
      </span>
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
    </div>
    <div class="x-body">
        <form class="layui-form layui-col-md12 x-so" action="{{ url('/admin/list') }}" method="get">
          <input type="text" name="name"  placeholder="请输入关键字" autocomplete="off" class="layui-input" value="{{$keywords?$keywords:''}}">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
         <a href="{{url('admin/create')}}" style="color:#fff;"><span class="x-left layui-btn" style="line-height:40px">添加管理员</span></a>
        <span class="x-right layui-btn" style="line-height:40px">共有数据：<a href="javascript:;" style="color:#fff;">{{$count}}</a>  条</span>
      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">用户名</th>
            <th style="text-align: center;">邮箱</th>
            <th style="text-align: center;">加入时间</th>
            <th style="text-align: center;">状态</th>
            <th style="text-align: center;">操作</th></tr>
        </thead>
        <tbody>
          @foreach ($stus as $v)
              <tr>
                <td style="text-align: center;">{{$v->id}}</td>
                <td style="text-align: center;">{{$v->name}}</td>
                <td style="text-align: center;">{{$v->email}}</td>
                <td style="text-align: center;">{{$v->created_at}}</td>
                <td class="td-status" style="text-align: center;">
                  @if($v->stated == '启用')
                  <span class="layui-btn layui-btn-mini layui-btn-normal">{{$v->stated}}</span>
                  @endif
                  @if($v->stated == '禁用')
                  <span class="layui-btn layui-btn-mini layui-btn-warm">{{$v->stated}}</span>
                  @endif
                </td>
                <td class="td-manage" style="text-align: center;">
                  <a href='{{url("admin/edit/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini">修改</button>
                  </a>
                  <a href='{{url("admin/destroy/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini layui-btn-danger">删除</button>
                  </a>
                </td>
              </tr>
          @endforeach    
        </tbody>
      </table>
            <center>
            {!! $stus->appends(['name' => $keywords])->render() !!}
            </center>
    </div>
  @endsection