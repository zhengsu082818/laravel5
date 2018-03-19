@extends('layouts.homemaster')

@section('title', '个人中心-账号管理')

@section('css js')!DOCTYPE html>

	<link rel="stylesheet" href="{{asset('static/css/My Account management.css')}}" type="text/css">
	<script type="text/javascript" src="{{asset('static/js/MyAccount management.js')}}"></script>

@endsection

	@section('content')
		
	@include('home.comment')
	
	<!-- 个人中心 账号管理-->
	<div class="Chinese">
		<div class="Chinese-tou">
			<div class="Chinese-one">
				<h2>个人中心</h2>
			</div>
			<div class="Chinese-two">
				<div style="margin-left: 20px;"><h2>账号管理</h2></div>
			</div>
			
		</div>
		<div class="Chinese-lie">
			<ul>
				<li>&nbsp;</li>
				<li><a href="My orders.html">我的订单</a></li>
				<li style="border-left: 2px solid red;"><a href="My Account management.html"  style="color:red">账号管理</a></li>
				<li><a href="My Receiving address.html">管理收货地址</a></li>
			</ul>
			<div class="myid">
					<p>我的账号</p>
					<div class="myid_box">
						<div class="myid_info">
							<p style="position:relative;top:-20px;"><span style="color:red">*</span>当前头像:</p><img class="via" src="../image/call.png" alt="" />
						</div>
						<div class="myid_info">
							<p><span style="color:red">*</span>用户名:</p><input type="text" />
						</div>
						<div class="myid_info">
							<p><span style="color:red">*</span>真实姓名:</p><input type="text" />
						</div>
						<div class="myid_info">
							<p><span style="color:red">*</span>性别:</p><label>男:<input style="width:26px;height:12px;margin-right:20px;" name="sex" type="radio" checked="checked"/></label><label>女:<input style="width:26px;height:12px;" name="sex" type="radio" /></label>
						</div>
						<div class="myid_info">
							<p>居住地:</p><input type="text" />
						</div>
						
						<div class="myid_info">
							<input type="submit" value="确认修改" style="background-color: #e31436;border:none;color:#fff;margin-left:30px;" />
						</div>
						
					</div>
			</div>
		</div>
	</div>
	
	
	@endsection
