@extends('layouts.master')

@section('title', '考拉海购--后台主站')

@section('content')

    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="javascript:;">考拉海购 -- 后台主站</a></div>
        <div class="left_open">
            <i title="展开左侧栏" class="iconfont">&#xe699;</i>
        </div>
        
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">{{Auth::user()->name}}</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a href="{{url('auth/logout')}}">退出</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item to-index"><a href="javascript:;">后台首页</a></li>
        </ul>
        
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
     <!-- 左侧菜单开始 -->
    <div class="left-nav">
      <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="iconfont layui-icon">&#xe613;</i>
                    <cite>前台用户中心</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{url('admin/homeindex')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>用户列表</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{url('admin/personalindex')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>个人收货地址</cite>
                        </a>
                    </li >
                 
                </ul>
            </li>
            
            <li>
                <a href="javascript:;">
                    <i class="iconfont layui-icon">&#xe60d;</i>
                    <cite>首页轮播管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{url('admin/bannerindex')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>图片轮播列表</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont layui-icon">&#xe68e;</i>
                    <cite>首页推荐管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{url('admin/sytjindex')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>查看推荐列表</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont layui-icon">&#xe705;</i>
                    <cite>商品分类管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>    
                        <a _href="{{url('navig/index')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>商品分类列表</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{url('navig/create').'?id='.''}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加主类</cite>
                        </a>
                    </li>
                </ul>
          
            </li>
           
            <li>
                <a href="javascript:;">
                    <i class="iconfont layui-icon">&#xe60a;</i>
                    <cite>商品管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{url('admin/goodindex')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>商品列表</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{url('admin/goodtypeindex')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>商品属性表</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{url('admin/goodtypevalindex')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>商品属性值表</cite>
                        </a>
                    </li >
                 
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont layui-icon">&#xe612;</i>
                    <cite>管理员管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{url('admin/list')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理员列表</cite>
                        </a>
                    </li >
                   <!--  <li>
                        <a _href="{{url('admin/role')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>职位管理</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{url('admin/permission')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>权限管理</cite>
                        </a>
                    </li > -->
                  
                </ul>
            </li>

             <li>
                <a href="javascript:;">
                    <i class="iconfont layui-icon">&#xe639;</i>
                    <cite>商品评论管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{url('admin/comment')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>用户评论</cite>
                        </a>
                    </li >
                </ul>
            </li>

           
           

            <!-- 订单管理 -->

            <li>
                <a href="javascript:;">
                    <i class="iconfont layui-icon">&#xe65e;</i>
                    <cite>订单管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                   
                    <li>
                        <a _href="{{url('order/')}}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>所有用户订单</cite>
                        </a>
                    </li >
                  
                </ul>
            </li>

        </ul>
      </div>
    </div>
    <!-- <div class="x-slide_left"></div> -->
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
          <ul class="layui-tab-title">
            <li>我的桌面</li>
          </ul>
          <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src="{{url('/admin/welcome')}}" frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
          </div>
        </div>
    </div>
    <div class="page-content-bg"></div>
    <!-- 右侧主体结束 -->
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright">Copyright ©2017 x-admin v2.3 All Rights Reserved</div>  
    </div>
    <!-- 底部结束 -->
@endsection

@section('js')
    <script>
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
@endsection

