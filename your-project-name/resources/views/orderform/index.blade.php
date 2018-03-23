@extends('layouts.master')

@section('title', '考拉海购--后台主站')
  
  @section('css')
     <link rel="stylesheet" href="{{asset('etsc/css/bootstrap.min.css')}}">      
  @endsection
  
  @section('content')
    <div class="x-body">
      <div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="{{url('order')}}">
          <cite>订单管理</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
    </div>
    
    <div class="x-body">
        <form class="layui-form layui-col-md12 x-so" action="{{url('order')}}" method="get">
          <input type="text" name="where"  placeholder="请输用户名/手机号" autocomplete="off" class="layui-input" value="">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
         
        <span class="x-right layui-btn" style="line-height:40px">所有用户订单：<a href="javascript:;" style="color:#fff;"></a> {{$count}} 条</span>
       
      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">用户名</th>
            <th style="text-align: center;">手机号</th>
            <th style="text-align: center;">订单条数</th>
            <th style="text-align: center;">操作</th></tr>
        </thead>
        <tbody>

          @for ($i = 0; $i < count($info); $i++)
 
              <tr>
                <td style="text-align: center;">{{$id=$info[$i]->id}}</td>
                <td style="text-align: center;">{{$info[$i]->name}}</td>
                <td style="text-align: center;">{{$info[$i]->phone}}</td>
                <td style="text-align: center;">{{$info[$i]->num}}</td>
                <th style="text-align: center;"><a href={{url("order/$id")}}>查看订单状态</a></th>
              </tr>
             
          @endfor
        </tbody>

      </table>
             
            <center>
           {!! $info->appends(['where' => $where])->render() !!}
            </center>
    </div>
  @endsection