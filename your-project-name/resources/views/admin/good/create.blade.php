@extends('layouts.master')

@section('title', '考拉海购--后台主站')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('etsc/css/bootstrap.min.css')}}">
@endsection

@section('content')
    <div class="x-body">
      <div class="x-nav">
      <span class="layui-breadcrumb">
        <a>
          <cite>商品管理</cite>
        </a>
        <a>
          <cite>商品列表管理</cite>
        </a>
        <a>
          <cite>添加商品</cite>
        </a>
      </span>
      
      <a class="layui-btn" style="line-height:38px;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
       <i class="layui-icon" style="line-height:38px">ဂ</i></a>
        <a  class="layui-btn" href="{{url('admin/goodindex')}}" style="line-height:38px;margin-top:3px;margin-right: 10px;float:right">返回上一层</a>
    </div>
    <div style="height: 40px;">
    </div>
        @include('flash::message')
        <form class="layui-form" method="post" action="{{url('admin/goodstore')}}" enctype="multipart/form-data">
          {{csrf_field()}}
          
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>选择类别
              </label>
              <div class="layui-input-inline" style="height: 50px">
                  <select name='djid' lay-filter="good" >
                     @foreach ($data as $k => $v) 
                    <option value="{{$v['id']}}" style="line-height: 10px">{{$v['name']}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="layui-input-inline">
                  <select name='cjid' lay-filter="good1" id="erlei" >
                     <option value="0">请选择二级类名</option>
                    <option  value="{{$v['id']}}"></option>
                  </select>
              </div>
              <div class="layui-input-inline">
                  <select name='sj_id' lay-filter="good2" id="sanlei">
                    <option value="0">请选择三级类名</option>
                    <option value="{{$v['id']}}"></option>
                  </select>
              </div>
              <div class="layui-input-inline">
                  <select name='gt_id' lay-filter="good3" id="ming1" >
                    <option value="0">请选择属性名</option>
                    <option  value="{{$v['id']}}"></option>
                  </select>
              </div>
              <div class="layui-input-inline">
                  <select name='gtv_id' id="ming2" >
                    <option value="0">请选择属性值</option>
                    <option></option>
                  </select>
              </div>
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>商品名
              </label>
               <div class="layui-input-inline">
                  <input type="text" name="title"  class="layui-input" value="{{old('title')}}">
              </div>
               <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('title') }}</span>  
                    @endif
              </div>  
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>图片
              </label>
              <div class="layui-form-mid layui-word-aux">
                <button type="button" class="layui-btn" id="tubiao">
                  <i class="layui-icon">&#xe67c;</i>上传图片
                  <input type="hidden" name="img" value="" id="img">
                </button>
              </div>
          </div>
           <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>价格
              </label>
               <div class="layui-input-inline">
                  <input type="text" name="price"  class="layui-input" value="{{old('price')}}">
              </div>
               <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('price') }}</span>  
                  @endif
              </div>  
          </div>
           <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>库存数量
              </label>
               <div class="layui-input-inline">
                  <input type="text" name="nums"  class="layui-input" value="{{old('nums')}}">
              </div>
               <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('nums') }}</span>  
                  @endif
              </div>  
          </div>

          <div style="width: 100px;height: 100px;"></div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label" style="width: 100px;">
                  <span class="x-red">*</span>商品详情
              </label>
              <div class="col-sm-10"> 
                @include('vendor.UEditor.head')  
                <!-- 加载编辑器的容器 -->  
                <script id="container" name="content" type="text/plain" style='width:600px;height:200px;margin-left: -15px;'>  
                   
                </script>  
                <div class="layui-form-mid layui-word-aux">
                  <span class="x-red"></span>
                  @if (count($errors) > 0)
                    <span class="x-red">{{ $errors->first('content') }}</span>  
                  @endif
                </div>  
                <!-- 实例化编辑器 -->  
                <script type="text/javascript">  
                    var ue = UE.getEditor('container');  
                    ue.ready(function(){  
                        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');   
                    });  
                </script>  
              </div>  
          </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label" style="width: 100px;">
              </label>
              <button  class="layui-btn">
                  添加
              </button>
          </div>
        </form>
    </div>
@endsection

@section('js')
      <script>
      
      layui.use(['upload','form'], function(){
        var upload = layui.upload;
         var $ = layui.$ ;
         $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
      //执行图片上传
      var name=[];
        upload.render({
          elem: '#tubiao'
          ,url: '{{ url("admin/gooduplode")}}'
          ,field:'file'//设置字段名 控制器接受
          ,multiple: true
          ,allDone: function(obj){ //当文件全部被提交后，才触发
            console.log(obj.total); //得到总文件数
            console.log(obj.successful); //请求成功的文件数
            console.log(obj.aborted); //请求失败的文件数
          }
          ,done: function(res, index, upload){ //每个文件提交一次触发一次。详见“请求成功的回调”
            $name = res.data.src;
            document.getElementById('img').value+=$name+',';
             
          }

        });

        //执行五级联动的ajax
        var form = layui.form;
        form.on('select(good)', function(data){
          $.ajax({
            type:"GET",
            url:'{{ url("admin/goodwjld") }}?id='+data.value,
            success:function(msg){
              var erlei = $("#erlei");
              erlei.find("option").remove();
              for(var i = 0; i<msg.data.length; i++){ 
                erlei.append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
              }
             form.render('select'); 
            },
            error:function(data){

            }
          })
        });

        var form = layui.form;
        form.on('select(good1)', function(data){
          $.ajax({
            type:"GET",
            url:'{{ url("admin/goodwjld2") }}?id='+data.value,
            success:function(msg){
              var sanlei = $("#sanlei");
              sanlei.find("option").remove();

              for(var i = 0; i<msg.data.length; i++){ 
                sanlei.append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
              }
             form.render('select'); 
            },
            error:function(data){

            }
          })
        });

        var form = layui.form;
        form.on('select(good2)', function(data){
          $.ajax({
            type:"GET",
            url:'{{ url("admin/goodwjld3") }}?id='+data.value,
            success:function(msg){
              var ming1 = $("#ming1");
              ming1.find("option").remove();

              for(var i = 0; i<msg.data.length; i++){ 
                ming1.append("<option value='"+msg.data[i].id+"'>"+msg.data[i].gt_name+"</option>");
              }
             form.render('select'); 
            },
            error:function(data){

            }
          })
        });

        var form = layui.form;
        form.on('select(good3)', function(data){
          $.ajax({
            type:"GET",
            url:'{{ url("admin/goodwjld4") }}?id='+data.value,
            success:function(msg){
              var ming2 = $("#ming2");
              ming2.find("option").remove();

              for(var i = 0; i<msg.data.length; i++){ 
                ming2.append("<option value='"+msg.data[i].id+"'>"+msg.data[i].gtv_name+"</option>");
              }
             form.render('select'); 
            },
            error:function(data){

            }
          })
        });


        
      });
      </script>
@endsection 
