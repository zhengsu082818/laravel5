
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

