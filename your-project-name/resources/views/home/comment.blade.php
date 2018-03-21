
     
    <!-- 上下滚动 -->
    <div class="sxgd">
        <div class="log-box">
            <div class="login">
                <a href="index.html">
                    <img src="{{asset('static/images/logres_images/login.jpg')}}">
                </a>
            </div>
            <div class="search_box">
                <form action="" method="get">
                    <input type="text" name="" class="search" value="男士面膜">
                    <button class="search_a">
                        <img src="{{asset('static/images/index_images/search1.png')}}">
                    </button>
                </form>
            </div>
        </div>  
    </div>  

    <!-- 标头 -->
    <div class="header">
        <div class="header-cont">
<<<<<<< HEAD
            <div class="hc-box1" style="background: none;">
                @if(!session('username'))
                1111
                @endif
=======

            <div class="hc-box1" style="background: none;"> 

>>>>>>> ac50aa72fe4a7cfb66ac2ecdcb2f34eef2f5d629
                @if(session('phone')==null)
                <span>考拉欢迎你！</span>
                <a href="{{url('authindex/login')}}" class="log">登录</a>
                <b>丨</b>
                <a href="{{url('authindex/register')}}">注册</a>
                @endif
                @if(!session('phone')==null)
                 <span>您好！</span>
                <a href="" class="log">{{session('phone')}}</a>
                <b>丨</b>
                <a href="{{url('authindex/out')}}">退出</a>
                @endif
            </div>
            <div class="hc-box2">
                <img src="{{asset('static/images/index_images/phone2.png')}}" class="shouji">
                <a href="">手机考拉海购</a>
                <div class="app">
                    <img src="{{asset('static/images/index_images/erweima.jpg')}}">
                </div>
            </div>
            <ul>
                <li class="default">
                    <a href="My orders.html">我的订单</a>
                </li>
                <span>丨</span>
                <li class="second">
                    <a href="My orders.html">个人中心</a>
                    <img src="{{asset('static/images/index_images/sanjiao.png')}}">
                    <div class="per_cen">
                        <a href="@if(!session('phone')==null)
                            {{url('home/home/number')}}
                            @else  {{url('authindex/login')}}
                            @endif">完善个人信息</a>
                        <a href=" @if(!session('phone')==null)
                            {{url('home/personal')}}
                            @else  {{url('authindex/login')}}
                            @endif
                        "
                        >管理收货地址</a>
                        
                    </div>
                </li>
                <span>丨</span>
                <li class="third">
                    <a href="">客户服务</a>
                    <img src="{{asset('static/images/index_images/sanjiao.png')}}">
                    <div class="per_cen">
                        <a href="">联系客服</a>
                        <a href="">帮助中心</a>
                    </div>
                </li>
                <span>丨</span>
                <li>
                    <a href="">消费者告知书</a>
                </li>
                <span>丨</span>
                <li class="lastli">
                    <a href="">更多</a>
                    <img src="{{asset('static/images/index_images/sanjiao.png')}}">
                    <div class="per_more">
                        <a href="">关于我们</a>
                        <a href="">品牌招商</a>
                        <a href="">考拉招聘</a>
                        <a href="">官方博客</a>
                    </div>
                </li>
            </ul>
        </div>  
    </div>
    <!-- login + 搜索 -->
    <div class="log-box">
        <div class="login">
            <a href="javascript:;">
                <img src="{{asset('static/images/logres_images/login.jpg')}}">
            </a>
        </div>
        <div class="search_box">
                <form action="" method="get">
                    <input type="text" name="" class="search" value="男士面膜">
                    <button class="search_a">
                        <img src="{{asset('static/images/index_images/search1.png')}}">
                    </button>
                </form>
                
        </div>
        <div class="shopcarbox">
            <div class="shopcar">
                <img src="{{asset('static/images/index_images/shopcar1.png')}}">
                <a href="shopcar.html"><span>购物车</span></a>
            </div>
        </div>
        <div class="log-box-last"></div>
    </div>

     <!-- 动画 + 分类 -->
    <div class="dhxg">
        <div class="dhxg1">
            <img src="{{asset('static/images/index_images/fenlei.png')}}">
            <span class="fenlei">所有分类</span>
            <div class="ce-box">
                <ul class="cbl">
                    @foreach($list as $v1)
                        <li>
                            <img src="/{{$v1['url']}}">
                            <a href=""><span>{{$v1['name']}}</span></a>
                            <span>></span>
                            <div class="erji">
                                
                                <div class="erji-1" style="border-right: 1px solid #000;">
                                    @foreach($v1['children'] as $k => $v2)
                                    <div class="ej-cont">
                                        <div> 
                                            <a href="">{{$v2['name']}}</a>
                                            <a href="">更多 > </a>
                                        </div>
                                        <p>
                                            @foreach($v2['children'] as $v3)
                                                <a href="{{url('home/prolistindex')}}">{{$v3['name']}}</a>
                                            @endforeach
                                        </p>
                                       
                                    </div> 
                                    @endforeach
                                </div>
                              
                                
                            </div>
                           
                        </li>
                    @endforeach
                </ul> 
            </div>
        </div>
        
        <ul class="cbl2">
            <li><a href="javascript:;">首页</a></li>
            <li><a href="">每日上新</a></li>
            <li><a href="">国家馆</a></li>
            <li><a href="">全球旗舰</a></li>
            <li><a href="">品质奶粉</a></li>
            <li><a href="">人气面膜</a></li>
            <li><a href="">工厂店</a></li>
        </ul>
        <div class="dhxg2">
            <a href="javascript:;">
                <img src="{{asset('static/images/index_images/dh.gif')}}">
            </a>
        </div>
        <div class="dhxg-last"></div>
    </div>