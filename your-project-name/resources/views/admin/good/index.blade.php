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
          <tr style="height:50px;">
            <th style="text-align: center;">所属分类 > 属性名 > 属性值</th>
            
             <th style="text-align: center;">标题</th>
              <th style="text-align: center;">主图</th>
              <th style="text-align: center;">副图</th>
              <th style="text-align: center;">副图</th>

               <th style="text-align: center;">价格</th>
                <th style="text-align: center;">库存数量</th>
                <th style="text-align: center;">商品详情</th>
            <th style="text-align: center;">标题</th>
            <th style="text-align: center;">图片</th>
            <th style="text-align: center;">价格</th>
            <th style="text-align: center;">库存数量</th>
            <th style="text-align: center;">商品详情</th>
            <th style="text-align: center;">添加时间</th>
            <th style="text-align: center;">操作</th></tr>
        </thead>
        <tbody>
          @foreach($goods as $v)
              <tr>
                <td style="text-align: center;">
                  <button class="layui-btn layui-btn-mini layui-btn-normal" value="">{{$datas[$v->djid]}}</button>
                  <button class="layui-btn layui-btn-mini layui-btn-normal" value="">{{$datas[$v->cjid]}}</button>
                  <button class="layui-btn layui-btn-mini layui-btn-normal" value="">{{$datas[$v->sj_id]}}</button>
                  <i class="layui-icon">&#xe602;</i>
                  <button class="layui-btn layui-btn-mini layui-btn-normal" value=""> {{$data[$v->gt_id]}}</button>
                  <i class="layui-icon">&#xe602;</i>
                  <button class="layui-btn layui-btn-mini layui-btn-normal" value=""> {{$gtvs[$v->gtv_id]}}</button>
                </td>
                <td style="text-align: center;">{{$v->title}}</td>
                <td style="text-align: center;"><img src='{{ URL::asset("storage/uploads/shopping/$v->img") }}' style="width: 50px;height: 50px;"></td>
                <td style="text-align: center;"><img src='{{ URL::asset("storage/uploads/shopping/$v->img1") }}' style="width: 50px;height: 50px;"></td>
                <td style="text-align: center;"><img src='{{ URL::asset("storage/uploads/shopping/$v->img2") }}' style="width: 50px;height: 50px;"></td>
                <td style="text-align: center;">{{$v->price}}</td>
                <td style="text-align: center;">{{$v->nums}}</td>
                <td style="text-align: center;">{!!$v->content!!}</td>
                <td style="text-align: center;">{{$v->created_at}}</td>
                <td class="td-manage" style="text-align: center;">
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