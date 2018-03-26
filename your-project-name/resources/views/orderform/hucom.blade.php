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
        <a href='{{url("order/$id")}}'>
          <cite>用户订单列表</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
    </div>
    
    <div class="x-body">
        <form class="layui-form layui-col-md12 x-so" action="" method="get">
          <input type="text" name="where"  placeholder="请输此用户/订单号/状态/商品名" autocomplete="off" class="layui-input" value="">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
         
        <span class="x-right layui-btn" style="line-height:40px">此用户共有订单：<a href="javascript:;" style="color:#fff;"></a> {{$count}} 条</span>
       
      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">缩略图</th>
            <th style="text-align: center;">订单号</th>
            <th style="text-align: center;">商品名</th>
            <th style="text-align: center;">售价</th>
            <th style="text-align: center;">购买数量</th>
            <th style="text-align: center;">总计(元)</th>
            <th style="text-align: center;">状态</th>
            <th style="text-align: center;">购买时间</th>
            <th style="text-align: center;">操作</th>
          </tr>
        </thead>
        <tbody>
           
           @if (count($info) === 0)
             <h2>该用户暂无订单!</h2>
            @endif
           @for ($i = 0; $i < count($info); $i++)
 
              <tr>
                <td style="text-align: center;">{{$id=$info[$i]->id}}</td>
                <td style="text-align: center;"><img src="{{$info[$i]->img}}" alt=""></td>
                <td style="text-align: center;">{{$info[$i]->orderid}}</td>
                <td style="text-align: center;">{{$info[$i]->product}}</td>
                <td style="text-align: center;">{{$info[$i]->price}}</td>
                <td style="text-align: center;">{{$info[$i]->num}}</td>
                <td style="text-align: center;">{{$info[$i]->aotal}}</td>
                <td style="text-align: center;">{{$info[$i]->state}}</td>
                <td style="text-align: center;">{{$info[$i]->created_at}}</td>
                <td style="text-align: center;"><a href={{url("order/$id/edit")}}>修改此订单状态</a></td>
                </th>
              </tr>
             
           @endfor
        </tbody>

      </table>

            <center>
           {!! $info->appends(['where' => $where])->render() !!}
              
            </center>
    </div>
  @endsection