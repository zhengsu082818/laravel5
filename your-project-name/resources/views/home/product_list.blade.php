@extends('layouts.homemaster')

@section('title', '网易海购-美容彩妆_基础护肤_洁面')

@section('css js')
    <script type="text/javascript" src="{{asset('static/js/product_list.js')}}"></script>
    <link rel="stylesheet" href="{{asset('static/css/product_list.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('etsc/css/bootstrap.min.css')}}">      
@endsection

 
    @section('content')
		
	@include('home.comment')

	<!-- 分类表头 -->
	<p class="fjx" style="margin:0;"></p>
	<!-- 内容区域 -->
	<div class="content-box">
		<div style="clear:both;"></div>
		<div class="content1-box" >
			<div>
				<a href="{{url('/')}}">首页 ></a>
				@foreach($aa as $v)
				<span>{{$data[$v->id]}} ></span>
				@endforeach
				<span>{{$data[$proList->id]}} </span>
			</div>
		</div>
		<div class="content2-box">
			<div class="content2-flbt">
				@foreach($gt['gtype'] as $v)
				<div>
					<span>{{$v['gt_name']}}&nbsp;&nbsp;:</span>
					@foreach($v['goodtypeval'] as $v2)
					<a href="">{{$v2['gtv_name']}}</a>
					@endforeach
				</div>
				@endforeach
			</div>
			<div class="content2-xuanxiang">
				<div class="content2-list" style="background: red;">
					<ul>
						@foreach($goodList as $v)
						<li>
							<div style="width: 266px; height: 265px;overflow: hidden;">
								<a href="{{url('home/shopgoodindex')}}">
									<img src="/storage/uploads/shopping/{{$v->img}}">
								</a>
							</div>
							<div class="list-one">
								<a href="">{{$v->title}}</a>
							</div>
							<div class="list-two">
								<span>¥<b>{{$v->price}}</b></span>
								<a href='{{url("home/shopgoodindex/$v->id")}}' style="text-decoration: none">查看详情</a>
							</div>
							<div class="list-three" >
								<span>网易考拉自营</span>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
				<div style="clear: both"></div>
				<div class="content2-fenye" style="text-align: center;">
					
            			{!! $goodList->render() !!}
            		
				</div>
			</div>
		</div>
	</div>
	@endsection
