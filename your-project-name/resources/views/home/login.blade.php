<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../home/css/login.css">
	<link rel="icon" href="../home/images/index_images/log_tb.jpg">
	<script src="{{asset('etsc/lib/layui/layui.js')}}" charset="utf-8"></script>
</head>
<body>
 <form action="{{url('authindex/index')}}" method="post">
 	{{ csrf_field() }}
	<div class="logo">
		<a href="index.html"><img class="one" src="../home/images/logres_images/login1.jpg"></a>
		<img class="two" src="../home/images/logres_images/login2.jpg">
	</div>
	<div class="content">
		<div>
			 @include('flash::message')
			<a href=""><img src="../home/images/logres_images/login3.jpg"></a>
			<div class="login">
				<div>
					<h3>账号登录</h3>
				</div>
				<div class="Login_yan">
					<div class="Login_yanzheng">
						<input type="" name="phone" placeholder="请输入账号" >
						 @if (count($errors) > 0)
				                    @foreach ($errors->get('phone') as $error)
				                        <li>{{ $error }}</li>
				                    @endforeach
				         @endif
						<input type="password" name="password" placeholder="请输入密码">
						 @if (count($errors) > 0)
				                    @foreach ($errors->get('password') as $error)
				                        <li>{{ $error }}</li>
				                    @endforeach
				        @endif
						<img style="margin:22px 0px 0px; height:36px;width:114px;float:right;" src="{{ url('/captcha') }}" onclick="this.src='{{ url('/captcha') }}?r='+Math.random();" alt="">
						<input style="width:145px;font-size:12px;float:left;" class="erge" type="" name="captcha" placeholder="请输入验证码">
						  @if (count($errors) > 0)
				                    @foreach ($errors->get('captcha') as $error)
				                        <li>{{ $error }}</li>
				                    @endforeach
				          @endif
						<button class="denglu" type="submit">登录</button>
						<p><a href="{{url('authindex/password')}}">忘记密码?</a>
							<a href="register.html">手机快捷注册</a>
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
				<img src="../home/images/logres_images/login6.jpg">
				<img src="../home/images/logres_images/login7.jpg">
				<img src="../home/images/logres_images/jinghui.png">
			</div>
		</div>
	</div>
 </form>
</body>
</html>