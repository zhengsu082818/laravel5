@extends('layouts.homemaster')

@section('title', '网易考拉海购-网易旗下_正品低价_海外直采_海外直邮')

@section('css js')
    <script type="text/javascript" src="{{asset('static/js/index.js')}}"></script>
    <link rel="stylesheet" href="{{asset('static/css/index.css')}}" type="text/css">
@endsection
    
    @section('content')
    
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
            <div class="hc-box1">
                <span>考拉欢迎你！</span>
                <a href="login.html" class="log">登录</a>
                <b>丨</b>
                <a href="register.html">注册</a>
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
                        <a href="My Account management.html">完善个人信息</a>
                        <a href="My Receiving address.html">管理收货地址</a>
                        
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
                    <li>
                        <img src="{{asset('static/images/index_images/ce1.png')}}">
                        <a href=""><span>母婴儿童</span></a>
                        <span>></span>
                        <div class="erji">
                            <div class="erji-1">
                                <div class="ej-cont">
                                    <div>
                                       <a href="">奶粉</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="">爱他美</a>
                                        <a href="" class="font-color">牛栏</a>
                                        <a href="" class="font-color">a2</a>
                                        <a href="">贝拉米</a>
                                        <a href="">美林</a>
                                        <a href="">雅培</a>
                                        <a href="" class="font-color">合生元</a>
                                        <a href="">惠氏</a>
                                        <a href="">美赞臣</a>
                                    </p>
                                    <p>
                                        <a href="">雀巢</a>
                                        <a href="" class="font-color">美素佳儿</a>
                                        <a href="">惠氏</a>
                                        <a href="">美赞臣</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">纸尿裤/拉拉裤</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="">花王</a>
                                        <a href="" class="font-color">尤妮佳</a>
                                        <a href="">大王</a>
                                        <a href="">好奇</a>
                                        <a href="" class="font-color">邦宝</a>
                                        <a href="">班博</a>
                                        <a href="" class="font-color">妮飘</a>
                                        <a href="">帮宝适</a>
                                    </p>
                                    <p>
                                        <a href="">贝乐佳</a>
                                        <a href="">妈咪宝贝</a>
                                        <a href="" class="font-color">NB号</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">营养辅食</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">辅食泥</a>
                                        <a href="">米粉迷糊</a>
                                        <a href="" class="font-color">泡芙</a>
                                        <a href="">溶溶豆</a>
                                        <a href="" class="font-color">营养品</a>
                                        <a href="">饼干</a>
                                        <a href="">肉松面仔</a>
                                    </p>
                                    <p>
                                        <a href="" class="font-color">其他辅食</a>
                                        
                                        <a href="">零食</a>
                                        <a href="" class="font-color">调味品</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">宝宝用品</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">护理喂养</a>
                                        <a href="">文具图书</a>
                                        <a href="">积木</a>
                                        <a href="">洗漱护肤</a>
                                        <a href="" class="font-color">小家电</a>
                                        <a href="">背心吊带</a>
                                        <a href="" class="font-color">宝宝家居</a>
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="erji-2">
                                <img src="{{asset('static/images/index_images/ce1-1.png')}}">
                                <a href="">
                                    <img src="{{asset('static/images/index_images/ce1-2.png')}}">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('static/images/index_images/ce2.png')}}">
                        <a href=""><span>美容彩妆</span></a>
                        <span>></span>
                        <div class="erji">
                            <div class="erji-1">
                                <div class="ej-cont">
                                    <div>
                                       <a href="product_list.html">护肤</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">洁面</a>
                                        <a href="" >卸妆</a>
                                        <a href="" class="font-color">爽肤水</a>
                                        <a href="" class="font-color">面霜</a>
                                        <a href="">乳液/凝胶</a>
                                        <a href="" class="font-color">精华</a>
                                        <a href="" >护肤套装</a>
                                        <a href="">男士面膜</a>
                                        <a href="" class="font-color">唇部护理</a>
                                    </p>
                                    <p>
                                        <a href="" class="font-color">精油放疗</a>
                                        <a href="" >手足护理</a>
                                        <a href="" class="font-color">眼部护理</a>
                                        <a href="">面部护肤</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">彩妆</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">BB霜/CC霜</a>
                                        <a href="" >唇膏唇彩</a>
                                        <a href="" class="font-color">美甲</a>
                                        <a href="">散份</a>
                                        <a href="" class="font-color">眉笔</a>
                                        <a href="">班博</a>
                                        <a href="" class="font-color">腮红</a>
                                        <a href="">眼线</a>
                                        <a href="" class="font-color">隔离/妆前</a>
                                    </p>
                                    <p>
                                        <a href="" class="font-color">高光</a>
                                        <a href="">修颜</a>
                                        <a href="" class="font-color">睫毛膏</a>
                                        <a href="" >遮瑕</a>
                                        <a href="" class="font-color">香水</a>
                                        <a href="" class="font-color">粉底</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">面膜</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">可莱丝</a>
                                        <a href="">森田药妆</a>
                                        <a href="" class="font-color">丽得姿</a>
                                        <a href="" class="font-color">SNP</a>
                                        <a href="" >自然晨露</a>
                                        <a href="" class="font-color">美丽日记</a>
                                        <a href="" class="font-color">我的心机</a>
                                    </p>
                                    <p>
                                        <a href="" class="font-color">BEWONL</a>
                                        <a href="">STinge Shop</a>
                                        <a href="" class="font-color">其他面膜</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">防晒修护</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">香蕉船</a>
                                        <a href="">曼秀雷敦</a>
                                        <a href="">碧柔</a>
                                        <a href="">近江兄弟护肤</a>
                                        <a href="" class="font-color">香氛</a>
                                    </p>
                                </div>
                            </div>
                            <div class="erji-2">
                                <img src="{{asset('static/images/index_images/ce2-1.png')}}">
                                <a href="">
                                    <img src="{{asset('static/images/index_images/ce2-2.png')}}">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('static/images/index_images/ce3.png')}}">
                        <a href="product_list.html"><span>服饰鞋包</span></a>
                        <span>></span>
                        <div class="erji">
                            <div class="erji-1">
                                <div class="ej-cont">
                                    <div>
                                       <a href="">男士箱包</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">斜挎包</a>
                                        <a href="" >手提包</a>
                                        <a href="" class="font-color">双肩包</a>
                                        <a href="">商务包</a>
                                        <a href="" class="font-color">钱包</a>
                                        <a href="">旅行包</a>
                                        <a href="" class="font-color">腰包</a>
                                        <a href="">胸包</a>
                                        <a href="">卡包</a>
                                    </p>
                                    <p>
                                        <a href="">考拉拉杆箱</a>
                                        <a href="">其他箱包</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">女士箱包</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="">斜跨包</a>
                                        <a href="" class="font-color">手提包</a>
                                        <a href="">手拿包</a>
                                        <a href="">双肩包</a>
                                        <a href="" class="font-color">化妆包</a>
                                        <a href="">附件包</a>
                                        <a href="" class="font-color">钱包</a>
                                        <a href="">卡包</a>
                                    </p>
                                    <p>
                                        <a href="">凯普林</a>
                                        <a href="">爱马仕拉杆箱</a>
                                        <a href="" class="font-color">其他箱包</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">手表配饰</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">墨镜</a>
                                        <a href="">眼镜</a>
                                        <a href="" class="font-color">腰带</a>
                                        <a href="">项链</a>
                                        <a href="" class="font-color">手表</a>
                                        <a href="">大牌手表</a>
                                        <a href="">流行饰品</a>
                                    </p>
                                    <p>
                                        <a href="">军刀</a>
                                        <a href="" class="font-color">围巾/丝巾</a>
                                        <a href="" >Zippo 打火机</a>
                                        <a href="" >其他饰品</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">服饰内衣</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">男装</a>
                                        <a href="">女装</a>
                                        <a href="">丝袜</a>
                                        <a href="">睡衣</a>
                                        <a href="" class="font-color">家具服饰套装</a>
                                        <a href="">内衣</a>
                                        <a href="" class="font-color">卡文</a>
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="erji-2">
                                <img src="{{asset('static/images/index_images/ce3-1.png')}}">
                                <a href="">
                                    <img src="{{asset('static/images/index_images/ce3-2.png')}}">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('static/images/index_images/ce4.png')}}">
                        <a href="product_list.html"><span>家居个护</span></a>
                        <span>></span>
                        <div class="erji">
                            <div class="erji-1">
                                <div class="ej-cont">
                                    <div>
                                       <a href="">洗护日用</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">洗发水</a>
                                        <a href="" >护发素</a>
                                        <a href="" >护发精油</a>
                                        <a href="" class="font-color">梳子</a>
                                        <a href="" class="font-color">沐浴露</a>
                                        <a href="">牙膏</a>
                                        <a href="" >牙刷</a>
                                        <a href="" class="font-color">漱口水</a>
                                        <a href="">洗手液</a>
                                    </p>
                                    <p>
                                        <a href="">手/足护理</a>
                                        <a href="" class="font-color">沐浴皂</a>
                                        <a href="">染发剂</a>
                                        <a href="" class="font-color">其他护理</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">居家用品</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="">杯子</a>
                                        <a href="" class="font-color">沏水壶</a>
                                        <a href="">纸品</a>
                                        <a href="">锅具</a>
                                        <a href="" class="font-color">刀具</a>
                                        <a href="">衣物清洁</a>
                                        <a href="" class="font-color">驱虫除臭</a>
                                        <a href="">厨房餐饮</a>
                                    </p>
                                    <p>
                                        <a href="">家居清洁</a>
                                        <a href="">枕头</a>
                                        <a href="" class="font-color">床上用品</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">宠物生活</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" >宠物主粮</a>
                                        <a href="" class="font-color">宠物零食</a>
                                        <a href="" class="font-color">宠物玩具</a>
                                        <a href="">宠物洗护</a>
                                        <a href="" class="font-color">宠物医疗</a>
                                        <a href="">宠物保健</a>
                                        <a href="">宠物美容</a>
                                    </p>
                                    <P>
                                        <a href="" class="font-color">宠物专卖店</a>
                                        <a href="">其他内容</a>
                                    </P>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">其他个护</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">眼罩</a>
                                        <a href="">口罩</a>
                                        <a href="">人体润滑</a>
                                        <a href="">卫生巾</a>
                                        <a href="" class="font-color">护垫</a>
                                        <a href="">卫生棉条</a>
                                        <a href="" class="font-color">私处洗液</a>
                                    </p>
                                </div>
                            </div>
                            <div class="erji-2">
                                <img src="{{asset('static/images/index_images/ce4-1.png')}}">
                                <a href="">
                                    <img src="{{asset('static/images/index_images/ce4-2.png')}}">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('static/images/index_images/ce5.png')}}">
                        <a href="product_list.html"><span>营养保健</span></a>
                        <span>></span>
                        <div class="erji">
                            <div class="erji-1">
                                <div class="ej-cont">
                                    <div>
                                       <a href="">营养补充站</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">维生素</a>
                                        <a href="" >鱼油</a>
                                        <a href="" class="font-color">酵素</a>
                                        <a href="">商务包</a>
                                        <a href="" class="font-color">葡萄籽</a>
                                        <a href="">蔓越莓</a>
                                        <a href="" >叶酸</a>
                                        <a href="" class="font-color">蛋白质/氨基酸</a>
                                        <a href="" class="font-color">胶原蛋白</a>
                                    </p>
                                    <p>
                                        <a href="">蜂蜜/蜜胶</a>
                                        <a href="">芦荟</a>
                                        <a href="" class="font-color">大豆异黄胴</a>
                                        <a href="">银杏</a>
                                        <a href="" class="font-color">奶蓟草</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">女性必备</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="">减肥瘦身</a>
                                        <a href="" class="font-color">舒缓岁月</a>
                                        <a href="">胶原蛋白</a>
                                        <a href="">酵素</a>
                                        <a href="" class="font-color">补气养血</a>
                                        <a href="">燕窝滋补</a>
                                        <a href="" class="font-color">内分泌</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">健康养护</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">美容养颜</a>
                                        <a href="">调节三高</a>
                                        <a href="" class="font-color">肝肾养护</a>
                                        <a href="">心脑保健</a>
                                        <a href="" class="font-color">滋补养生</a>
                                        <a href="" class="font-color">骨骼健康</a>
                                        <a href="">改善睡眠</a>
                                    </p>
                                    <p>
                                        <a href="">保护视力</a>
                                        <a href="" class="font-color">改善贫血</a>
                                        <a href="" >护发养发</a>
                                        <a href="" >减肥瘦身</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">关爱老年</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">滋补养生</a>
                                        <a href="">心脑保健</a>
                                        <a href="">调节三高</a>
                                        <a href="">调节免疫</a>
                                        <a href="" class="font-color">肝肾养护</a>
                                        <a href="">骨骼关节</a>
                                    </p>
                                </div>
                            </div>
                            <div class="erji-2">
                                <img src="{{asset('static/images/index_images/ce5-1.png')}}">
                                <a href="">
                                    <img src="{{asset('static/images/index_images/ce5-2.png')}}">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('static/images/index_images/ce6.png')}}">
                        <a href="product_list.html"><span>手表配饰</span></a>
                        <span>></span>
                        <div class="erji">
                            <div class="erji-1">
                                <div class="ej-cont">
                                    <div>
                                       <a href="">大牌手表</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">天梭</a>
                                        <a href="" >西铁域</a>
                                        <a href="" class="font-color">浪琴</a>
                                        <a href="">卡西欧</a>
                                        <a href="" class="font-color">欧米茄</a>
                                        <a href="">安妮</a>
                                        <a href="" class="font-color">ADEXE</a>
                                        <a href="">克莱因</a>
                                        <a href="">潘多拉</a>
                                    </p>
                                    <p>
                                        <a href="">PANRA</a>
                                        <a href="">CALAVIN</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">流行饰品</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="">施华洛</a>
                                        <a href="" class="font-color">蒂芙尼</a>
                                        <a href="">朵朵</a>
                                        <a href="">COCO</a>
                                        <a href="" class="font-color">香奈儿</a>
                                        <a href="">MONACO</a>
                                        <a href="" class="font-color">蒂凡尼</a>
                                    </p>
                                    <p>
                                        <a href="">凯特林</a>
                                        <a href="">明彩</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">型格眼镜</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">古驰</a>
                                        <a href="">卡文克莱</a>
                                        <a href="" class="font-color">COASTAL</a>
                                        <a href="">VISION</a>
                                        <a href="" class="font-color">GUCCI</a>
                                        <a href="">JINGSAM</a>
                                        <a href="">镜宴</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">黄金珠宝</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" 0>黄金饰品</a>
                                        <a href="">黄金项链</a>
                                        <a href="" class="font-color">玛瑙挂饰</a>
                                        <a href="">翡翠手环</a>
                                        <a href="" class="font-color">黄金手镯</a>
                                        <a href="">铂金手链</a>
                                        <a href="" class="font-color">5K元宝</a>
                                    </p>
                                    <p>
                                        <a href="" class="font-color">黄金吊坠</a>
                                        <a href="">天然水晶</a>
                                        <a href="" class="font-color">情侣戒指</a>
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="erji-2">
                                <img src="{{asset('static/images/index_images/ce6-1.png')}}">
                                <a href="">
                                    <img src="{{asset('static/images/index_images/ce6-2.png')}}">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('static/images/index_images/ce7.png')}}">
                        <a href="product_list.html"><span>数码家电</span></a>
                        <span>></span>
                        <div class="erji">
                            <div class="erji-1">
                                <div class="ej-cont">
                                    <div>
                                       <a href="">数码影音</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">数码相机</a>
                                        <a href="" >耳机/耳麦</a>
                                        <a href="" class="font-color">单反相机</a>
                                        <a href="">音响/音箱</a>
                                        <a href="" class="font-color">微单</a>
                                        <a href="">平板/游戏机</a>
                                        <a href="" >电脑/电脑周边</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">手机/配件</a>
                                       <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">苹果</a>
                                        <a href="" class="font-color">华为</a>
                                        <a href="">OPPO</a>
                                        <a href="">Vivo</a>
                                        <a href="" class="font-color">魅族</a>
                                        <a href="">三星</a>
                                        <a href="">小米</a>
                                        <a href="" class="font-color">手机贴膜</a>
                                        <a href="">手机壳</a>
                                        <a href="">数据线</a>
                                    </p>
                                    
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">生活电器</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" >戴森</a>
                                        <a href="" class="font-color">电风扇</a>
                                        <a href="" class="font-color">除湿机</a>
                                        <a href="">空气净化器</a>
                                        <a href="" class="font-color">扫地机器人</a>
                                        <a href="" >加湿器</a>
                                        <a href="" class="font-color">洗衣机</a>
                                    </p>
                                    <p>
                                        <a href="" class="font-color">吸尘器</a>
                                        <a href="" >吹风机</a>
                                        <a href="" class="font-color">空调</a>
                                        <a href="" >彩电</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">厨房电器</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">电水壶</a>
                                        <a href="">咖啡机</a>
                                        <a href="">电烤炉</a>
                                        <a href="">微波炉</a>
                                        <a href="" class="font-color">冰箱</a>
                                        <a href="">电饭煲</a>
                                        <a href="" class="font-color">面包机</a>
                                    </p>
                                    <p>
                                        <a href="">榨汁机</a>
                                        <a href="">料理机</a>
                                        <a href="" class="font-color">其他厨房电器</a>
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="erji-2">
                                <img src="../images/index_images/ce7-1.png">
                                <a href="">
                                    <img src="../images/index_images/ce7-2.png">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="../images/index_images/ce8.png">
                        <a href="product_list.html"><span>环球美食</span></a>
                        <span>></span>
                        <div class="erji">
                            <div class="erji-1">
                                <div class="ej-cont">
                                    <div>
                                       <a href="">乳品/咖啡</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">成人奶粉</a>
                                        <a href="" >奶片</a>
                                        <a href="" class="font-color">进口奶粉</a>
                                        <a href="" class="font-color">热可可</a>
                                        <a href="">酸奶</a>
                                        <a href="" class="font-color">速溶咖啡</a>
                                        <a href="">咖啡粉</a>
                                        <a href="">咖啡豆</a>
                                    </p>
                                    <p>
                                        <a href="">五谷冲饮</a>
                                        <a href="">麦片</a>
                                        <a href="">其他冲饮</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">茶/酒/饮料</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="">葡萄酒</a>
                                        <a href="" class="font-color">洋酒</a>
                                        <a href="">白酒</a>
                                        <a href="">啤酒</a>
                                        <a href="" class="font-color">黄酒</a>
                                        <a href="">品质水饮</a>
                                        <a href="" class="font-color">碳酸饮料</a>
                                        <a href="">果蔬汁</a>
                                    </p>
                                    <p>
                                        <a href="">花早茶</a>
                                        <a href="">茶饮</a>
                                        <a href="" class="font-color">其他饮品</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">粮油副食</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">调味品</a>
                                        <a href="" >果酱/酱料</a>
                                        <a href="" >食用油</a>
                                        <a href="" class="font-color">泡面</a>
                                        <a href="" >方便速食</a>
                                        <a href="" class="font-color">罐头</a>
                                        <a href="">米面</a>
                                    </p>
                                    <p>
                                        <a href="">五谷杂粮</a>
                                        <a href="" class="font-color">南北干货</a>
                                        <a href="" >Zippo 端午粽子</a>
                                        <a href="" class="font-color">中秋月饼</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">休闲零食</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">坚果</a>
                                        <a href="">蜜饯果干</a>
                                        <a href="">糖果/巧克力</a>
                                        <a href="" class="font-color">果冻布丁</a>
                                        <a href="" class="font-color">海产品</a>
                                        <a href="">薯片</a>
                                        <a href="">膨化食品</a>
                                        <a href="" class="font-color">其他零食</a>
                                    </p>
                                </div>
                            </div>
                            <div class="erji-2">
                                <img src="../images/index_images/ce8-1.png">
                                <a href="">
                                    <img src="../images/index_images/ce8-2.png">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="../images/index_images/ce9.png">
                        <a href="product_list.html"><span>运动户外</span></a>
                        <span>></span>
                        <div class="erji">
                            <div class="erji-1">
                                <div class="ej-cont">
                                    <div>
                                       <a href="">户外服装</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">速干T恤</a>
                                        <a href="" >卫衣衬衣</a>
                                        <a href="" class="font-color">户外裤</a>
                                        <a href="">冲锋衣裤</a>
                                        <a href="" class="font-color">功能内衣</a>
                                        <a href="">帽子/皮带</a>
                                        <a href="" class="font-color">围巾/围脖</a>
                                        
                                    
                                    </p>
                                    <p>
                                        <a href="">皮肤风衣</a>
                                        <a href="" class="font-color">巴塔</a>
                                        <a href="">手套</a>
                                        <a href="" class="font-color">棉服</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">运动鞋</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="">跑步鞋</a>
                                        <a href="" class="font-color">休闲鞋</a>
                                        <a href="" class="font-color">篮球鞋</a>
                                        <a href="">阿迪达斯</a>
                                        <a href="" >新百伦</a>
                                        <a href="">耐克</a>
                                        <a href="" class="font-color">美津浓</a>
                                        <a href="">李宁</a>
                                    </p>
                                    <p>
                                        <a href="">361°</a>
                                        <a href="">特步/安踏</a>
                                        <a href="" class="font-color">圣康尼</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">户外装备</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">登山包</a>
                                        <a href="">登山鞋</a>
                                        <a href="" class="font-color">越野包</a>
                                        <a href="">越野跑鞋</a>
                                        <a href="" class="font-color">休闲包</a>
                                        <a href="">露营装备</a>
                                        <a href="">头巾</a>
                                    </p>
                                    <p>
                                        <a href="">军刀</a>
                                        <a href="" class="font-color">格里高利</a>
                                        <a href="" >Zippo 打火机</a>
                                        <a href="" >水壶</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">其他分类</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">汽车机油</a>
                                        <a href="">渔具</a>
                                        <a href="">速尔跑步机</a>
                                        <a href="">泳衣</a>
                                        <a href="" class="font-color">运动健身</a>
                                        <a href="">运动相机</a>
                                        <a href="" class="font-color">嘉实多</a>
                                    </p>
                                </div>
                            </div>
                            <div class="erji-2">
                                <img src="../images/index_images/ce9-1.png">
                                <a href="">
                                    <img src="../images/index_images/ce9-2.png">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="../images/index_images/ce10.png">
                        <a href="product_list.html"><span>水果生鲜</span></a>
                        <span>></span>
                        <div class="erji">
                            <div class="erji-1">
                                <div class="ej-cont">
                                    <div>
                                       <a href="">新鲜水果</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">火龙果</a>
                                        <a href="" >奇异果</a>
                                        <a href="" class="font-color">车厘子</a>
                                        <a href="">榴莲</a>
                                        <a href="" class="font-color">柠檬</a>
                                        <a href="">牛油果</a>
                                        <a href="" class="font-color">苹果</a>
                                        <a href="">香橙</a>
                                        <a href="" class="font-color">葡萄</a>
                                    </p>
                                    <p>
                                        <a href="">柚子</a>
                                        <a href="" class="font-color">脆梨</a>
                                        <a href="" class="font-color">龙眼</a>
                                        <a href="">荔枝</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">水产海鲜</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="">鱼类/三文鱼</a>
                                        <a href="" class="font-color">虾类</a>
                                        <a href="">鲍鱼</a>
                                        <a href="">大闸蟹</a>
                                        <a href="" class="font-color">澳洲龙虾</a>
                                        <a href="">海参</a>
                                        <a href="" class="font-color">贝类</a>
                                        <a href="">乌贼</a>
                                    </p>
                                    <p>
                                        <a href="">海鲜礼盒</a>
                                        <a href="">鱼类制品</a>
                                        <a href="" class="font-color">其他水产</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">肉品禽蛋</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">牛肉</a>
                                        <a href="">羊肉</a>
                                        <a href="" class="font-color">鸡肉</a>
                                        <a href="">驴肉</a>
                                        <a href="" class="font-color">猪肉</a>
                                        <a href="">腊肠</a>
                                        <a href="">火鸡肉</a>
                                    </p>
                                    <p>
                                        <a href="">鸡蛋</a>
                                        <a href="" class="font-color">皮蛋</a>
                                        <a href="" >火锅食材</a>
                                        <a href="" >其他肉类</a>
                                    </p>
                                </div>
                                <div class="ej-cont">
                                    <div>
                                       <a href="">速冻特产</a>
                                      <a href="">更多 > </a>
                                    </div>
                                    <p>
                                        <a href="" class="font-color">冷冻食品</a>
                                        <a href="">冷冻面点</a>
                                        <a href="">海鲜制品</a>
                                        <a href="">蛋糕面包</a>
                                        <a href="" class="font-color">奶制品</a>
                                        <a href="">冰淇淋</a>
                                        <a href="" class="font-color">其他冷冻食品</a>
                                    </p>
                                </div>
                            </div>
                            <div class="erji-2">
                                <img src="../images/index_images/ce10-1.png">
                                <a href="">
                                    <img src="../images/index_images/ce10-2.png">
                                </a>
                            </div>
                        </div>
                    </li>
                </ul> 
            </div>
        </div>
        
        <ul class="cbl2">
            <li><a href="index.html">首页</a></li>
            <li><a href="">每日上新</a></li>
            <li><a href="">国家馆</a></li>
            <li><a href="">全球旗舰</a></li>
            <li><a href="">品质奶粉</a></li>
            <li><a href="">人气面膜</a></li>
            <li><a href="">工厂店</a></li>
        </ul>
        <div class="dhxg2">
            <a href="login.html">
                <img src="{{asset('static/images/index_images/dh.gif')}}">
            </a>
        </div>
        <div class="dhxg-last"></div>
    </div>

    <!-- 轮播 -->
    <div class="banner-box">
        <ul class="lb">
             <li><img src="{{asset('static/images/index_images/banner1.jpg')}}"></li>
             <li><img src="{{asset('static/images/index_images/banner2.jpg')}}"></li>
             <li><img src="{{asset('static/images/index_images/banner3.jpg')}}"></li>
             <li><img src="{{asset('static/images/index_images/banner4.jpg')}}"></li>
             <li><img src="{{asset('static/images/index_images/banner5.jpg')}}"></li>
             <li><img src="{{asset('static/images/index_images/banner6.jpg')}}"></li>
        </ul>
        <ol>
          <li class="selected">1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
        </ol>
        <img src="{{asset('static/images/index_images/left.png')}}" class="arrow leftjt">
        <img src="{{asset('static/images/index_images/right.png')}}" class="arrow right">
    </div>
    
    <!-- 背景颜色 -->
    <div class="back-color">
        <!-- 四张图片 -->
        <div class="four-box">
            <img src="{{asset('static/images/index_images/index1.jpg')}}">
            <img src="{{asset('static/images/index_images/index2.jpg')}}">
            <img src="{{asset('static/images/index_images/index3.jpg')}}">
            <img src="{{asset('static/images/index_images/index4.jpg')}}">
        </div>
    
        <!-- 每日上新 -->
        <div class="day-box">
            <div class="day-title">
                <b>每日上新</b>
                <span>全世界好物 , 每日一新</span>
                <span>进入新品频道 > </span>
            </div>
            <ul class="mrsx">
                <li>
                    <img src="{{asset('static/images/index_images/mrsx.jpg')}}">
                </li>
                <li>
                    <a href="" class="img-img">
                        <img src="{{asset('static/images/index_images/mrsx1.jpg')}}" alt="">
                    </a>
                    <p class="img-cont1">
                        Kenneth Cole 女士镂空透视玫瑰金色镶钻时尚腕表 10031428
                    </p>
                    <p class="img-cont2"> 
                        <b>￥699</b>
                        <del>￥1710</del>
                    </p>
                </li>
                <li>
                    <a href="" class="img-img">
                        <img src="{{asset('static/images/index_images/mrsx2.jpg')}}" alt="">
                    </a>
                    <p class="img-cont1">
                        NOVELLA 那绯澜 PRIZIA女性私处护理液 无香型 150毫升/瓶
                    </p>
                    <p class="img-cont2"> 
                        <b>￥79</b>
                        <del>￥168</del>
                    </p>
                </li>
                <li>
                    <a href="" class="img-img">
                        <img src="{{asset('static/images/index_images/mrsx3.jpg')}}" alt="">
                    </a>
                    <p class="img-cont1">
                        益智手工 小猪佩奇趣味贴纸游戏书（共8册） 3-6岁
                    </p>
                    <p class="img-cont2"> 
                        <b>￥59</b>
                        <del>￥96</del>
                    </p>
                </li>
                <li>
                    <a href="" class="img-img">
                        <img src="{{asset('static/images/index_images/mrsx4.jpg')}}" alt="">
                    </a>
                    <p class="img-cont1">
                        unicharm 尤妮佳 乐互宜成人尿不湿卫生护理垫纸尿垫 瞬吸除臭 女性专用 29厘米*16片
                    </p>
                    <p class="img-cont2"> 
                        <b>￥58</b>
                        <del>￥106</del>
                    </p>
                </li>
                <li>
                    <a href="" class="img-img">
                        <img src="../images/index_images/mrsx5.jpg" alt="">
                    </a>
                    <p class="img-cont1">
                        Kenneth Cole LANCÔME 兰蔻 臻白美颜套装
                    </p>
                    <p class="img-cont2"> 
                        <b>￥169</b>
                        <del>￥399</del>
                    </p>
                </li>
                <li>
                    <a href="" class="img-img">
                        <img src="../images/index_images/mrsx6.jpg" alt="">
                    </a>
                    <p class="img-cont1">
                        低幼绘本 好饿的小蛇 1-4岁
                    </p>
                    <p class="img-cont2"> 
                        <b>￥25</b>
                        <del>￥36</del>
                    </p>
                </li>
                <li>
                    <a href="" class="img-img">
                        <img src="../images/index_images/mrsx7.jpg" alt="">
                    </a>
                    <p class="img-cont1">
                        Calvin Klein 卡文克莱 女士印花无袖T恤42G5379
                    </p>
                    <p class="img-cont2"> 
                        <b>￥78</b>
                        <del>￥128</del>
                    </p>
                </li>
                <li>
                    <a href="" class="img-img">
                        <img src="../images/index_images/mrsx8.jpg" alt="">
                    </a>
                    <p class="img-cont1">
                        Kenneth Cole 女士镂空透视玫瑰金色镶钻时尚腕表 10031428
                    </p>
                    <p class="img-cont2"> 
                        <b>￥178</b>
                        <del>￥309</del>
                    </p>
                </li>
                <li>
                    <a href="" class="img-img">
                        <img src="../images/index_images/mrsx9.jpg" alt="">
                    </a>
                    <p class="img-cont1">
                        Kao 花王 厨房油污清洁喷雾 400毫升/瓶
                    </p>
                    <p class="img-cont2"> 
                        <b>￥39</b>
                        <del>￥49</del>
                    </p>
                </li>
                <li>
                    <a href="" class="img-img">
                        <img src="../images/index_images/mrsx10.jpg" alt="">
                    </a>
                    <p class="img-cont1">
                        ST小鸡 Shaldan Suteki Plus 室内扩香香薰瓶 复古樱桃香 45毫升/瓶
                    </p>
                    <p class="img-cont2"> 
                        <b>￥36</b>
                        <del>￥45</del>
                    </p>
                </li>
                <li>
                    <a href="" class="img-img">
                        <img src="../images/index_images/mrsx11.jpg" alt="">
                    </a>
                    <p class="img-cont1">
                        【增肌套餐】MUSCLETECH 肌肉科技 金牌乳清蛋白粉+白金肌酸粉+支链氨基酸套餐
                    </p>
                    <p class="img-cont2"> 
                        <b>￥599</b>
                        <del>￥799</del>
                    </p>
                </li>
            </ul>
        </div>
        
        <!-- 母婴 -->
        <div class="day-box">
            <div class="day-title">
                <b>母婴儿童</b>
                <span>品牌直销,妈妈的放心之选</span>
                <span>查看全部> </span>
            </div>
            <div class="mz">
                <div class="mz-one my-one">
                    <div class="mz-leibie">
                        <a href="">宝宝棉服</a>
                        <a href="">童鞋</a>
                        <a href="">萌宝套装 </a>
                        <a href="">孕妇装</a>
                        <a href="">洗护喂养</a>
                        <a href="">毛绒玩具</a>
                    </div>
                    <div> 初冬换新 </div>
                    <div>本周TOP热销外套榜单 </div>
                    <div>
                        <img src="{{asset('static/images/index_images/my1.jpg')}}">
                    </div>
                </div>
                <div class="mz-two">
                    <ul>
                        <li>
                            <div>  宝宝棉服  </div>
                            <div>
                                <img src="{{asset('static/images/index_images/my2.jpg')}}">
                            </div>
                        </li>
                        <li>
                            <div>  萌宝套装  </div>
                            <div>
                                <img src="../images/index_images/my3.jpg">
                            </div>
                        </li>
                        <li>
                            <div>  孕妇装  </div>
                            
                            <div>
                                <img src="../images/index_images/my4.jpg">
                            </div>
                        </li>
                        <li>
                            <div>  毛绒玩具  </div>
                            <div>
                                <img src="../images/index_images/my5.jpg">
                            </div>
                        </li>
                        <li>
                            <div>  童鞋  </div>
                            
                            <div>
                                <img src="../images/index_images/my6.jpg">
                            </div>
                        </li>
                        <li>
                            <div>  洗护喂养  </div>
                            
                            <div>
                                <img src="../images/index_images/my7.jpg">
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mz-three">
                    <div class="mz-three-tit">
                        <span>大家都在买</span>
                        <span class="hyh3">
                            换一批
                            <img src="{{asset('static/images/index_images/hyh.png')}}">
                        </span>
                    </div>
                    
                    <div class="myet ">
                        <img src="{{asset('static/images/index_images/my9.jpg')}}">
                        <div>
                        </div>
                        <p class="pro">
                            秋季新款孕妇时尚外出宽松V领蕾丝镂空孕妇连衣裙潮妈可哺乳长裙
                        </p>
                        <div></div>
                        <p class="price">
                            ¥ 78.40
                            <del>¥ 112.00</del>
                        </p>
                    </div>
                    <div class="myet mz-hyh">
                        <img src="../images/index_images/my8.jpg">
                        <div>
                        </div>
                        <p class="pro">
                            春新款儿童休闲鞋糖果色时尚公主鞋一脚蹬表演鞋学生鞋
                        </p>
                        <div></div>
                        <p class="price">
                            ¥ 54.60
                            <del>¥ 78.00</del>
                        </p>
                    </div>
                    <div class="myet mz-hyh">
                        <img src="../images/index_images/my10.jpg">
                        <div>
                        </div>
                        <p class="pro">
                            孕妇套装春秋新款时尚韩版宽松纯棉上衣孕妇托腹裤运动休闲两件套
                        </p>
                        <div></div>
                        <p class="price">
                            ¥ 110.00
                            <del>¥ 158.00</del>
                        </p>
                    </div>
                </div>
                <div class="mz-four"></div>
            </div>
        </div>

        <!-- 美容美妆 -->
        <div class="day-box">
            <div class="day-title">
                <b>美容美妆</b>
                <span>湿润肌肤 , 甜蜜奢享</span>
                <span>查看全部> </span>
            </div>
            <div class="mz">
                <div class="mz-one">
                    <div class="mz-leibie">
                        <a href="">必备面膜</a>
                        <a href="">美妆大赏</a>
                        <a href="">底妆遮瑕</a>
                        <a href="">斩男口红</a>
                        <a href="">超值套装</a>
                        <a href="">身体个护</a>
                    </div>
                    <div>护肤彩妆</div>
                    <div>买1送1 大牌满减 </div>
                    <div>
                        <img src="{{asset('static/images/index_images/mz1.png')}}">
                    </div>
                </div>
                <div class="mz-two">
                    <ul>
                        <li>
                            <div> 美妆大赏 </div>
                            
                            <div>
                                <img src="{{asset('static/images/index_images/mz2.png')}}">
                            </div>
                        </li>
                        <li>
                            <div> 必备面膜 </div>
                            
                            <div>
                                <img src="{{asset('static/images/index_images/mz3.png')}}">
                            </div>
                        </li>
                        <li>
                            <div> 超值套装 </div>
                            
                            <div>
                                <img src="../images/index_images/mz4.png">
                            </div>
                        </li>
                        <li>
                            <div> 底妆遮瑕 </div>
                            
                            <div>
                                <img src="../images/index_images/mz5.png">
                            </div>
                        </li>
                        <li>
                            <div> 斩男口红 </div>
                            
                            <div>
                                <img src="../images/index_images/mz6.png">
                            </div>
                        </li>
                        <li>
                            <div> 身体个护 </div>
                            
                            <div>
                                <img src="../images/index_images/mz7.png">
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mz-three">
                    <div class="mz-three-tit">
                        <span>大家都在买</span>
                        <span class="hyh2">
                            换一批
                            <img src="{{asset('static/images/index_images/hyh.png')}}">
                        </span>
                    </div>
                    <div class="mz-three-img ">
                        <img src="{{asset('static/images/index_images/mz8.png')}}">
                        <div>
                        </div>
                        <p class="pro">
                            泰国正品mistine持久控油定妆修容羽翼粉饼
                        </p>
                        <div></div>
                        <p class="price">
                            ¥ 45.08
                            <del>¥ 98.00</del>
                        </p>
                    </div>
                    <div class="mz-three-img mz-hyh">
                        <img src="../images/index_images/mz9.png">
                        <div>
                        </div>
                        <p class="pro">
                            萱宝宝美妆 付爱宝铂金时光五件套 补水保湿提亮肤色超值套装
                        </p>
                        <div></div>
                        <p class="price">
                            ¥ 1140.00
                            <del>¥ 1328.90</del>
                        </p>
                    </div>
                    <div class="mz-three-img mz-hyh">
                        <img src="../images/index_images/mz10.png">
                        <div>
                        </div>
                        <p class="pro">
                            安美素颜霜学生提亮肤色补水保湿精华V7裸妆打底懒人霜遮瑕面霜
                        </p>
                        <div></div>
                        <p class="price">
                            ¥ 75.00
                            <del>¥ 158.00</del>
                        </p>
                    </div>
                </div>
                <div class="mz-four"></div>
            </div>
        </div>

        <!-- 手表配饰 -->
        <div class="day-box">
            <div class="day-title">
                <b>手表配饰</b>
                <span>潮人必备,赚足回头率</span>
                <span>查看全部> </span>
            </div>
            <div class="mz">
                <div class="mz-one watch-one">
                    <div class="mz-leibie">
                        <a href="">棒球帽</a>
                        <a href="">简约围巾</a>
                        <a href="">精致手表</a>
                        <a href="">撩人耳环</a>
                        <a href="">框架眼镜</a>
                        <a href="">黄金珠宝</a>
                    </div>
                    <div> 气质礼帽 </div>
                    <div>秋日搭配的一点小心机</div>
                    <div>
                        <img src="{{asset('static/images/index_images/watch1.png')}}">
                    </div>
                </div>
                <div class="mz-two">
                    <ul>
                        <li>
                            <div>  简约围巾  </div>
                            
                            <div>
                                <img src="{{asset('static/images/index_images/watch2.png')}}">
                            </div>
                        </li>
                        <li>
                            <div>  棒球帽  </div>
                            
                            <div>
                                <img src="{{asset('static/images/index_images/watch3.png')}}">
                            </div>
                        </li>
                        <li>
                            <div>  精致手表  </div>
                        
                            <div>
                                <img src="../images/index_images/watch4.png">
                            </div>
                        </li>
                        <li>
                            <div> 撩人耳环 </div>
                            
                            <div>
                                <img src="../images/index_images/watch5.png">
                            </div>
                        </li>
                        <li>
                            <div> 框架眼镜  </div>
                        
                            <div>
                                <img src="../images/index_images/watch6.png">
                            </div>
                        </li>
                        <li>
                            <div> 黄金珠宝  </div>
                        
                            <div>
                                <img src="../images/index_images/watch7.png">
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mz-three">
                    <div class="mz-three-tit">
                        <span>大家都在买</span>
                        <span class="hyh4">
                            换一批
                            <img src="{{asset('static/images/index_images/hyh.png')}}">
                        </span>
                    </div>
                    <div class="watch-three-box">
                        <ul>
                            <li>
                                <img src="{{asset('static/images/index_images/watch8.png')}}">
                                <div class="watch-box-cont">
                                    <p>气质小方盘时尚女表潮流秀气女士学生休闲皮带表简约韩版新款手表</p>
                                    <p>¥ 38.50</p>
                                </div>
                            </li>
                            <li>
                                <img src="../images/index_images/watch9.png">
                                <div class="watch-box-cont">
                                    <p>贝雷帽女秋冬甜美可爱韩版日系百搭画家帽女羊毛呢帽时尚潮蓓蕾帽</p>
                                    <p>¥ 25.90</p>
                                </div>
                            </li>
                            <li>
                                <img src="../images/index_images/watch10.png">
                                <div class="watch-box-cont">
                                    <p>韩国个性三角形坠环女腰带百搭皮带休闲装饰裙子针扣学生牛仔裤带</p>
                                    <p>¥ 15.90</p>
                                </div>
                            </li>
                            <li>
                                <img src="../images/index_images/watch11.png">
                                <div class="watch-box-cont">
                                    <p>YTK 学院风加厚冬季围巾披肩百搭仿羊绒围巾韩版保暖纯色围巾</p>
                                    <p>¥ 38.90</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="watch-three-box-two">
                            <li>
                                <img src="{{asset('static/images/index_images/watch12.png')}}">
                                <div class="watch-box-cont">
                                    <p>香港蒂米妮品牌清新优雅手表女学生韩版简约百搭时尚女士手表防水</p>
                                    <p>¥ 229.50</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('static/images/index_images/watch13.png')}}">
                                <div class="watch-box-cont">
                                    <p>【漂】水洗做旧纯棉芒果黄棒球帽百搭韩版男女情侣鸭舌帽子四季款</p>
                                    <p>¥ 25.20</p>
                                </div>
                            </li>
                            <li>
                                <img src="../images/index_images/watch14.png">
                                <div class="watch-box-cont">
                                    <p>韩版触屏手套男女冬季加厚保暖学生可爱情侣骑车五指针织毛线手套</p>
                                    <p>¥ 15.90</p>
                                </div>
                            </li>
                            <li>
                                <img src="../images/index_images/watch15.png">
                                <div class="watch-box-cont">
                                    <p>小清新韩版针织围巾女冬长款毛线围脖学院风纯色情侣披肩百搭两用</p>
                                    <p>¥ 35.90</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mz-four"></div>
            </div>
        </div>
    </div>

    <!-- 侧边栏 -->
    <div id="side">
        <div class="erweima block">
            <img src="{{asset('static/images/index_images/phone.png')}}" width="25">
            <p>
                <img src="{{asset('static/images/index_images/ewm.jpg')}}">
            </p>
        </div>
        
        <div class="top block" style="display: none;"><a href="#"><img src="{{asset('static/images/index_images/top.png')}}" width="21"></a></div>
    </div>

    @endsection
