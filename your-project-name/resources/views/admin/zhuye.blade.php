@extends('layouts.master')

@section('title', '考拉海购--后台主站')

@section('content')
        <div class="x-body">
            <blockquote class="layui-elem-quote">欢迎使用考拉后台管理系统！v2.0官方交流群： 519492808</blockquote>
            <fieldset class="layui-elem-field">
              <legend>信息统计</legend>
              <div class="layui-field-box">
                <table class="layui-table" lay-even>
                    <thead>
                        <tr>
                            <th>统计</th>
                            <th>商品库</th>
                            <th>评论条数</th>
                            <th>订单库</th>
                            <th>前台注册用户</th>
                            <th>管理员</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>总数</td>
                            <td>{{$goodcount}}</td>
                            <td>{{$comentcount}}</td>
                            <td>{{$ordercount}}</td>
                            <td>{{$homecount}}</td>
                            <td>{{$usercount}}</td>
                        </tr>
                    </tbody>
                </table>
          
              </div>
            </fieldset>
            <blockquote class="layui-elem-quote layui-quote-nm">感谢 裴梦老师,陈征老师,其他同袍 提供的的技术支持。感谢考拉项目小组全体人员的努力奋斗!</blockquote>
            
        </div>
@endsection

@section('js')
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
@endsection