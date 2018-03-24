<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('home/css/index.css')}}" type="text/css">
    <link rel="icon" href="{{asset('home/images/index_images/log_tb.jpg')}}">
    <script type="text/javascript" src="{{asset('home/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/index.js')}}"></script>
    <link rel="stylesheet" href="{{asset('home/css/borderandfood.css')}}">
    @section('css')
     
    @show
     <!-- 导入外部js -->
    @section('js')
            
    @show
</head>

<body @yield('class')>
    <!-- 头部 -->
    <!-- 上下滚动 -->
    

    <!-- 标头 -->
   <div class="header">
        <div class="header-cont">
            <div class="hc-box1" style="background: none;width: 220px;">
                
                @if(session('phone')==null)
                <span>考拉欢迎你！</span>
                <a href="{{url('authindex/login')}}" class="log">登录</a>
                <b>丨</b>
                <a href="register.html">注册</a>
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
                    @if(session('phone')!=null)
                    <a href="{{url('home/orderform')}}">我的订单</a>
                    @else
                    <a id='dd' style="cursor:pointer;">我的订单</a>

                    @endif
                </li>
                <span>丨</span>
                <li class="second">
                    <a href="My orders.html">个人中心</a>
                    <img src="{{asset('static/images/index_images/sanjiao.png')}}">
                    <div class="per_cen">
                        <a href="My Account management.html">完善个人信息</a>
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
    <div class="log-box" style="background-color:none;">
        <div class="login">
            <a href="/">
                <img src="{{asset('home/images/logres_images/logins.png')}}">
            </a>
        </div>
        
        <div class="shopcarbox">
            <div class="shopcar">
                <img src="{{asset('home/images/index_images/shopcar1.png')}}">
                <a href="{{url('home/shopping')}}"><span>购物车</span></a>
            </div>
        </div>
        <div class="log-box-last"></div>
    </div>

    <!-- 内容 -->
    @section('content')
            
    @show
    

    <!-- 底部 -->
    @section('food')
           <!-- 底部1 -->
    <div class="foot-one-box">
        <!--  正品保证-->
        <div class="zpbz-box">
            <ul>
                <li>
                    <div class="zpbz-one-box">
                        <img src="{{asset('home/images/index_images/zhp1.png')}}">
                        <div class="zpbz-cont">
                            <strong>100%正品</strong>
                            <p>正品保障 假一赔十</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="zpbz-one-box">
                        <img src="{{asset('home/images/index_images/zhp2.png')}}">
                        <div class="zpbz-cont">
                            <strong>低价保障</strong>
                            <p>缩减中间环节 确保低价</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="zpbz-one-box">
                        <img src="{{asset('home/images/index_images/zhp3.png')}}">
                        <div class="zpbz-cont">
                            <strong>30天无忧退货</strong>
                            <p>国内退货 售后无忧</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="zpbz-one-box">
                        <img src="{{asset('home/images/index_images/zhp4.png')}}">
                        <div class="zpbz-cont">
                            <strong>满88包邮</strong>
                            <p>部分特殊商品除外</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 关于我们 -->
        <div class="about-box">
            <ul>
                <li class="about-one">
                    <a href="">
                        <img src="{{asset('home/images/logres_images/login.jpg')}}">
                    </a>
                    <div>
                        <span>关注我们</span>
                        <img src="{{asset('home/images/logres_images/weixin.png')}}">
                    </div>
                </li>
                <li class="about-two">
                    <dl>
                        <dt>新手指南</dt>
                        <dd>
                            <a target="_blank" href="">购物流程</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">支付方式</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">常见问题</a>
                        </dd>
                    </dl>
                </li>
                <li class="about-two">
                    <dl>
                        <dt>售后服务</dt>
                        <dd>
                            <a target="_blank" href="">退货流程</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">退货政策</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">退款说明</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">联系客服</a>
                        </dd>
                    </dl>
                </li>
                <li class="about-two">
                    <dl>
                        <dt>物流配送</dt>
                        <dd>
                            <a target="_blank" href="">配送方式</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">配送服务</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">物流跟踪</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">运费标准</a>
                        </dd>
                    </dl>
                </li>
                <li class="about-two">
                    <dl>
                        <dt>关于我们</dt>
                        <dd>
                            <a target="_blank" href="">联系我们</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">海购直销</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">销售联盟</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">招商合作</a>
                        </dd>
                    </dl>
                </li>
                <li class="about-two">
                    <dl>
                        <dt>关于我们</dt>
                        <dd>
                            <a target="_blank" href="">假一赔十</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">廉正监督</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <img src="{{asset('home/images/logres_images/ewm.jpg')}}">
                    <p>扫描下载手机版</p>
                </li>
            </ul>
        </div>
    </div>

    <!-- 底部2 -->
    <div class="foot-two-box">
        <div class="foot-two-cont">
            <p>
                <a href="">About NetEase -</a>
                <a href="">公司简介 -</a>
                <a href="">联系方法 -</a>
                <a href="">友情链接 -</a>
                <a href="">招聘信息 -</a>           
                <a href="">客户服务 -</a>
                <a href="">隐私政策 -</a>           
                <a href="">网络营销 -</a>           
                <a href="">网站新闻</a>
            </p>
            <p>
                <span>
                    网络文化经营许可证：浙网文[2016]0155-055号
                </span>
                <span> 
                    增值电信业务经营许可证：浙B2-20160288 
                </span>
                <span>自营经营者信息</span>
            </p>
            <p>
                <a href="">
                    浙公网安备 33010802002216号
                </a>
                <span> 
                    网易公司版权所有©1997-2018 
                </span>
                <a href="">互联网药品信息服务资格证书编号（浙）-2017-0027</a>
            </p>
            <div>
                <img src="{{asset('home/images/logres_images/login6.jpg')}}">
                <img src="{{asset('home/images/logres_images/login7.jpg')}}">
                <img src="{{asset('home/images/logres_images/jinghui.png')}}">
            </div>
        </div>
    </div>

    <!-- 侧边栏 -->
    <div id="side">
        <div class="erweima block">
            <img src="{{asset('home/images/index_images/phone.png')}}" width="25">
            <p>
                <img src="{{asset('home/images/index_images/ewm.jpg')}}">
            </p>
        </div>
        <div class="service block">
            <img src="{{asset('home/images/index_images/service.png')}}" width="25">
            <p>
                <span class="txt">客服电话</span>
                <span class="phone">400-800-8820</span>
                <span class="line"></span>
                <a href="javascript:;" class="btn">在线客服</a>
            </p>
        </div>
        <div class="top block" style="display: none;"><a href="#"><img src="{{asset('home/images/index_images/top.png')}}" width="21"></a></div>
    </div> 
    @show

   
</body>
</html>
<script>
    function maodian(id){
          var obj = document.getElementById(id);
          var oPos = obj.offsetTop;
          return window.scrollTo(0, oPos-36);
    }
    var dd=document.getElementById('dd');
        dd.onclick=function(){
            alert('请先登陆!')
    }
</script>
<!--  内外部js -->
@section('htmljs')
    
@show