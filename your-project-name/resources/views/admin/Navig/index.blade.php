 @extends('layouts.master')

@section('title', '考拉海购--后台主站')

@section('css')
    <link rel="stylesheet" href="{{asset('etsc/css/bootstrap.min.css')}}">
     <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
     <div class="x-body">
      <div class="x-nav">
      <span class="layui-breadcrumb">
        <a>
          <cite>商品分类列表</cite>
        </a>
        <a>
          <cite>所有分类列表</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
    </div>
    <div class="x-body">
        <form class="layui-form layui-col-md12 x-so" action="{{ url('navig/index') }}" method="get">

          <input type="text" name="name"  placeholder="请输入类别名" autocomplete="off" class="layui-input" 
          value="{{$keywords?$keywords:''}}">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
        <span class="x-left layui-btn" style="line-height:40px">共有数据：<a href="javascript:;" style="color:#fff;">{{$count}}</a>  条</span>

        <a href="{{url('navig/create').'?id='.''}}" style="color:#fff;"><span class="x-left layui-btn" style="line-height:40px;float: right;">添加主类</span></a>
       <table class="layui-table">
      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">类别名</th>
            <th style="text-align: center;">图片</th>
            <th style="text-align: center;">嵌套等级</th>

            <th style="text-align: center;">添加时间</th>
            <th style="text-align: center;">操作</th></tr>
        </thead>
        <tbody>
          @foreach ($Navig as $v)
        
               <tr>

                <td style="text-align: center;">{{$v->name}}</td>

                <td style="text-align: center;">
                  @if(!$v->url=='')
                  <img src='{{asset("$v->url")}}' style="width: 20px;height: 20px;">
                  @else
                    <span>此处没图</span>
                  @endif
                </td>
                <td style="text-align: center;">
                    @if($v->depth == 0)
                    <button class="layui-btn layui-btn-mini layui-btn-normal" value="">
                      {{$depth[$v->depth]}}</button>
                    @endif
                    @if($v->depth == 1)
                    <button class="layui-btn layui-btn-mini layui-btn-normal" value="" style="margin-left: 40px;">
                      {{$depth[$v->depth]}}</button>
                    @endif
                    @if($v->depth == 2)
                    <button class="layui-btn layui-btn-mini layui-btn-normal" value="" style="margin-left: 80px;">
                      {{$depth[$v->depth]}}</button>
                    @endif
                    @if($v->depth == 3)
                    <button class="layui-btn layui-btn-mini layui-btn-normal" value="" style="margin-left: 120px;">
                      {{$depth[$v->depth]}}</button>
                    @endif
                    @if($v->depth == 4)
                    <button class="layui-btn layui-btn-mini layui-btn-normal" value="" style="margin-left: 160px;">
                      {{$depth[$v->depth]}}</button>
                    @endif
                </td>
               
                <td style="text-align: center;">{{$v->created_at}}</td>
                <td class="td-manage" style="text-align: center;">
                   @if($v->depth=='0')
                  <a href="{{url('navig/create').'?id='.$v->id}}" style="color: #fff;" title="添加分类">
                    <button class="layui-btn layui-btn-mini">添加分类</button></a>
                  @endif
                   @if($v->depth=='1')
                  <a href="{{url('navig/create').'?id='.$v->id}}" style="color: #fff;" title="添加分类">
                    <button class="layui-btn layui-btn-mini">添加分类</button></a>
                  @endif

                   @if($v->depth=='2')
                  <a href="{{url('navig/create').'?id='.$v->id}}" style="color: #fff;" title="添加分类">
                    <button class="layui-btn layui-btn-mini">添加分类</button></a>
                  @endif
                   @if($v->depth=='3')
                  <a href="{{url('navig/create').'?id='.$v->id}}" style="color: #fff;" title="添加分类">
                    <button class="layui-btn layui-btn-mini">添加分类</button></a>
                  @endif
                   @if($v->depth=='4')
                  <a href="{{url('navig/create').'?id='.$v->id}}" style="color: #fff;" title="添加分类">
                    <button class="layui-btn layui-btn-mini">添加分类</button></a>
                  @endif
                  <a href='{{url("navig/edit/$v->id")}}' style="color: #fff;" title="点击修改">
                    <button class="layui-btn layui-btn-mini">修改</button></a>
                  <a href='{{url("navig/destroy/$v->id")}}'  style="color: #fff;" title="删除">
                     <button class="layui-btn layui-btn-mini layui-btn-danger">删除</button>
                  </a>
                </td>
              </tr>
          
          @endforeach    
        </tbody>

      </table>

            <center>
            {!! $Navig->appends(['name' => $keywords])->render() !!}
            </center>
    </div>

@endsection
