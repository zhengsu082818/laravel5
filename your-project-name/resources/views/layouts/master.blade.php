<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('etsc/css/font.css')}}">
	<link rel="stylesheet" href="{{asset('etsc/css/xadmin.css')}}">
    <script type="text/javascript" src="{{asset('etsc/js/jquery.min.js')}}"></script>
    <script src="{{asset('etsc/lib/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset('etsc/js/xadmin.js')}}"></script>
    <!-- 导入外部css -->
    @section('css')
           
    @show
</head>
<body @yield('class')>
    <!-- 内容 -->
    @section('content')
            
    @show
    
    <!-- 导入外部js -->
    @section('js')
            
    @show
</body>
</html>