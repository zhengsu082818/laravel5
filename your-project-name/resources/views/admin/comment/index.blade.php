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
          <cite>商品评论管理</cite>
        </a>
        <a>
          <cite>用户评论列表</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
       <i class="layui-icon" style="line-height:38px">ဂ</i></a>
    </div>
    
    <div class="x-body">
        <form class="layui-form layui-col-md12 x-so" action="" method="get">
          <input type="text" name="name"  placeholder="请输入关键字" autocomplete="off" class="layui-input" value="{{$keywords?$keywords:''}}">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
        <!--  -->
         <a href="{{url('admin/commentstore')}}" style="color:#fff;"><span class="x-left layui-btn" style="line-height:40px">添加数据</span></a>
        <span class="x-right layui-btn" style="line-height:40px">共有数据：<a href="javascript:;" style="color:#fff;">{{$count}}</a>  条</span>
      <table class="layui-table">
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">商品编号</th>
            <th style="text-align: center;">用户ID</th>
            <th style="text-align: center;">评论内容</th>
            <th style="text-align: center;">回复</th>
            <th style="text-align: center;">回复时间</th>
            <th style="text-align: center;">操作</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($homeuser as $v)
              <tr>
                <td style="text-align: center;">{{$v->id}}</td>
                <td style="text-align: center;">{{$v->sid}}</td>
                <td style="text-align: center;">{{$v->homeuser['name']}}</td> 
                <td style="text-align: center;">
                  <!-- 判断这个字段是否为空 -->
                @if($v->parent_id === null)
                   <a href='javascript:;' style="color:red" layui-btn layui-btn-mini>
                   首次评论
                  </a>{{$v->comment}}
                @else
                    <a href='javascript:;' style="color:pink" layui-btn layui-btn-mini>
                   追加评论
                  </a>{{$v->comment}}
                @endif
                </td>
                <td style="text-align: center;">{{$v->reply}}</td>
                <td style="text-align: center;">{{$v->created_at}}</td>
                <td class="td-manage" style="text-align: center;">
                  <a href='{{url("admin/commentedit/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini">回复</button>
                  </a>
                </td>
              </tr>
          @endforeach  
        </tbody>
           @include('flash::message')
      </table>
            <center>
               {!! $homeuser->render() !!}  
            </center>
    </div>
  @endsection
