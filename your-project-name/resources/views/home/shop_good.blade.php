@extends('layouts.homemaster')

@section('title', '网易海购-美容彩妆_基础护肤_洁面')

@section('css js')
    <script type="text/javascript" src="{{asset('static/js/index.js')}}"></script>
  
	<link rel="stylesheet" href="{{asset('static/css/product_details.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('static/css/detail.css')}}">
	<script src="{{asset('static/js/detail.js')}}" type="text/javascript"></script>
    
@endsection
	
	@section('content')
		
	@include('home.comment')

   
	<!-- 分类表头 -->
	<p class="fjx"></p>

  <!-- 商品详情 -->
  <div id="fadeDiv">

        <div class="fadeLeft">
            <ul>
                <li style="display: block;">
                    <img src="/storage/uploads/shopping/{{$goodList->img}}"  width="350" height="350" >
                </li>
                <li>
                    <img src="/storage/uploads/shopping/{{$goodList->img1}}"  width="350" height="350" >
                </li>
                <li>
                     <img src="/storage/uploads/shopping/{{$goodList->img2}}" width="350" height="350" >
                </li>                
            </ul>
            <ol>
                <li class="selected">
                    <img src="/storage/uploads/shopping/{{$goodList->img}}" width="55" height="55">
                </li>
                 <li>
                   <img src="/storage/uploads/shopping/{{$goodList->img1}}" width="55" height="55">
                </li>
                <li>
                    <img src="/storage/uploads/shopping/{{$goodList->img2}}" width="55" height="55">
                </li>
            </ol>
        </div> 
        <div class="pro_det" >
             
            <span class="pro_title">{{$goodList->title}}</span>
           
            <div class="price">
                 <p class="font" style=" width:520px;background:#f2f2f2;border-bottom:1px solid #b3b3b3;border-top:1px solid #b3b3b3;">价格：<b style="font-size: 24px;">¥{{$goodList->price}}</b></p>
                 <strong style="display: block;clear:both;"></strong>
            </div>
            <div class="price">
                 <p class="font">运费：<span>免运费</span></b></p>
            </div>
            <div class="price">
                 <p class="font">说明: <span>支持7天无忧退货</span></b></p>
                 <strong style="display: block;clear:both;"></strong>
            </div>
            <div class="price">
                 <p class="font">服务: <span>本商品由 自营保税仓 发货</span></b></p>
                 <strong style="display: block;clear:both;"></strong>
            </div>
            <div class="price">
                 <p class="font">数量:
                    <div id="num_box">
                        <input id="number" type="text" value="1">
                        <ul style="width:24px; margin-top: 10px;">
                            <li class="plus">+</li>
                            <li class="reduce">-</li>
                        </ul>
                        <span class="font" style="margin-left: 20px;">库存数量 ( <span style="color:#e31436;">{{$goodList->nums}}</span> )</span>
                        <strong style="display: block;clear:both;"></strong>
                    </div>
                 </p> 
            </div>

            <div class="buy">
                <p class="immediately"><a href=''>加入购物车</a></p>
            </div>
        </div> 
  </div>
             
           
  <div id="detail" style="margin-bottom: 30px;">
               
    <h2 class="title"><span style="color: #e31436;">商品详情</span><span>买家评论</span></h2>
    <div class="cont">
        <div calss="img" style="display: block">
            <div class="img_deai">
                {!!$goodList->content!!}
            </div>
            <strong style="display: block;clear: both;"></strong>
        </div>
        <div class="comment">
            <ul id="pn">
                <li class="list0">
                    <a class="close" href="javascript:;">X</a>
                    <div class="head"><img src="../images/deai/lame7.jpg" width="60px" height="60px"> 
                    </div>
                   
                      
                    <div class="content">
                        <p class="text">
                          <span class="name">用户名</span>
                        </p> 
                        <div class="good">
                            <span class="date">评论时间</span>
                        </div>
                    <div class="comment-list">
                        <div class="comment" user="self">
                            <div class="comment-left"> <img src="../images/deai/lame7.jpg" width="30px" height="30px"></div>
                   
                            <div class="comment-right">
                                <div class="comment-text">
                                    <span class="user">老王：</span>
                                     我住隔壁我姓王
                                </div>
                                <div class="comment-date">02-14 22:00
                                     <a class="comment-dele" href="javascript:;">回复</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment" user="self">
                              <div class="comment-left">
                                <img src="../images/deai/lame7.jpg" width="30px" height="30px">
                              </div>
                              <div class="comment-right">
                                  <div class="comment-text">
                                    <span class="user">我：</span>看哭了留卡号吧
                                  </div>
                                  <div class="comment-date">02-14 24:00
                                    <a class="comment-zan" href="javascript:;" total="0" my="0">赞</a>
                                    <a class="comment-dele" href="javascript:;">删除</a>
                                  </div>
                              </div>
                        </div>
                    </div>
                         <div class="hf">
                             <textarea type="text" class="hf-text" autocomplete="off" maxlength="100">评论…</textarea>
                             <button class="hf-btn">回复</button>
                             <span class="hf-nub">0/100</span>
                         </div> 
                    </div>
                </li>
            </ul>
        </div>
    </div>
  </div>



	
	@endsection