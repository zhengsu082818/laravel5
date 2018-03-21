@extends('layouts.homemaster')

@section('title', '网易海购-美容彩妆_基础护肤_洁面')

@section('css js')

	<link rel="stylesheet" href="{{asset('static/css/product_details.css')}}" type="text/css">
	<script type="text/javascript" src="{{asset('static/js/product_list.js')}}"></script>
@endsection
	
	@section('content')
		
	@include('home.comment')

	<!-- 分类表头 -->
	<p class="fjx"></p>

	<!-- 内容区域 -->
	<div class="content-box">
		<div class="content1-box">
			<div>
				<a href="{{url('authindex/redirect')}}"><span>首页 ></span></a>
				<a href=""><span>美容彩妆 ></span></a>
				<a href=""><span>护肤 > </span></a>
				<a href=""><span style="font-size: 14px;" > Avène 雅漾 舒护活泉水喷雾 300毫升 大喷 人手一只</span></a>
			</div>
		</div>
		<div class="content2-box">
			<div class="tu">
				<div class="datu">
					<img src="../images/product_details/details1.jpg">
				</div>
				<div class="xiaotu">
					<a href=""><img src="../images/product_details/details1.jpg" style="margin-left: 90px;"></a>
					<a href=""><img src="../images/product_details/details2.jpg"></a>
					<a href=""><img src="../images/product_details/details3.jpg"></a>
				</div>
			</div>
			<div class="neirong">
				<h3>Avène 雅漾 舒护活泉水喷雾 300毫升 大喷 人手一只</h3>
			
				<p style="margin-top: 30px;">
					售价:<b>¥85.00</b><del>¥185.00</del>
				</p>
				<p>
					税费:<span>预估￥10.12，实际税费请以提交订单时为准 </span>
				</p>
				<p>
					运费:<span>免运费</span>
				</p>
				<p>
					服务:<span>本商品由 自营保税仓 发货</span>
				</p>
				<p>
					数量: <button style="margin-left:24px;">-</button>
					<input type="text" value="1">
					<button>+</button>
					<span style="margin-left:0;">库存充足</span>
				</p>
				<p>
					说明:<span style="font-size: 12px; color: #aaa;">支持7天无忧退货</span>
				</p>
				<p class="anniu">
					<a href=""><button class="anniu-one"><b>立即购买</b></button></a>
					<a href=""><button class="anniu-two"><b>加入购物车</b></button></a>
				</p>
			
				<!-- <hr size="1" noshade="noshade" style="border:1px #fff dotted;margin-top: 10px;"/> -->
			</div>
		</div>
		
		<!-- 商品详情 -->
		<div class="details">
			<div class="details-kuang">
				<div class="kuang-tou" id="tou">
					<div style="border-top:3px solid red;background-color: #fff;">
						<a href="" style="color:red;"><p class="selected">商品详情</p></a>
					</div>
					<div style="border-left:1px solid #ccc;">
						<a href="">
							<p style="margin-left: 30px;">用户评价<span>41111</span></p>
						</a>
					</div>
					
				</div>
				<div class="kuang-bo">
					<div class="bo-one">
						<p>商品品牌：Avène 雅漾</p>
						<p>产地：法国</p>
						<p>保质期：3年</p>
						<p>适合肤质 ：任何肤质</p>
					</div>
					<div class="bo-two">
						<p>品牌国：法国</p>
						<p>质地：雾状</p>
						<p>功能：修复　舒缓护肤</p>
					</div>
					<div class="bo-three">
						<p>品名：Avène 雅漾 舒护活泉水喷雾 300毫升 大喷</p>
						<p>适用部位：面部</p>
						<p>产品类型：喷雾</p>
					</div>
				</div>
				<div class="kuang-jyps">
					<h4>假一赔十</h4>
					<p>网易考拉海购每一件商品都通过严苛的品质把关，保障正品，保障品质。特推出 “假一赔十”的正品保障政策，杜绝一切假货， <br>让您无忧购物。</p>
				</div>
				<div>
					<img src="../images/product_details/details9.jpg">
					<img src="../images/product_details/details10.jpg">
				</div>
			</div>
					<!-- 最近在看 -->
		</div>
	
	@endsection