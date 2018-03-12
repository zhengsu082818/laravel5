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
          <cite>会员管理</cite>
        </a>
        <a>
          <cite>会员列表</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:38px">ဂ</i></a>
    </div>
    
    <div class="x-body">
        <form class="layui-form layui-col-md12 x-so" action="{{ url('navig/store') }}" method="get">
          <input type="text" name="name"  placeholder="请输入关键字" autocomplete="off" class="layui-input" value="">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
        <span class="x-left layui-btn" style="line-height:40px">共有数据：<a href="javascript:;" style="color:#fff;">{{$count}}</a>  条</span>
       

      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">类别名</th>
            <th style="text-align: center;">图标</th>
            <th style="text-align: center;">嵌套等级</th>
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
                <td style="text-align: center;">
                  <button  onclick='x_admin_show("分类等级","","200","200")'>{{$v->depth}}</button></td>
                <td style="text-align: center;">{{$v->updated_at}}</td>
                <td class="td-manage" style="text-align: center;">
                  <a href="{{url('navig/create').'?id='.$v->id}}" style="color: #fff;" title="添加分类">
                    <button class="layui-btn layui-btn-mini">添加分类</button>
                  <a href='{{url("navig/edit/$v->id")}}' style="color: #fff;">
                    <button class="layui-btn layui-btn-mini">修改</button>
                  <a href='{{url("navig/destroy/$v->id")}}'  style="color: #fff;" title="删除">
                     <button class="layui-btn layui-btn-mini layui-btn-danger">删除</button>
                  </a>
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
 