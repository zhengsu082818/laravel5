@extends('layouts.homemaster')

@section('title', '个人中心-账号管理')
	
@section('css js')
	
	<link rel="stylesheet" href="{{asset('static/css/My Account management.css')}}" type="text/css">

	<script type="text/javascript" src="{{asset('static/js/MyAccount management.js')}}"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="{{asset('home/lib/layui/layui.js')}}" charset="utf-8"></script>
	<style type="text/css">
		.layui-upload-file{
			display:none;
		}
	</style>
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
				<li style="border-left: 2px solid red;"><a href="{{url('home/home/number')}}"  style="color:red">账号管理</a></li>
				<li><a href="{{url('home/personal')}}">管理收货地址</a></li>
			</ul>
			<div class="myid">
					<p>我的账号</p>
					<div class="myid_box">
						<form class="layui-form" action='{{ url("home/home/store/$personals->id")}}' method="post" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="myid_info">
								<p style="position:relative;top:-20px;"><span style="color:red">*</span>当前头像:</p><img class="via" src="/storage/uploads/banner/{{$personals->img}}" alt="" />
								<button type="button" class="layui-btn" id="test1">
			                    修改头像
			                  	</button>
								<input type="hidden"  name="img"  class="layui-input" value="" id="imgur">
							</div>
							<div class="myid_info">
								<p><span style="color:red">*</span>用户名:</p><input type="text" value="{{$personals->username}}" name="username"
									@if($personals->username)
									disabled="disabled"
									@endif
								> <span style="font-size:12px;">* 此项只可修改一次</span>
							</div>
							<div class="myid_info">
								<p><span style="color:red">*</span>真实姓名:</p><input type="text" value="{{$personals->name}}" name="name">
							</div>
							<div class="myid_info">
								<p><span style="color:red">*</span>性别:</p>
								<label>男:<input style="width:26px;height:12px;margin-right:20px;" name="sex" type="radio" value="m"
									@if ($personals->sex ==='m')
										checked
									@endif
									>
								</label>
								<label>女:<input style="width:26px;height:12px;" name="sex" type="radio" value="w"
									@if ($personals->sex == 'w')
										checked
									@endif
									>
								</label>
							</div>
							<div class="myid_info">
								<p>居住地:</p><input type="text" name="address" value="{{$personals->address}}">
							</div>
							
							<div class="myid_info">
								<input type="submit" value="完善个人信息" style="background-color: #e31436;border:none;color:#fff;margin-left:30px;" />
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>

	<script>
      layui.use('upload', function(){
        var upload = layui.upload;
         var $ = layui.$ ;
         $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        //执行实例
        var uploadInst = upload.render({
          elem: '#test1' //绑定id
          ,url: '{{ url("admin/banneruplode")}}'//上传接口到那个控制器
          ,field:'file'//设置字段名 控制器接受
          ,done: function(res){
           $name = res.data.src;
           // alert($name);  
           $('#imgur').val($name);
          }
          ,error: function(){
            
          }
        });
      });
      </script>
	@endsection
	
      
