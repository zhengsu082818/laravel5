@extends('layouts.homemaster')

@section('title', '网易海购-美容彩妆_基础护肤_洁面')

@section('css js')

	<link rel="stylesheet" href="{{asset('static/css/product_evaluate.css')}}" type="text/css">
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
				<a href=""><span>首页 ></span></a>
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
				<small>敏感肌的救星，舒缓必备，人手一只的雅漾大喷！有效改善皮肤发炎、红肿、过敏、湿疹，舒缓暴晒后发红的皮肤，不能错过的喷雾！</small>
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
		
		<!-- 商品评价 -->
		<div class="details">
			<div class="details-kuang">
				<div class="kuang-tou" id="tou">
					<div style="border-right:1px solid #ccc;">
						<a href=""><p class="selected">商品详情</p></a>
					</div>
					<div style="border-top:3px solid red;background-color: #fff;border-right: 1px solid #ccc">
						<a href="" style="color:red;">
							<p style="margin-left: 30px;">用户评价<span>41111</span></p>
						</a>
					</div>
				</div>
				<div class="kuang-bo">
					<span><a href="" style="color: red;"><b>全部 41125</b></a></span>
					<span><a href="">有图 4481</a></span>
					<span><a href="">有追评 775</a></span>
					<span class="bo-zuo"><a href="">查看所有评价</a></span>
				</div>
				<div class="kuang-pin">
					
				</div>
			</div>
		</div>
	</div>
	@endsection