@extends('layouts.master')

@section('title', '后台注册-考拉')

<body @section('class', 'class="login-bg"')>
    
    @section('content')
    <div class="login">
        <div class="message">考拉海购-后台注册</div>
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
