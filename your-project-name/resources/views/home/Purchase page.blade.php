@extends('home.public')

@section('title', '购买页-网易考拉海购')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('home/css/payment.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('home/css/Purchase page.css')}}" type="text/css">
    <link href="{{asset('home/css/Province_css/city.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('home/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
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
    <div class="xzshdi">
        <div style="margin-left: 96px;">
          <span>
            <b>*</b> 所在地区
                  <div class="infolist" style="margin-left:20px; margin-top: -14px;">
                      <div class="liststyle" style="margin-left:0;">
                          <span id="Province" >
                              <i>请选择省份</i>
                              <ul style="height:200px;overflow:auto;">
                                  <li><a href="javascript:void(0)" alt="请选择省份">请选择省份</a></li>
                              </ul>
                              <input type="hidden" name="cho_Province" value="请选择省份">
                          </span>
                          <span id="City">
                              <i>请选择城市</i>
                             <ul style="height:200px;overflow:auto;">
                                  <li><a href="javascript:void(0)" alt="请选择城市">请选择城市</a></li>
                              </ul>
                              <input type="hidden" name="cho_City" value="请选择城市">
                          </span>
                          <span id="Area">
                              <i>请选择地区</i>
                              <ul style="height:200px;overflow:auto;">
                                  <li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>
                              </ul>
                              <input type="hidden" name="cho_Area" value="请选择地区">
                          </span>
                      </div>
                  </div>
          </span>
        </div>
        <div style="margin-left: 94px;">
          <span class="ziti">
            <b>*</b> 详细地址<input style="color:#333;text-indent:6px;" type="text" placeholder="请填写详细地址信息">
          </span>
        </div>
        <div>
          <span class="ziti">
            <b>*</b> 收货人姓名<input style="color:#333;text-indent:6px;" type="text" placeholder="请使用真实姓名">
          </span>
        </div>
        <div style="margin-left: 94px;">
          <span class="ziti">
            <b>*</b> 手机号码<input style="color:#333;text-indent:6px;" type="text" placeholder="手机号码必须填">
          </span>
        </div>
        
        <button>保存新地址</button>
      </div>
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
    
    @foreach ($list['info'] as $k=>$v)
      <div class="information-five" style="margin-top:10px;">
        <div style="width: 400px; margin-left: 30px;">
          <img style="width:78px" src="../images/product_details/details2.jpg">
          <p style="margin-top: 24px;">{{$v['product']}}name</p>
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
          <center>
           {!! $list['info']->render() !!}
          </center>
  <!-- 提交订单 -->
  <div class="Submit" style="margin-top:20px;">
    <div class="Submit-one" style="margin-top: 30px;">
      <p>商品应付总计金额：</p><p>¥{{$list['alljg']}}</p>
    </div>
    
    <div class="Submit-one">
      <p style="margin-top: 6px;">总计金额：</p><b>¥{{$list['alljg']}}</b>
    </div>
    <div class="Submit-two">
      <a href='{{url("home/shopping")}}'><span>返回购物车修改</span></a>
      <button><a href="">去购买</a></button>
    </div>
  </div>

@endsection


<!--  内外部js -->
@section('htmljs')

@show

