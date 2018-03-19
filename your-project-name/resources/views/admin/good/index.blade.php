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
          <cite>商品列表管理</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
    </div>
    
    <div class="x-body">
        <form class="layui-form layui-col-md12 x-so" action="" method="get">
          <input type="text" name="name"  placeholder="请输入关键字" autocomplete="off" class="layui-input" 
          value="{{$keywords?$keywords:''}}">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
          <a href="{{url('admin/goodcreate')}}" style="color:#fff;"><span class="x-left layui-btn" style="line-height:40px">添加商品</span></a>
        <span class="x-right layui-btn" style="line-height:40px">共有数据：<a href="javascript:;" style="color:#fff;">{{$count}}</a>  条</span>
      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">所属分类</th>
            <th style="text-align: center;">所属属性名</th>
            <th style="text-align: center;">所属属性值</th>
             <th style="text-align: center;">标题</th>
              <th style="text-align: center;">图片</th>
               <th style="text-align: center;">价格</th>
                <th style="text-align: center;">库存数量</th>
            <th style="text-align: center;">添加时间</th>
            <th style="text-align: center;">操作</th></tr>
        </thead>
        <tbody>
          @foreach ($goods as $v)
              <tr>
                <td style="text-align: center;">{{$v->id}}</td>
                <td style="text-align: center;">{{$v->navig->name}}</td>
                <td style="text-align: center;">{{$data[$v->gt_id]}}</td>
                <td style="text-align: center;">{{$v->goodtypevals->gtv_name}}</td>
                <td style="text-align: center;">{{$v->title}}</td>
                <td style="text-align: center;"><img src='{{ URL::asset("/storage/uploads/good/$v->img") }}'></td>
                <td style="text-align: center;">{{$v->price}}</td>
                <td style="text-align: center;">{{$v->nums}}</td>
                <td style="text-align: center;">{{$v->created_at}}</td>
                <td class="td-manage" style="text-align: center;">
                  <a href='{{url("/admin/goodedit/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini  layui-btn-normal">查看商品详情</button>
                  </a>
                  <a href='{{url("/admin/goodedit/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini">修改</button>
                  </a>
                  <a href='{{url("/admin/gooddestroy/$v->id")}}' style="color:#fff;">
                    <button class="layui-btn layui-btn-mini layui-btn-danger">删除</button>
                  </a>
                </td>
              </tr>
          @endforeach    
        </tbody>

      </table>

            <center>
            {!! $goods->appends(['name' => $keywords])->render() !!}
            </center>
    </div>
  @endsection