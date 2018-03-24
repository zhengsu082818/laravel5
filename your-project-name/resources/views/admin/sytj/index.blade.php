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
          <cite>首页推荐</cite>
        </a>
        <a>
          <cite>查看首推列表</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
    </div>
    
    <div class="x-body">
        <form class="layui-form layui-col-md12 x-so" action="{{url('admin/sytjindex')}}" method="get">
          <input type="text" name="name"  placeholder="请输入关键字" autocomplete="off" class="layui-input" 
          value="{{$keywords?$keywords:''}}">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
        <a href="{{url('admin/sytjcreate')}}" style="color:#fff;"><span class="x-left layui-btn" style="line-height:40px">添加推荐</span></a>
        <span class="x-left layui-btn" style="line-height:40px;float: right;">共有数据：<a href="javascript:;" style="color:#fff;"></a> {{$count}} 条</span>
      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">推荐标题</th>
            <th style="text-align: center;">状态</th>
            <th style="text-align: center;">创建时间</th>
            <th style="text-align: center;">操作</th>
          </tr>
        </thead>
        <tbody>
          @foreach($list as $v)
            <tr>
              <td style="text-align: center;">{{$v->id}}</td>
              <td style="text-align: center;">{{$v->name}}</td>
              <td class="td-status" style="text-align: center;">
                @if($v->stated == '1')
                  <span class="layui-btn layui-btn-mini layui-btn-normal">启用</span>
                  @endif
                  @if($v->stated == '0')
                  <span class="layui-btn layui-btn-mini layui-btn-warm">禁用</span>
                  @endif
              </td>
              <td style="text-align: center;">{{$v->created_at}}</td>
              <td class="td-manage" style="text-align: center;">
                  <a href='{{url("admin/sytjshow/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini">修改</button>
                  </a>
                  <a href='{{url("admin/sytjdestroy/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini layui-btn-danger">删除</button>
                  </a>
              </td>
            </tr>
          @endforeach
        </tbody>

      </table>

            <center>
               {!! $list->appends(['name' => $keywords])->render() !!}  
            </center>
    </div>
  @endsection