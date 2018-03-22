@extends('layouts.homemaster')

@section('title', '网易海购-美容彩妆_基础护肤_洁面')

@section('css js')

	<link rel="stylesheet" href="{{asset('static/css/product_details.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('static/css/detail.css')}}">
	<script type="text/javascript" src="{{asset('static/js/product_list.js')}}"></script>
	<script src="{{asset('static/js/detail.js')}}" type="text/javascript"></script>
    
@endsection
	
	@section('content')
		
	@include('home.comment')

	<!-- 分类表头 -->
	<p class="fjx"></p>

   
    <div id="fadeDiv">

        <div class="fadeLeft">
            <ul>
                <li style="display: block;">
                    <img src="/storage/uploads/shopping/{{$goodList->img}}"  width="350" height="350" >
                </li>
                <li>
                    <img src="/storage/uploads/shopping/{{$goodList->img}}"  width="350" height="350" >
                </li>
                <li>
                     <img src="/storage/uploads/shopping/{{$goodList->img}}" width="350" height="350" >
                </li>                
            </ul>
            <ol>
                <li class="selected">
                    <img src="/storage/uploads/shopping/{{$goodList->img}}" width="55" height="55">
                </li>
                 <li>
                   <img src="/storage/uploads/shopping/{{$goodList->img}}" width="55" height="55">
                </li>
                <li>
                    <img src="/storage/uploads/shopping/{{$goodList->img}}" width="55" height="55">
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
                <p class="immediately"><a href="">加入购物车</a></p>
            </div>
        </div> 
    </div>
             
           

    <div id="detail" style="margin-bottom: 30px;">
       
        <h2 class="title"><span style="color: red;">商品详情</span><span>买家评论</span></h2>
        <div class="cont">
            <div calss="img" style="display: block">
               
                <div class="img_deai">
                    <img src="{{asset('static/images/deai/lame1.jpg')}}" alt="">
                    <img src="{{asset('static/images/deai/lame2.jpg')}}" alt="">
                    <img src="{{asset('static/images/deai/lame3.jpg')}}" alt="">
                    <img src="{{asset('static/images/deai/lame4.jpg')}}" alt="">
                    <img src="{{asset('static/images/deai/lame5.jpg')}}" alt="">
                    <img src="{{asset('static/images/deai/lame6.jpg')}}" alt="">
                    <img src="{{asset('static/images/deai/lame7.jpg')}}" alt="">
                </div>
                
                <strong style="display: block;clear: both;"></strong>
            </div>
            <div class="comment">
                <ul id="pn">
                    <li class="list0">
                        <a class="close" href="javascript:;">X</a>
                        <div class="head"><img src="../images/deai/lame7.jpg" width="60px" height="60px"> </div>
                       
                          
                        <div class="content">
                            <p class="text">
                              <span class="name">Andy：</span>
                              哈哈哈哈哈谁还没个妈～//@我的朋友是个呆B: 饮水机那个蕾丝罩我给跪了//@八卦_我实在是太CJ了:仿佛看到了自己家
                            </p> 
                            <div class="pic">
                                <img src="../images/deai/lame7.jpg" width="30px" height="30px">
                                 <img src="../images/deai/lame7.jpg" width="30px" height="30px">
                                  <img src="../images/deai/lame7.jpg" width="30px" height="30px">
                            
                            </div>
                            
                       
                        <div class="good">
                            <span class="date">02-14 23:01</span>
                            <a class="dzan" href="javascript:;">赞</a>
                        </div>
                         <div class="people" total="2980">2980人觉得很赞</div>
                        <div class="comment-list">
                            <div class="comment" user="self">
                                <div class="comment-left"> <img src="../images/deai/lame7.jpg" width="30px" height="30px"></div>
                           
                       
                                <div class="comment-right">
                                    <div class="comment-text">
                                        <span class="user">老王：</span>
                                         我住隔壁我姓王
                                    </div>
                                    <div class="comment-date">02-14 22:00
                                         <a class="comment-zan" href="javascript:;" total="23" my="1">23 取消赞</a>
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
                    <li class="list0">
                     <a class="close" href="javascript:;">X</a>
                     <div class="head">
                        <img src="../images/index_images/mrsx5.jpg" width="60px" height="60px">
                      </div>
                     <div class="content">
                     <p class="text"><span class="name">Andy：</span>哈哈哈哈哈谁还没个妈～//@我的朋友是个呆B: 饮水机那个蕾丝罩我给跪了//@八卦_我实在是太CJ了:仿佛看到了自己家</p> 
                     <div class="pic">
                        <img src="../images/deai/lame7.jpg" width="30px" height="30px">
                    </div>
                     <div class="good">
                        <span class="date">02-14 23:01</span>
                        <a class="dzan" href="javascript:;">赞</a>
                    </div>
                     <div class="people" total="0" style="display: none;">
                         
                     </div>
                     <div class="comment-list">
                     <div class="comment" user="self">
                      <div class="comment-left">
                        <img src="../images/deai/lame7.jpg" width="30px" height="30px">
                    </div>
                      <div class="comment-right">
                      <div class="comment-text">
                        <span class="user">我：</span>
                        看哭了留卡号吧</div>
                      <div class="comment-date">02-14 24:00
                      <a class="comment-zan" href="javascript:;" total="286" my="1">286 取消赞</a>
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