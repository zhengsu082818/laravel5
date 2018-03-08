<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <title>后台注册-考拉</title>
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

</head>
<body class="login-bg">
    
    <div class="login">
        <div class="message">x-admin2.0-管理注册</div>
        <div id="darkbannerwrap"></div>
        
        <form method="post" action="{{url('auth/register')}}" class="layui-form" >
          {{csrf_field()}}
             <input name="name" placeholder="用户名"  type="text"  >
            <hr class="hr15">
            <input name="email" placeholder="邮箱"  type="text"  >
            <hr class="hr15">
            <input name="password" type="password" placeholder="密码">
            <hr class="hr15">
            <input name="password_confirmation" type="password" placeholder="重复密码">
            <hr class="hr15">
            <input value="提交" style="width:100%;" type="submit">
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