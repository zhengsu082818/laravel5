<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('etsc/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('etsc/css/xadmin.css')}}">
    <link rel="stylesheet" href="{{asset('etsc/css/bootstrap.min.css')}}">
   <script type="text/javascript" src="{{asset('etsc/js/jquery.min.js')}}"></script>
     <script src="{{asset('etsc/lib/layui/layui.js')}}" charset="utf-8"></script>
     <script type="text/javascript" src="{{asset('etsc/js/xadmin.js')}}"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">管理员列表</a>
        
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
    <div class="x-body">
     
      <xblock>
        <a class="layui-btn" id="backid" href="{{url('admin/create')}}"><i class="layui-icon"></i>添加</a>
        <span class="x-right" style="line-height:40px">共有数据：<a href="javascript:;" style="color: red">{{$count}}</a>  条</span>
      </xblock>

      <table class="layui-table">
        @include('flash::message')
        <thead>
          <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">用户名</th>
            <th style="text-align: center;">手机</th>
            <th style="text-align: center;">邮箱</th>
            <th style="text-align: center;">加入时间</th>
            <th style="text-align: center;">状态</th>
            <th style="text-align: center;">操作</th></tr>
        </thead>
        <tbody>
          @foreach ($stus as $v)
              <tr>
                <td style="text-align: center;">{{$v->id}}</td>
                <td style="text-align: center;">{{$v->name}}</td>
                <td style="text-align: center;">{{$v->phone}}</td>
                <td style="text-align: center;">{{$v->email}}</td>
                <td style="text-align: center;">{{$v->created_at}}</td>
                <td class="td-status" style="text-align: center;">
                  @if($v->ado == '1')
                  <span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>
                  @endif
                  @if($v->ado == '2')
                  <span class="layui-btn layui-btn-normal layui-btn-mini" style="">未启用</span>
                  @endif
                  </td>
                <td class="td-manage" style="text-align: center;">
                 <span class="layui-btn"> <a href='{{url("admin/edit/$v->id")}}' style="color: #fff;">修改</a></span>
                   <span class="layui-btn layui-btn-danger"><a href='{{url("admin/destroy/$v->id")}}'  style="color: #fff;">删除</a></span>
                </td>
              </tr>
          @endforeach    
        </tbody>

      </table>

            <center>
            {!! $stus->render() !!}
            </center>
    </div>
  </body>

</html>