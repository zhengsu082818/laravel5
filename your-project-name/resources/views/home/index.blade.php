
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
                @foreach($gengxin as $v)
                <li>
                    <a href="" class="img-img">
                        <img src="/storage/uploads/shopping/{{$v->img}}" alt="" style=" width: 157px;
                        height: 157px;">
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
                            @foreach($wthyh  as $v)
                            <li>
                                <img src="/storage/uploads/shopping/{{$v->img}}">
                                <div class="watch-box-cont">
                                    <p> {{$v->title}}</p>
                                    <p>¥ {{$v->price}}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <ul class="watch-three-box-two">
                            @foreach($wthyh2  as $v)
                            <li>
                                <img src="/storage/uploads/shopping/{{$v->img}}">
                                <div class="watch-box-cont">
                                    <p>{{$v->title}}</p>
                                    <p>¥ {{$v->price}}</p>
                                </div>
                            </li>
                           @endforeach
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

