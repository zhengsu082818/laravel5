@extends('layouts.homemaster')

@section('title', '网易海购-美容彩妆_基础护肤_洁面')

@section('css js')
    <script type="text/javascript" src="{{asset('static/js/index.js')}}"></script>
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
				@if($search == null)
					<a href="{{url('/')}}">首页 ></a>
					@foreach($aa as $v)
					<span>{{$data[$v->id]}} ></span>
					@endforeach
					<a href="" onclick="location.reload()">{{$data[$proList->id]}} </a>
				@endif

				@if($search != null)
					<a href="{{url('/')}}">首页 ></a>
					<span>搜索结果</span>
				@endif
			</div>
		</div>
		<div class="content2-box">

			<div class="content2-flbt">
				@if($search == null)
					@foreach($gt['gtype'] as $v)
					<div >
						<span>{{$v['gt_name']}}&nbsp;&nbsp;:</span>
						@foreach($v['goodtypeval'] as $v2)
						<a href='{{url("home/prolistshow/$v2[id]/$v2[sanji_id]")}}'>{{$v2['gtv_name']}}</a>
						@endforeach
					</div>
					@endforeach
				@endif
				
				@if($search != null)
					
				@endif

			</div>
			<div class="content2-xuanxiang">
				<div class="content2-list" style="background: red;">
					<ul>
						@foreach($goodList as $v)
						<li>
							<div style="width: 266px; height: 265px;overflow: hidden;">
								<a href='{{url("home/shopgoodindex/$v->id")}}'>
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
