@extends('layouts.master')

@section('title', '后台登录-考拉')

<body @section('class', 'class="login-bg"')>
    
    @section('content')
    <div class="login">
        <div class="message">考拉海购-后台登录</div>
        <div id="darkbannerwrap"></div>
        
         <form method="post" action="{{url('auth/login')}}" class="layui-form" >    
             {{csrf_field()}}        
            <input name="email" placeholder="邮箱"  type="text"  class="layui-input" >
            <hr class="hr15">
            <input name="password" placeholder="密码"  type="password" class="layui-input">
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
    @endsection

    @section('js')
    <script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form;
              });
        })
    </script>
    @endsection
</body>
</html>