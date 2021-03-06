<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>网易考拉海购--登录</title>
	<link rel="icon" href="{{asset('static/images/index_images/log_tb.jpg')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('home/css/register.css')}}">
	<script src="{{asset('etsc/lib/layui/layui.js')}}" charset="utf-8"></script>
</head>
<body>
 	@include('flash::message')
	<div class="logo">

		<a href="{{url('/')}}"><img class="one" src="../home/images/logres_images/login1.jpg"></a>
		<img class="two" src="../home/images/logres_images/login2.jpg">
	</div>
	<div class="content">
		<div>
			<a href="index.html"><img src="../home/images/logres_images/login3.jpg"></a>
			<div class="login" style="height:380px;">
				<div>
					<h3>欢迎登录
						<span>没有账号?</span>
						<a href="{{url('authindex/register')}}">去注册></a>
					</h3>
				</div>
				<form action="{{url('authindex/index')}}" method="post">
					{{ csrf_field() }}
				<div class="Login_yan" style="height:320px;border:none;">
					<div class="Login_yanzheng" style="border:none;">
						<input type="" name="phone" placeholder="请输入手机号" >
						@if (count($errors) > 0)
				                    @foreach ($errors->get('phone') as $error)
				                        <li style="color:red;font-size: 12px;list-style: none;margin:3px;">{{ $error }}</li>
				                    @endforeach
				        @endif
				        <input type="password" name="password" placeholder="请输入密码">
				        @if (count($errors) > 0)
				                    @foreach ($errors->get('password') as $error)
				                       <li style="color:red;font-size: 12px;list-style: none;margin:3px;">{{ $error }}</li>
				                    @endforeach
				        @endif
						<input class="erge" style="width:130px;font-size:12px;float:left" type="" name="captcha" placeholder="请输入短信验证码">
						<img style="margin:22px 0px 0px; height:36px;width:114px;" src="{{ url('/captcha') }}" onclick="this.src='{{ url('/captcha') }}?r='+Math.random();" alt="">
						 @if (count($errors) > 0)
				                    @foreach ($errors->get('captcha') as $error)
				                       <li style="color:red;font-size: 12px;list-style: none;margin:3px;">{{ $error }}</li>
				                    @endforeach
				        @endif
						<button class="denglu" style="margin-bottom:3px;">登录</button>
						</form>
						<p><a href="{{url('authindex/password')}}">忘记密码?</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 底 -->
	<div class="foot-two-box">
		<div class="foot-two-cont">
			<p>
				<a href="">About NetEase -</a>
				<a href="">公司简介 -</a>
				<a href="">联系方法 -</a>
				<a href="">友情链接 -</a>
				<a href="">招聘信息 -</a>			
				<a href="">客户服务 -</a>
				<a href="">隐私政策 -</a>			
				<a href="">网络营销 -</a>			
				<a href="">网站新闻</a>
			</p>
			<p>
				<span>
					网络文化经营许可证：浙网文[2016]0155-055号
				</span>
				<span> 
					增值电信业务经营许可证：浙B2-20160288 
				</span>
				<span>自营经营者信息</span>
			</p>
			<p>
				<a href="">
					浙公网安备 33010802002216号
				</a>
				<span> 
					网易公司版权所有©1997-2018 
				</span>
				<a href="">互联网药品信息服务资格证书编号（浙）-2017-0027</a>
			</p>
			<div>
				<img src="{{asset('/home/images/logres_images/login6.jpg')}}">
				<img src="{{asset('/home/images/logres_images/login7.jpg')}}">
				<img src="{{asset('/home/images/logres_images/jinghui.png')}}">
			</div>
		</div>
	</div>
 
</body>
</html>