@extends('layouts.master')

@section('title', '考拉海购--后台主站')

@section('css')
    <link rel="stylesheet" href="{{asset('etsc/css/bootstrap.min.css')}}">
@endsection
  
@section('content')
    <div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">分类列表</a>
        
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
    <div class="x-body">
        <span class="x-right" style="line-height:40px">共有数据：<a href="javascript:;" style="color: red">{{$count}}</a>  条</span>
        @include('flash::message')
      <table class="layui-table">
        
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">类别名</th>
            <th style="text-align: center;">图标</th>
            <th style="text-align: center;">修改时间</th>
            <th style="text-align: center;">操作</th></tr>
        </thead>
        <tbody>
          @foreach ($Navig as $v)
              <tr>
                <td style="text-align: center;">{{$v->id}}</td>
                <td style="text-align: center;">{{$v->name}}</td>
                <td style="text-align: center;">
                  <img src='{{asset("$v->url")}}' style="width: 20px;height: 20px;">
                </td>
                <td style="text-align: center;">{{$v->updated_at}}</td>
                <td class="td-manage" style="text-align: center;">
                  <a href='{{url("navigation/edit/$v->id")}}' style="color: #fff;"><span class="layui-btn">修改</span></a>
                 <a href='{{url("navigation/destroy/$v->id")}}'  style="color: #fff;"> <span class="layui-btn layui-btn-danger">删除</span></a
                </td>
              </tr>
          @endforeach    
        </tbody>

      </table>

            <center>
            {!! $Navig->render() !!}
            </center>
    </div>
@endsection
  