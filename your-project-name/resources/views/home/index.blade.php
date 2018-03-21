
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
             @foreach($banner as $v)
             <li><img src="/storage/uploads/banner/{{$v->img}}"></li>
             @endforeach
        </ul>
        <ol>
         
          <li class="selected"></li>
          @for($i = 1;$i < $bancount;$i++)
            <li></li>
          @endfor
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
                @foreach($gengxin as $v)
                <li>
                    <a href="" class="img-img">
                        <img src="/storage/uploads/shopping/{{$v->img}}" alt="">
                    </a>
                    <p class="img-cont1">
                        {{$v->title}}
                    </p>
                    <p class="img-cont2"> 
                        <b>¥ {{$v->price}}</b>
                       
                    </p>
                </li>
                @endforeach
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
                        @foreach($mother as $v)
                        <a href="">{{$v->name}}</a>
                        @endforeach
                    </div>
                    <div> 初冬换新 </div>
                    <div>本周TOP热销外套榜单 </div>
                    <div>
                        <img src="{{asset('static/images/index_images/my1.jpg')}}">
                    </div>
                </div>
                <div class="mz-two">
                    <ul>
                        @foreach($mother as $v)
                        <li>
                            <div class="ttt">  {{$v->name}}  </div>
                            <div class="iii">
                                <img src="{{$v->url}}">
                            </div>
                        </li>
                        @endforeach
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
                    @foreach($mhyh as $v)
                    <div class="myet ">
                        <img src="/storage/uploads/shopping/{{$v->img}}">
                        <div>
                        </div>
                        <p class="pro">
                            {{$v->title}}
                        </p>
                        <div></div>
                        <p class="price">
                            ¥  {{$v->price}}
                            <a href="" style="float: right;">查看详情</a>
                        </p>
                    </div>
                    @endforeach
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
                        @foreach($mei_rong as $v)
                        <a href="">{{$v->name}}</a>
                        @endforeach
                        
                    </div>
                    <div>护肤彩妆</div>
                    <div>买1送1 大牌满减 </div>
                    <div>
                        <img src="{{asset('static/images/index_images/mz1.png')}}">
                    </div>
                </div>
                <div class="mz-two">
                    <ul>
                        @foreach($mei_rong as $v)
                        <li>
                            <div class="ttt">  {{$v->name}} </div>
                            
                            <div class="iii">
                                 <img src="{{$v->url}}">
                            </div>
                        </li>
                        @endforeach
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
                    @foreach($mrhyh as $v)
                    <div class="mz-three-img ">
                        <img src="/storage/uploads/shopping/{{$v->img}}">
                        <div>
                        </div>
                        <p class="pro">
                             {{$v->title}}
                        </p>
                        <div></div>
                        <p class="price">
                            ¥ {{$v->price}}
                            <a href="" style="float: right;">查看详情</a>
                        </p>
                    </div>
                   @endforeach
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
                       @foreach($wt_ps as $v)
                        <a href="">{{$v->name}}</a>
                        @endforeach
                    </div>
                    <div> 气质礼帽 </div>
                    <div>秋日搭配的一点小心机</div>
                    <div>
                        <img src="{{asset('static/images/index_images/watch1.png')}}">
                    </div>
                </div>
                <div class="mz-two">
                    <ul>
                        @foreach($wt_ps  as $v)
                        <li>
                            <div class="ttt">  {{$v->name}} </div>
                            
                            <div class="iii">
                                 <img src="{{$v->url}}">
                            </div>
                        </li>
                        @endforeach
                        
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

