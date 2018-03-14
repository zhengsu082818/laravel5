@extends('layouts.master')

@section('title', '考拉海购--后台主站')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('etsc/css/bootstrap.min.css')}}">
@endsection

@section('content')

    <div class="x-body">
      <div class="x-nav">
      <span class="layui-breadcrumb">
        <a>
          <cite>首页轮播管理</cite>
        </a>
        <a>
          <cite>图片轮播管理</cite>
        </a>
        <a>
          <cite>修改轮播</cite>
        </a>
      </span>
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
       <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('admin/comment')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
    </div>
        @include('flash::message')
        <form class="layui-form" method="post" action='{{url("admin/commentupdate/$comment->id")}}' enctype="multipart/form-data" >
          {{csrf_field()}}
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label" 
              style="width:100px;color:red">
                  <span class="x-red">*</span>评论
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_email" name="comment"  class="layui-input" disabled="disabled" style="background:#efefe0;" value="{{$comment->comment}}"  >
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label" style="width:100px;">
                  <span class="x-red">*</span>回复
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_email" name="reply"  class="layui-input"  value="{{$comment->reply}}"  >
              </div>
          </div>
          @foreach($parent as $v)
            <div class="layui-form-item">
              <label for="L_email" style="width:100px;color:red" class="layui-form-label">
                @if(!$v->depth == 0)
                  <span class="x-red">*</span>追加评论
                @else
                   <span class="x-red" >*</span>首次评论
                @endif
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_email" name="comment"  class="layui-input" disabled="disabled" style="background:#efefe0;" value="{{$v->comment}}"  >
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label" style="width:100px;">
                  <span class="x-red">*</span>回复
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_email" name="reply" disabled="disabled" class="layui-input" style="background:#efefe0;" value="{{$v->reply}}"  >
              </div>
          </div>
          @endforeach
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn">
                  回复评论
              </button>
          </div>
        </form>
    </div>
@endsection
