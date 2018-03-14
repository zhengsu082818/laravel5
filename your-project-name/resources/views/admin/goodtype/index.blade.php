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
          <cite>商品管理</cite>
        </a>
        <a>
          <cite>商品属性管理</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
    </div>
    
    <div class="x-body">
        <form class="layui-form layui-col-md12 x-so" action="" method="get">
          <input type="text" name="gt_name"  placeholder="请输入商品属性" autocomplete="off" class="layui-input" 
          value="{{$keywords?$keywords:''}}">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
          <a href="{{url('admin/goodtypecreate')}}" style="color:#fff;"><span class="x-left layui-btn" style="line-height:40px">添加属性名</span></a>
        <span class="x-right layui-btn" style="line-height:40px">共有数据：<a href="javascript:;" style="color:#fff;">{{$count}}</a>  条</span>
      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">所属分类</th>
            <th style="text-align: center;">属性名</th>
            <th style="text-align: center;">添加时间</th>
            <th style="text-align: center;">操作</th></tr>
        </thead>
        <tbody>
          @foreach ($goodtype as $v)
              <tr>
                <td style="text-align: center;">{{$v->id}}</td>
                <td style="text-align: center;">{{$v->nav_id}}</td>
                <td style="text-align: center;">{{$v->gt_name}}</td>
                <td style="text-align: center;">{{$v->created_at}}</td>
                <td class="td-manage" style="text-align: center;">
                  <a href='{{url("admin/goodtypeedit/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini">修改</button>
                  </a>
                  <a href='{{url("admin/goodtypedestroy/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini layui-btn-danger">删除</button>
                  </a>
                </td>
              </tr>
          @endforeach    
        </tbody>

      </table>

            <center>
            {!! $goodtype->appends(['gt_name' => $keywords])->render() !!}
            </center>
    </div>
  @endsection