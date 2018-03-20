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
	<link href="{{asset('static/css/Province_css/city.css')}}" rel="stylesheet" type="text/css" />
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
				<li><a href="{{url('home/home/number')}}">账号管理</a></li>
				<li style="border-left: 2px solid red;"><a href=""  style="color:red">管理收货地址</a></li>
			</ul>
			<div class="ybcshdz">
				<p>
					<b>已保存收货地址</b><span>(共 {{$count}} 条)</span>
					<a href="javascript:void(0);" onclick="naver('A')">+新增收货地址</a>
				</p>
				<table cellspacing="0px" cellspadding="0px" style="width:900px;border:1px solid #ccc;cursor: pointer;margin-top: 20px;	" >
				<thead>
					<tr style="line-height: 30px; ">
						<th style="width:100px;">收货人</th>
						<th>收货地址</th>
						<th>联系电话</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($personals as $v)
					<tr class="table_nav"  >
						<th>{{$v->name}}</th>
						<th>{{$v->shdz}}</th>
						<th>{{$v->phone}}</th>
						<th><a href='{{url("home/personal/destroy/$v->id")}}'> 删除</a></th>
				
					</tr>
					
					@endforeach 
					<style type="text/css">
						.table_nav{
							width:208px;
							height:40px;
							line-height:40px;
							/*border-bottom:1px solid #ccc;*/
						}
						.table_nav:hover{
							width:208px;
							height:40px;
							line-height:40px;
							background-color: #ccc;
							/*border-bottom:1px solid #ccc;*/
						}
						.table_nav tr th{
                             line-height:30px;
						}
					</style>
				</tbody>

			</table>

			</div>
         </div>
	<div style="clear: both;" id="A"></div>
			<div class="xzshdi">
				<b>新增收货地址</b>
				<div style="margin-top: 30px; margin-left: 96px;">
					<span>
						<b>*</b> 所在地区
						@include('flash::message')
					<form method="post" action='{{ url("home/personal/store")}}'>
						{{csrf_field()}}
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
									<b>*</b> 详细地址<input type="text" name="shdz" style="color:#333;text-indent: 6px;" placeholder="无需重复填写省市区,小于75个字">
								</span>
							    
							             @if (count($errors) > 0)
							               <span class="x-red" style="color: red;">{{ $errors->first('shdz') }}</span>
							              @endif             
							</div>
							
							<div>
								<span class="ziti">
									<b>*</b> 收货人姓名<input type="text" style="color:#333;text-indent: 6px;" name="name" placeholder="请使用真实姓名">
								</span>
								@if (count($errors) > 0)
							               <span class="x-red" style="color: red;">{{ $errors->first('name') }}</span>
							    @endif
							</div>
							<div style="margin-left: 94px;">
								<span class="ziti">
									<b>*</b> 手机号码<input type="text"  style="color:#333;text-indent: 6px;" name="phone" placeholder="请输入收货人手机号码">
								</span>
								@if (count($errors) > 0)
							               <span class="x-red" style="color: red;">{{ $errors->first('phone') }}</span>
							    @endif
							</div>

							<button>保存新地址</button>
						</div>
					</form>	
		
		<script>
//设置锚点
function naver(id){
  var obj = document.getElementById(id);
  var oPos = obj.offsetTop;
  return window.scrollTo(0, oPos-36);
}
</script>
	</div>
	
	@endsection

