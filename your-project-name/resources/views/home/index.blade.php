
@extends('layouts.homemaster')

@section('title', '网易考拉海购-网易旗下_正品低价_海外直采_海外直邮')

@section('css js')
    <script type="text/javascript" src="{{asset('static/js/index.js')}}"></script>
    <link rel="stylesheet" href="{{asset('static/css/index.css')}}" type="text/css">
@endsection
    
    @section('content')

    @include('home.comment')
   
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

