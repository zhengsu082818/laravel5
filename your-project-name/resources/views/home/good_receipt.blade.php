@extends('layouts.homemaster')

@section('title', '个人中心-管理收货地址')

@section('css js')
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="keywords" content="jQuery省市区三级联动" />
	<meta name="description" content="jQuery实现省、市、区三级联动的代码网上应该已经挺多了，今天群里一名成员投了篇关于省、市、区三级联动的实现代码，不同的一点是他将代码片段封装成了jQuery插件。" />

	<link rel="stylesheet" href="{{asset('static/css/My Receiving address.css')}}" type="text/css">
	<script type="text/javascript" src="{{asset('static/js/MyAccount management.js')}}"></script>
	<script type="text/javascript" src="{{asset('static/js/My Receiving address.js/jquery.min_1.js')}}"></script>
	<script type="text/javascript" src="{{asset('static/js/My Receiving address.js/city.min.js')}}"></script>

@endsection
	
	@section('content')
		
	@include('home.comment')
	
	<!-- 个人中心 -->
	<div class="Chinese">
		<div class="Chinese-tou">
			<div class="Chinese-one">
				<h2>个人中心</h2>
			</div>
			<div class="Chinese-two">
				<div style="margin-left: 20px;"><h2>我的地址</h2></div>
			</div>
		</div>
		<div class="Chinese-lie">
			<ul>
				<li>&nbsp;</li>
				<li><a href="My orders.html">我的订单</a></li>
				<li><a href="">账号管理</a></li>
				<li style="border-left: 2px solid red;"><a href="My Receiving address.html"  style="color:red">管理收货地址</a></li>
			</ul>
			<div class="ybcshdz">
				<p>
					<b>已保存收货地址</b><span>(共 1 条)</span>
					<a href="">+新增收货地址</a>
				</p>
			</div>
			<div class="cht">
				<p>收货人</p>
				<p>收货地址</p>
				<p style="margin-left: 250px;">联系电话</p>
				<p style="margin-left: 150px;">操作</p>
			</div>
			<div class="xx">
				<div>
					<p>收货人</p>
				</div>
				<div>
					<p>山西省 运城市 盐湖区 人民北路鑫鹏大厦 </p>
				</div>
				<div style="margin-left: 90px;">
					<p>137****9028</p>
					<p style="margin-left: 20px;">0359-</p>
				</div>				
				<div style="margin-left: 120px;">
					<p class="teshu"><a href="">修改</a>  |  <a href="">删除</a></p>
				</div>
				<div style="margin-left: 110px;">
					<p style="width: 80px; height: 16px; color:red;border:1px solid #e31436; border-radius: 10px 10px;"><span style="margin-left: 17px; font-size: 12px;">默认地址</span></p>
				</div>
			</div>
			<div class="xzshdi">
				<b>新增收货地址</b>
				<div style="margin-top: 30px; margin-left: 96px;">
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
						<b>*</b> 详细地址<input type="text" style="height: 70px;" placeholder="无需重复填写省市区,小于75个字">
					</span>
				</div>
				<div>
					<span class="ziti">
						<b>*</b> 收货人姓名<input type="text" placeholder="不能为昵称、X先生、X小姐等，请使用真实姓名">
					</span>
				</div>
				<div style="margin-left: 94px;">
					<span class="ziti">
						<b>*</b> 手机号码<input type="text" placeholder="手机号码、电话号码必须填一项">
					</span>
				</div>
				
				<div style="margin-left: 132px;">
					<span class="ziti">
						邮箱<input type="text" placeholder="接受订单提醒邮件，便于您及时了解订单状态">
					</span>
				</div>
				<a href=""><button>保存新地址</button></a>
			</div>
		</div>
	</div>
	
	@endsection

