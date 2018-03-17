@extends('layouts.homemaster')

@section('title', '网易考拉海购-订单详情')

@section('css js')

	<link rel="stylesheet" href="{{asset('static/css/Order details.css')}}" type="text/css">
	
@endsection
	
	@section('content')
	
	<!-- 标头 -->
	<div class="header">
		<div class="header-cont">
			<div class="hc-box1">
				<span>您好,137****9028</span>
				<b>丨</b>
				<a href="login.html">退出</a>
			</div>
			<div class="hc-box2">
				<img src="../images/index_images/phone2.png" class="shouji">
				<a href="">手机考拉海购</a>
				<div class="app">
					<img src="../images/index_images/erweima.jpg">
				</div>
			</div>
			<ul>
				<li class="default">
					<a href="My orders.html">我的订单</a>
				</li>
				<span>丨</span>
				<li class="second">
					<a href="My orders.html">个人中心</a>
					<img src="../images/index_images/sanjiao.png">
					<div class="per_cen">
						<a href="My Account management.html">完善个人信息</a>
						<a href="My Receiving address.html">管理收货地址</a>
					</div>
				</li>
				<span>丨</span>
				<li class="third">
					<a href="">客户服务</a>
					<img src="../images/index_images/sanjiao.png">
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
					<img src="../images/index_images/sanjiao.png">
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
	<!-- login-->
	<div class="log-box">
		<div class="login">
			<a href="index.html">
				<img src="../images/logres_images/login.jpg">
			</a>
		</div>
	</div>
	<!-- 选择收货地址 -->
	<div class="address">
		<div class="address-one">
			<p>当前位置： <span>网易考拉海购</span>> <span>个人中心</span>> <span>我的订单</span>> 订单详情</p>
		</div>
		<div class="address-two">
			<p>订单信息</p>
		</div>
		<div class="address-three">
			<p>收货地址：
				<span>常驻地</span>   
				<span>132****8243</span>   
				<span>山西省运城市盐湖区山西省运城市</span>
			</p>
			<p>订单编号：<span>2018031309040000712624683</span></p>
			<p>支付金额：<span style="color:red">¥109.66</span></p>
			<p>下单时间：<span>2018-03-13 09:04:58</span></p>
		</div>
	</div>
	<!-- 确定商品信息 -->
	<div class="information">
		<div class="information-two">
			<span style="width: 400px; margin-left: 30px;">商品信息</span>
			<span style="width: 200px;">单价(元)</span>
			<span style="width: 200px;">数量</span>
			<span style="width: 200px;">金额(元)</span>
		</div>
		
		
		<div class="information-five" >
			<div style="width: 400px; margin-left: 30px;">
				<img src="../images/product_details/details2.jpg">
				<p style="margin-top: 24px;">Avène 雅漾 舒护活泉水喷雾 300毫升 大喷 人手一只</p>
				<p> 支持7天无忧退货</p>
			</div>
			
			<div style="width: 200px;margin-top: 24px;">
				<p>98.00</p>
			</div>
			<div style="width: 200px;margin-top: 24px;">
				<p>1</p>
			</div>
			<div style="width: 200px;margin-top: 24px;">
				<p><b>98.00</b></p>
			</div>
		</div>
	</div>
	<!-- 提交订单 -->
	<div class="Submit">
		<div class="Submit-one" style="margin-top: 30px;">
			<p>商品应付总计金额：</p><p>¥98.00</p>
		</div>
		
		<div class="Submit-one">
			<p style="margin-top: 6px;">总计金额：</p><b>¥98.00</b>
		</div>
	</div>
	@endsection