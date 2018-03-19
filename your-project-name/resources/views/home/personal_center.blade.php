@extends('layouts.homemaster')

@section('title', '我的订单-个人中心-网易考拉海购')

@section('css js')

	 <link rel="stylesheet" href="{{asset('static/css/My orders.css')}}" type="text/css">

@endsection

 	@section('content')
		
	@include('home.comment')

	<!-- 个人中心 所有订单-->
	<div class="Chinese">
		<div class="Chinese-tou">
			<div class="Chinese-one">
				<h2>个人中心</h2>
			</div>
			<div class="Chinese-two">
				<div style="margin-left: 20px;"><h2><a href="My orders.html" style="color:red;">所有订单</a></h2></div>
				<div><h2><a href="My payment.html">待付款<span>0</span></a></h2></div>
				<div><h2><a href="My delivery.html">待发货<span>0</span></a></h2></div>
				<div><h2><a href="My receipt.html">待收货<span>0</span></a></h2></div>
				<div><h2><a href="My evaluate.html">待评价<span>0</span></a></h2></div>
				<div style="float:right;margin-right: 30px;margin-top: 6px;"><p><a href="My recycle.html"><img style="width: 20px;" src="../images/personal_images/delete.png">订单回收站</a></p></div>
			</div>
		</div>
		<div class="Chinese-lie">
			<ul>
				<li>&nbsp;</li>
				<li style="border-left: 2px solid red;"><a href="My orders.html" style="color:red">我的订单</a></li>
				<li><a href="My Account management.html">账号管理</a></li>
				<li><a href="My Receiving address.html">管理收货地址</a></li>
			</ul>
			<div class="Chinese-myorders">
				<div class="myorders-sousuo">
					<input type="" name="" placeholder="输入商品名称或订单号搜索">
					<a href="javascript:;" class="sou">搜索</a>
				</div>
				
				<div class="myorders-danhao">
					<span>杭州保税5号仓</span>
					<span> 订单号：2018030522020004612785191</span>
					<span> 下单时间：2018-03-05</span>
					<a href=""><img src="../images/personal_images/delete.png"></a>
				</div>
				<div class="myorders-nrone">
					<div class="one-tu">
						<img src="../images/personal_images/11.jpg">
					</div>
					<div class="one-zi">
						<a href="">Avène 雅漾 舒护活泉水喷雾 300毫升 大喷 人手一只</a>
					</div>
					<div class="one-jg">
						<p style="margin-top: 60px;"><del>185.00</del></p>
						<p style="margin-left: 34px;"><span>98.00</span></p>
					</div>
					<div class="one-one">
						<span>1</span>
					</div>
				</div>
				<div class="myorders-nrtwo">
					<div>
						<p style="margin-top: 60px;margin-left: 50px;">109.66</p>
						<p style="margin-left: 10px;color:#aaa;">(含运/税费:11.66)</p>
					</div>
				</div>
				<div class="myorders-nrtwo">
					<div>
						<p style="margin-top: 60px;"><a href="">订单关闭</a></p>
						<p><a href="">订单详情</a></p>
					</div>
				</div>
				<div class="myorders-nrtwo">
					<div>
						<p style="margin-top: 70px;"><a href="">再次购买</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	@endsection