<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>后台登录-考拉</title>
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('etsc/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('etsc/css/xadmin.css')}}">
    <script type="text/javascript" src="{{asset('etsc/js/jquery.min.js')}}"></script>
    <script src="{{asset('etsc/lib/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset('etsc/js/xadmin.js')}}"></script>

</head>
<body class="login-bg">
    
    <div class="login">
        <div class="message">x-admin2.0-管理登录</div>
        <div id="darkbannerwrap"></div>
        
         <form method="post" action="{{url('auth/login')}}" class="layui-form" >    
             {{csrf_field()}}        
            <input name="email" placeholder="用户名"  type="text"  class="layui-input" >

            <hr class="hr15">
            <input name="password" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <input name="captcha" type="text" placeholder="验证码" style="width:55%;"> <img src="{{ url('/captcha') }}" onclick="this.src='{{ url('/captcha') }}?r='+Math.random();" alt="">
            <hr class="hr15">
            <input type="checkbox" name="remember"> 记住密码
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <hr class="hr20" >
        </form>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a href="{{url('auth/register')}}">没有账号?去注册</a>
    </div>

    <script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form;
              });
        })

        
    </script>
</body>
</html>