@extends('home.public')

@section('title', '个人中心-我的订单-网易考拉海购')

@section('css')
     <link rel="stylesheet" type="text/css" href="{{asset('home/css/shopping.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('home/css/shopcar.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('home/css/shopcar_zzr.css')}}">
    
     <link rel="stylesheet" type="text/css" href="{{asset('home/css/list.css')}}">
@show

     <!-- 导入外部js -->
@section('js')
    <script type="text/javascript" src="{{asset('home/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/product1.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/list.js')}}"></script>
    
@endsection

@section('content')
<!-- 订单 -->
<div class="dind">
    <div class="dind_con">
         <h2>个人中心</h2>
         <hr style="background-color:#999;">
         <div class="dind_tit">
             <p  class="dind_bor"><a href="javascript:;">我的订单</a></p>
             <p><a href="{{url('home/home/number')}}">账号管理</a></p>
             <p><a href="{{url('home/personal')}}">管理收货地址</a></p>
         </div>
    </div>
    <div class="dind_tab">
        <ol>
              <li class="dind_tab_li">
                  <h2 >所有订单</h2>
              </li>
              <li>
                  <h2>待付款<span>{{$count['dfk']}}</span></h2>
                  
              </li>
              <li>
                  <h2>待发货<span>{{$count['dfh']}}</span></h2>
                  
              </li>
              <li>
                  <h2>待收货<span>{{$count['dsh']}}</span></h2>
                  
              </li>
              <li>
                  <h2>待评论<span>{{$count['dpl']}}</span></h2>
                  
              </li>
              <li style="float:right;margin-right:20px;">
                 <img style="width: 20px;" src="{{asset('home/images/personal_images/delete.png')}}"><p>订单回收站</p>
              </li>
          </ol> 
          
    </div>
    <div class="input">
        <form action="{{url('home/orderform')}}" method="get">
            <input type="text" name="where" placeholder="请输入订单号或商品名">
            <button>搜索</button>
        </form> 
    </div> 
    <div class="dind_dind">
        <ul class="ul">
            <li>
                <!-- 所有订单 -->
                @if($info['alldind1']!=null or $info['alldind']!=null)
                <table class="table">
                    <tr>
                        <th>订单号</th>
                        <th>商品缩略图</th>
                        <th>商品名字</th>
                        <th>售价</th>
                        <th>数量</th>
                        <th>总价</th>
                        <th>购买时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($info['alldind1'] as $k=>$v)
                    <tr>
                        <td>未付款不支持</td>
                        <td>{{$v->img}}</td>
                        <td>{{$v->product}}</td>
                        <td>{{$v->price}}</td>
                        <td>{{$v->num}}</td>
                        <td>{{$v->aotal}}</td>
                        <td>{{$v->created_at}}</td>
                        <td><a href='{{url("home/orderform/$v->id")}}'>删除订单</a></td>
                    </tr>
                    @endforeach
                    @foreach($info['alldind'] as $k=>$v)
                    <tr>
                        <td>{{$v->orderid}}</td>
                        <td>{{$v->img}}</td>
                        <td>{{$v->product}}</td>
                        <td>{{$v->price}}</td>
                        <td>{{$v->num}}</td>
                        <td>{{$v->aotal}}</td>
                        <td>{{$v->created_at}}</td>
                        <td ><a href='{{url("home/goodsinfo/$v->id/edit")}}'>查看详情</a></td>
                    </tr>
                    @endforeach
                
                    
             
                </table>
                @else
                    <h4 style="color:red;font-size:22px;text-align:center;line-height:10;">您还没有订单!</h4>
                @endif
            </li>
            <li>
                <!-- 待付款 -->
                @if($info['alldind1']!=null)
                <table class="table">
                    <tr>
                        <th>订单号</th>
                        <th>商品缩略图</th>
                        <th>商品名字</th>
                        <th>售价</th>
                        <th>数量</th>
                        <th>总价</th>
                        <th>购买时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($info['alldind1'] as $k=>$v)
                    <tr>
                        <td>未付款不支持</td>
                        <td>{{$v->img}}</td>
                        <td>{{$v->product}}</td>
                        <td>{{$v->price}}</td>
                        <td>{{$v->num}}</td>
                        <td>{{$v->aotal}}</td>
                        <td>{{$v->created_at}}</td>
                        <td><a href='{{url("home/orderform/$v->id")}}'>删除订单</a></td>
                    </tr>
                    @endforeach
                
                    
             
                </table>
                @else
                    <h4 style="color:red;font-size:22px;text-align:center;line-height:10;">您还没有该类型订单!</h4>
                @endif
            </li>
            <li>
                <!-- 待发货 -->
                 @if($info['alldind2']!=null)
                <table class="table">
                    <tr>
                        <th>订单号</th>
                        <th>商品缩略图</th>
                        <th>商品名字</th>
                        <th>售价</th>
                        <th>数量</th>
                        <th>总价</th>
                        <th>购买时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($info['alldind2'] as $k=>$v)
                    <tr>
                        <td>{{$v->orderid}}</td>
                        <td>{{$v->img}}</td>
                        <td>{{$v->product}}</td>
                        <td>{{$v->price}}</td>
                        <td>{{$v->num}}</td>
                        <td>{{$v->aotal}}</td>
                        <td>{{$v->created_at}}</td>
                        <td><a href='{{url("home/goodsinfo/$v->id/edit")}}'>查看详情</a></td>
                    </tr>
                    @endforeach
                
                    
             
                </table>
                @else
                    <h4 style="color:red;font-size:22px;text-align:center;line-height:10;">您还没有该类型订单!</h4>
                @endif
            </li>
            <li>
                <!-- 待收货 -->
                 @if($info['alldind3']!=null)
                <table class="table">
                    <tr>
                        <th>订单号</th>
                        <th>商品缩略图</th>
                        <th>商品名字</th>
                        <th>售价</th>
                        <th>数量</th>
                        <th>总价</th>
                        <th>购买时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($info['alldind3'] as $k=>$v)
                    <tr>
                        <td>{{$v->orderid}}</td>
                        <td>{{$v->img}}</td>
                        <td>{{$v->product}}</td>
                        <td>{{$v->price}}</td>
                        <td>{{$v->num}}</td>
                        <td>{{$v->aotal}}</td>
                        <td>{{$v->created_at}}</td>
                        <td><a href='{{url("home/goodsinfo/$v->id/edit")}}'>查看详情</a></td>
                    </tr>
                    @endforeach
                
                    
             
                </table>
                @else
                    <h4 style="color:red;font-size:22px;text-align:center;line-height:10;">您还没有该类型订单!</h4>
                @endif
            </li>
            <li>
                <!-- 待评论 -->
                @if($info['alldind4']!=null)
                <table class="table">
                    <tr>
                        <th>订单号</th>
                        <th>商品缩略图</th>
                        <th>商品名字</th>
                        <th>售价</th>
                        <th>数量</th>
                        <th>总价</th>
                        <th>购买时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($info['alldind4'] as $k=>$v)
                    <tr>
                        <td>{{$v->orderid}}</td>
                        <td>{{$v->img}}</td>
                        <td>{{$v->product}}</td>
                        <td>{{$v->price}}</td>
                        <td>{{$v->num}}</td>
                        <td>{{$v->aotal}}</td>
                        <td>{{$v->created_at}}</td>
                        <td><a href='{{url("home/orderform/$v->id/edit")}}'>删除订单</a></td>
                    </tr>
                    @endforeach
                
                    
             
                </table>
                @else
                    <h4 style="color:red;font-size:22px;text-align:center;line-height:10;">您还没有该类型订单!</h4>
                @endif
            </li>
            <li>
                <!-- 已删除 -->
                @if($info['alldind5']!=null)
                <table class="table">
                    <tr>
                        <th>订单号</th>
                        <th>商品缩略图</th>
                        <th>商品名字</th>
                        <th>售价</th>
                        <th>数量</th>
                        <th>总价</th>
                        <th>购买时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($info['alldind5'] as $k=>$v)
                    <tr>
                        <td>{{$v->orderid}}</td>
                        <td>{{$v->img}}</td>
                        <td>{{$v->product}}</td>
                        <td>{{$v->price}}</td>
                        <td>{{$v->num}}</td>
                        <td>{{$v->aotal}}</td>
                        <td>{{$v->created_at}}</td>
                        <td><a href='{{url("home/goodsinfo/$v->id/edit")}}'>查看详情</a></td>
                    </tr>
                    @endforeach
                
                    
             
                </table>
                @else
                    <h4 style="color:red;font-size:22px;text-align:center;line-height:10;">您还没有该类型订单!</h4>
                @endif
            </li>
        </ul>

    </div>
</div>
    
<!-- 推荐 -->
<div class="content">
    <div class="con_food">
        <h3>为您推荐</h3>
        <ul>
            <li id="bc_food"><</li>
            <li id="bc_food_r" style="border:1px solid red;color:red;">></li>
        </ul>
        <div class="food_box">
            <ul id="js_box">
                <li>
                    <img src="" alt="">
                    <div class="box_com_food">
                        <h5>魅族 PRO 7</h5>
                        <p>3月2日前购机赠199...</p>
                        <h4>￥<span>1999</span>起</h4>        
                    </div>
                </li>

                <li>
                    <img src="" alt="">
                    <div class="box_com_food">
                        <h5>魅族 PRO 7</h5>
                        <p>3月2日前购机赠199...</p>
                        <h4>￥<span>1999</span>起</h4>        
                    </div>
                </li>

                <li>
                    <img src="" alt="">
                    <div class="box_com_food">
                        <h5>魅族 PRO 7</h5>
                        <p>3月2日前购机赠199...</p>
                        <h4>￥<span>1999</span>起</h4>        
                    </div>
                </li>

                <li>
                    <img src="" alt="">
                    <div class="box_com_food">
                        <h5>魅族 PRO 7</h5>
                        <p>3月2日前购机赠199...</p>
                        <h4>￥<span>1999</span>起</h4>        
                    </div>
                </li>

                <li>
                    <img src="" alt="">
                    <div class="box_com_food">
                        <h5>魅族 PRO 7</h5>
                        <p>3月2日前购机赠199...</p>
                        <h4>￥<span>1999</span>起</h4>        
                    </div>
                </li>

                <li>
                    <img src="" alt="">
                    <div class="box_com_food">
                        <h5>魅族 PRO 7</h5>
                        <p>3月2日前购机赠199...</p>
                        <h4>￥<span>1999</span>起</h4>        
                    </div>
                </li>

                <li>
                    <img src="" alt="">
                    <div class="box_com_food">
                        <h5>魅族 PRO 7</h5>
                        <p>3月2日前购机赠199...</p>
                        <h4>￥<span>1999</span>起</h4>        
                    </div>
                </li>

                <li>
                    <img src="" alt="">
                    <div class="box_com_food">
                        <h5>魅族 PRO 7</h5>
                        <p>3月2日前购机赠199...</p>
                        <h4>￥<span>1999</span>起</h4>        
                    </div>
                </li>

                <li>
                    <img src="" alt="">
                    <div class="box_com_food">
                        <h5>魅族 PRO 7</h5>
                        <p>3月2日前购机赠199...</p>
                        <h4>￥<span>1999</span>起</h4>        
                    </div>
                </li>

                <li>
                    <img src="" alt="">
                    <div class="box_com_food">
                        <h5>魅族 PRO 7</h5>
                        <p>3月2日前购机赠199...</p>
                        <h4>￥<span>1999</span>起</h4>        
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

    <!-- 底部结束 -->
@endsection


<!--  内外部js -->
@section('htmljs')
<script>
    window.onload=function(){
        var ol=document.getElementsByTagName('ol')[0];
        var olli=ol.getElementsByTagName('li');
        var ul=document.getElementsByClassName('ul')[0];
        for (var i = 0; i < olli.length; i++) {
            olli[i].onclick=function(){
                for (var j = 0; j < olli.length; j++) {
                    if(olli[j]==this){
                        olli[j].className='dind_tab_li';
                        ul.style.left='-'+j*900+'px';
                    }else{
                        olli[j].className='';
                    }
                }
            }
        }
    }
</script>

@endsection

