@extends('home.public')

@section('title', '购买页-网易考拉海购')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('home/css/payment.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('home/css/Purchase page.css')}}" type="text/css">
    <link href="{{asset('home/css/Province_css/city.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/css/dingdan.css')}}" rel="stylesheet" type="text/css" />
@show

     <!-- 导入外部js -->
@section('js')
    <script type="text/javascript" src="{{asset('home/js/My Receiving address.js/city.min.js')}}"></script>
    
@endsection

@section('content')
<!-- 选择收货地址 -->
  <div class="address">
    <div class="address-one">
      <h3 style="color:#000;">选择收货地址</h3>
    </div>
    
 <ul class="dz_box_ul">
   
  @if($list['personals']!=null)
    @foreach($list['personals'] as $k=>$v)
      <li class="dz_box ">
       <input type="hidden" class="shdz_ids" value="{{$v['id']}}">
        <div>{{$v['name']}}</div>
        <div style="border-bottom:1px solid #ccc;height:10px;"></div>
        <div>{{$v['shdz']}}</div>
        <div>{{$v['phone']}}</div>
      </li>
    @endforeach
  @else
  <li class="dz_box ">
  <div class="box">
      <h4>您还没有收货地址请添加!</h4>
  </div>
    <div class="zzr">
      <p>*****     收</p>
      <hr>
      <p>*************</p>
      <p>*************</p>
      <p>*************</p>
    </div>
  </li>
  @endif
 </ul>
    
 <div style="clear:both;"></div>
<span class="adddd" id="showModel" style="text-align:left;border-radius:6px;margin-left:20px;border:1px solid #ccc;display:inline-block;margin-top:10px;padding:4px;background-color:#fff;"><a href="{{url('home/personal')}}"  class="a_">+添加收货地址</a></span>
<!-- 模态框 -->
<form action="{{url('home/shopping')}}" method="post">

  </div>
  <!-- 确定商品信息 -->
<div class="information">
    <div class="information-one">
      <h3 style="color:#000;">确认商品信息</h3>
    </div>
    <div class="information-two">
      <span style="width: 400px; margin-left: 30px;">商品信息</span>
      
      <span style="width: 200px;">单价(元)</span>
      <span style="width: 200px;">数量</span>
      <span style="width: 200px;">金额(元)</span>
    </div>
    {{ csrf_field() }}
    <input type="hidden" name="ids" value="{{$list['ids']}}">

    @foreach ($list['info'] as $k=>$v)
      <div class="information-five" style="margin-top:10px;">
        <div style="width: 400px; margin-left: 30px;">
          <img style="width:78px;height:78px;margin-top: 1px;margin-right:20px;" src="{{$v['img']}}">
          <p style="margin-top: 24px;">{{$v['product']}}</p>
          <br>
          <br>
          <br>  
          <p> 支持7天无忧退货</p>
        </div>
        
        <div style="width: 200px;margin-top: 24px;">
          <p>{{$v['price']}}</p>
        </div>
        <div style="width: 200px;margin-top: 24px;">
          <p>{{$v['num']}}</p>
        </div>
        <div style="width: 200px;margin-top: 24px;color:red;">
          <p><b>￥{{$v['aotal']}}</b></p>
        </div>
      </div>
    @endforeach
</div>
          <div style="clear: both;"></div>
  <!-- 提交订单 -->
  <div class="Submit" style="margin-top:20px;">
    <div class="Submit-one" style="margin-top: 30px;">
      <p>商品应付总计金额：</p><p>¥{{$list['alljg']}}</p>
    </div>
    
    <div class="Submit-one">
      <p style="margin-top: 6px;">总计金额：</p><b>¥{{$list['alljg']}}</b>
      <input type="hidden" name="alljg" value="{{$list['alljg']}}">
      <input type="hidden" class="shdz_id" name="shdz_id" value="">

    </div>
    <div class="Submit-two">
      <a href='{{url("home/shopping")}}'><span>返回购物车修改</span></a>
      <button style="color:#Fff;margin-top:-20px;">去购买</button>
    </div>
  </div>
</form>
@endsection


<!--  内部js -->
@section('htmljs')
<script>  
        window.onload=function(){
document.getElementsByClassName('shdz_id')[0].value=document.getElementsByClassName('shdz_ids')[0].value

          document.getElementsByClassName('dz_box')[0].className='dz_box xz';
          var shdz_ids=document.getElementsByClassName('shdz_ids');
          var shdz_id=document.getElementsByClassName('shdz_id')[0];
          var dz_boxO=document.getElementsByClassName('dz_box');

          for (var i = 0;i < dz_boxO.length; i++) {
            dz_boxO[i].onclick=function(){
              for (var j = 0; j < dz_boxO.length; j++) {
                if(dz_boxO[j]==this){
                  dz_boxO[j].className='dz_box xz';
                  shdz_id.value=shdz_ids[j].value;
                }else{
                  dz_boxO[j].className='dz_box';
                }
              }
            }
          }
          
        }
        
</script>  
@show

