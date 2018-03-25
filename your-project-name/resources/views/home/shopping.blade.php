@extends('home.public')

@section('title', '购物车-网易考拉海购')

@section('css')
     <link rel="stylesheet" type="text/css" href="{{asset('home/css/shopping.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('home/css/shopcar.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('home/css/list.css')}}">
     <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


     <!-- 导入外部js -->
@section('js')
    <script type="text/javascript" src="{{asset('home/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/product1.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/list.js')}}"></script>
    
@endsection

@section('content')
    <!-- 顶部开始 -->
 <!-- logo -->
    
<!-- 购物车 -->
<div class="catbox">
    <table id="cartTable">
        <thead>
        <tr>
            <th><label>
                <input class="check-all check" type="checkbox">&nbsp;&nbsp;全选</label></th>
            <th>商品</th>
            <th>售价</th>
            <th>数量</th>
            <th>小计</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @if($info!=null)
         @for ($i = 0; $i < count($info); $i++)
        <tr class="on">
            <td class="checkbox"><input class="check-one check" type="checkbox"></td>
            <td class="goods"><img src="{{$id=$info[$i]->img}}" alt=""><span>{{$id=$info[$i]->product}}</span></td>
            <td class="price">{{$id=$info[$i]->price}}</td>
            <td class="count"><span class="reduce">-</span>
                <input class="count-input" type="text" value="{{$id=$info[$i]->num}}" readonly="readonly">
                <input type="hidden" class="max_input" value="200">
                <span class="add">+</span></td>
            <td class="subtotal" value="">{{$id=$info[$i]->aotal}}</td>
            <td class="operation"><span class="mydelete">
            <input class="idden_id" type="hidden" name="id" value="{{$id=$info[$i]->id}}">
            删除</span></td>
        </tr>
        @endfor
        @else
           <tr class="on">  
                <p><td colspan="6" style="height:200px;font-size:20px;font-weight:900;">购物车空空如也~快去购买吧!</td></p>
           </tr>
        @endif
        </tbody>
    </table>
    <div class="foot" id="foot">
        <label class="fl select-all"><input type="checkbox" class="check-all check">&nbsp;&nbsp;全选</label>
        <a class="fl delete" id="deleteAll" href="javascript:;">删除</a>
        <div class="fr closing">结 算</div>
        <input type="hidden" id="cartTotalPrice">
        <div class="fr total">合计：￥<span id="priceTotal">0.00</span></div>
        <div class="fr selected" id="selected">已选商品<span id="selectedTotal">0</span>件<span class="arrow up"></span><span class="arrow down"></span></div>
        <div class="selected-view" style="display:none;">
            <div id="selectedViewList" class="clearfix" style="display:none;"><div><img src=""><span class="del" index="0">取消选择</span></div><div><img src=""><span class="del" index="1">取消选择</span></div><div><img src=""><span class="del" index="2">取消选择</span></div><div><img src=""><span class="del" index="3">取消选择</span></div></div>
            <span class="arrow" style="display:none;">◆<span>◆</span></span> </div>
    </div>
</div>
<!-- 推荐 -->
<div class="content">
    <div class="con_food">
        <h3>为您推荐</h3>
        <ul>
            <li id="bc_food"><</li>
            <li id="bc_food_r" style="border:1px solid red;color:red;">></li>
        </ul>
        <div class="food_box">
            <ul id="js_box">
                @foreach($gengxin as $v)
                <li>
                    <a href='{{url("home/shopgoodindex/$v->id")}}'>
                    <img src="/storage/uploads/shopping/{{$v->img}}" alt="">
                    </a>
                    <div class="box_com_food">
                        <h5>{{$v->title}}</h5>
                        <h4>￥<span>{{$v->price}}</span></h4>        
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

    <!-- 底部结束 -->
@endsection


<!--  内外部js -->
@section('htmljs')

<script>


    var js_boxO=document.getElementById('js_box');
    var bc_foodO=document.getElementById('bc_food');
    var bc_food_rO=document.getElementById('bc_food_r');
    
    var num=0;
    function left(){
      
      js_boxO.style.left = -1240 + 'px';
    }
    function right(){
      
      js_boxO.style.left = 0 + 'px';
    }
    
    //每隔30ms向上滚动
    // 鼠标移入暂停
    // scrollDiv.onmouseover = function(){
    //  clearInterval(time);
    // }
    // //鼠标移出继续
    // scrollDiv.onmouseout = function(){
    //     time = setInterval(scroll,18);
    // }
    bc_foodO.onclick=function(){
        right();
        
        bc_foodO.style="none";
        bc_food_rO.style.border="1px solid red";
        bc_food_rO.style.color="red";
    }
    bc_food_rO.onclick=function(){
        left();
        bc_food_rO.style="none";
        bc_foodO.style.border="1px solid red";
        bc_foodO.style.color="red";
    }

    // getTotal();
    /**
     * Created by an www.jq22.com
     */
    window.onload = function () {
        if (!document.getElementsByClassName) {
            document.getElementsByClassName = function (cls) {
                var ret = [];
                var els = document.getElementsByTagName('*');
                for (var i = 0, len = els.length; i < len; i++) {

                    if (els[i].className.indexOf(cls + ' ') >=0 || els[i].className.indexOf(' ' + cls + ' ') >=0 || els[i].className.indexOf(' ' + cls) >=0) {
                        ret.push(els[i]);
                    }
                }
                return ret;
            }
        }

        var table = document.getElementById('cartTable'); // 购物车表格
        var selectInputs = document.getElementsByClassName('check'); // 所有勾选框
        var checkAllInputs = document.getElementsByClassName('check-all') // 全选框
        var tr = table.children[1].rows; //行
        var selectedTotal = document.getElementById('selectedTotal'); //已选商品数目容器
        var priceTotal = document.getElementById('priceTotal'); //总计
        var deleteAll = document.getElementById('deleteAll'); // 删除全部按钮
        var selectedViewList = document.getElementById('selectedViewList'); //浮层已选商品列表容器
        var selected = document.getElementById('selected'); //已选商品
        var foot = document.getElementById('foot');

        // 更新总数和总价格，已选浮层
        function getTotal() {
            var seleted = 0;
            var price = 0;
            var HTMLstr = '';
            for (var i = 0, len = tr.length; i < len; i++) {
                if (tr[i].getElementsByTagName('input')[0].checked) {
                    tr[i].className = 'on';
                    seleted += parseInt(tr[i].getElementsByTagName('input')[1].value);
                    price += parseFloat(tr[i].cells[4].innerHTML);
                    HTMLstr += '<div><img src="' + tr[i].getElementsByTagName('img')[0].src + '"><span class="del" index="' + i + '">取消选择</span></div>'
                }
                else {
                    tr[i].className = '';
                }
            }
            selectedTotal.innerHTML = seleted;
            priceTotal.innerHTML = price.toFixed(2);
            selectedViewList.innerHTML = HTMLstr;

            if (seleted == 0) {
                foot.className = 'foot';
            }
        }
        // 计算单行价格
        function getSubtotal(tr) {
            var cells = tr.cells;
            var price = cells[2]; //单价
            var subtotal = cells[4]; //小计td
            var countInput = tr.getElementsByTagName('input')[1]; //数目input
            var span = tr.getElementsByTagName('span')[1]; //-号
            //写入HTML
            subtotal.innerHTML = (parseInt(countInput.value) * parseFloat(price.innerHTML)).toFixed(2);
            //如果数目只有一个，把-号去掉
            if (countInput.value == 1) {
                span.innerHTML = '';
            }else{
                span.innerHTML = '-';
            }
        }

        // 点击选择框
        for(var i = 0; i < selectInputs.length; i++ ){
            selectInputs[i].onclick = function () {
                if (this.className.indexOf('check-all') >= 0) { //如果是全选，则吧所有的选择框选中
                    for (var j = 0; j < selectInputs.length; j++) {
                        selectInputs[j].checked = this.checked;
                    }
                }
                if (!this.checked) { //只要有一个未勾选，则取消全选框的选中状态
                    for (var i = 0; i < checkAllInputs.length; i++) {
                        checkAllInputs[i].checked = false;
                    }
                }
                getTotal();//选完更新总计
            }
        }

        // 显示已选商品弹层
        selected.onclick = function () {
            if (selectedTotal.innerHTML != 0) {
                foot.className = (foot.className == 'foot' ? 'foot show' : 'foot');
            }
        }

        //已选商品弹层中的取消选择按钮
        selectedViewList.onclick = function (e) {
            var e = e || window.event;
            var el = e.srcElement;
            if (el.className=='del') {
                var input =  tr[el.getAttribute('index')].getElementsByTagName('input')[0]
                input.checked = false;
                input.onclick();
            }
        }

        //为每行元素添加事件
        for (var i = 0; i < tr.length; i++) {
            //将点击事件绑定到tr元素
            tr[i].onclick = function (e) {
                var e = e || window.event;
                var el = e.target || e.srcElement; //通过事件对象的target属性获取触发元素
                var cls = el.className; //触发元素的class
                var countInout = this.getElementsByTagName('input')[1]; // 数目input
                var value = parseInt(countInout.value); //数目
                //通过判断触发元素的class确定用户点击了哪个元素
                switch (cls) {
                    case 'add': //点击了加号
                        if(value > this.getElementsByClassName('max_input')[0].value-1){
                            alert('超出最大库存');
                        }else{
                             countInout.value = value + 1;
                            var id=this.getElementsByClassName('mydelete')[0].getElementsByClassName('idden_id')[0].value;
                            var num=this.getElementsByClassName('count-input')[0].value;
                            var price=this.getElementsByClassName('price')[0].innerHTML;
                            // alert(price)
                            $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                            $.ajax({
                               type: "PUT",
                               url: "/home/shopping/"+id,
                               data: {
                                'num':num,
                                'price':price
                               },
                               dataType: "json",
                               success: function(msg){
                                   setTimeout(function(){
                                        alert('修改成功');
                                    },"200");
                               }
                            })
                            getSubtotal(this);
                        }
                       
                        break;
                    case 'reduce': //点击了减号
                        if (value > 1) {
                            countInout.value = value - 1;
                            var id=this.getElementsByClassName('mydelete')[0].getElementsByClassName('idden_id')[0].value;
                            var num=this.getElementsByClassName('count-input')[0].value;
                            var price=this.getElementsByClassName('price')[0].innerHTML;
                            // alert(price)
                            $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                            $.ajax({
                               type: "PUT",
                               url: "/home/shopping/"+id,
                               data: {
                                'num':num,
                                'price':price
                               },
                               dataType: "json",
                               success: function(msg){
                                   setTimeout(function(){
                                        alert('修改成功');
                                    },"200");
                               }
                            })

                            getSubtotal(this);
                        }else{
                            alert("购买数量不能是负数!");
                        }
                        break;
                    case 'mydelete': //点击了删除
                            var conf = confirm('确定删除此商品吗？');
                            // alert(this)
                                if (conf) {
                                    this.parentNode.removeChild(this);                                  
                                    var id=this.getElementsByClassName('mydelete')[0].getElementsByClassName('idden_id')[0].value;
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $.ajax({
                                       type: "DELETE",
                                       url: "/home/shopping/"+id,
                                       success: function(msg){
                                           setTimeout(function(){
                                                alert('删除成功');
                                            },"500");
                                       }
                                    })
                                    
                                }
                        break;
                }
                getTotal();
            }
            // 给数目输入框绑定keyup事件
            tr[i].getElementsByTagName('input')[1].onkeyup = function () {
                var val = parseInt(this.value);
                if (isNaN(val) || val <= 0) {
                    val = 1;
                }
                if (this.value != val) {
                    this.value = val;
                }
                getSubtotal(this.parentNode.parentNode); //更新小计
                getTotal(); //更新总数
            }
        }
        // 点击全部删除
        deleteAll.onclick = function () {
            
            if (selectedTotal.innerHTML != 0) {
                var con = confirm('确定删除所选商品吗？'); //弹出确认框
                if (con) {
                    setTimeout(function(){
                        alert('多条删除成功');
                    },"2000");
                    for (var i = 0; i < tr.length; i++) {
                        // 如果被选中，就删除相应的行                        
                        if (tr[i].getElementsByTagName('input')[0].checked) {
                           

                        var ids=new Array(tr[i].getElementsByTagName("td")[5].getElementsByTagName("input")[0].value);
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                            });
                            $.ajax({
                               type: "DELETE",
                               url: "/home/shopping/"+ids,
                               success: function(msg){
                                      
                                    }
                            });      
                             tr[i].parentNode.removeChild(tr[i]); // 删除相应节点                       
                            i--; //回退下标位置             
                        }
                    }

                }
            } else {
                alert('请选择商品！');
            }
            getTotal(); //更新总数
            
            

        }

        //结算功能
        document.getElementsByClassName('closing')[0].onclick = function(){
           if(selectedTotal.innerHTML != 0){
            var alljg=priceTotal.innerHTML;
            var ids='';
                for (var i = 0; i < tr.length; i++) {
                        // 如果被选中，就发送相应的行的id                        
                        if (tr[i].getElementsByTagName('input')[0].checked) {
                        ids+=tr[i].getElementsByTagName("td")[5].getElementsByTagName("input")[0].value+'.';
                           
                            
                                     
                         }
                         // alert(ids);
                }
                window.location.href="/home/shopping/"+ids+"?alljg="+alljg;//需要跳转的地址
                
                    
                
           }else{
                alert('请选择商品！');
           }
        }
        // console.log("\u767e\u5ea6\u641c\u7d22\u3010\u7d20\u6750\u5bb6\u56ed\u3011\u4e0b\u8f7d\u66f4\u591aJS\u7279\u6548\u4ee3\u7801");
        // 默认全选
        checkAllInputs[0].checked = true;
        checkAllInputs[0].onclick();







    
                // alert($(".delete"))
                // $(".delete").click(function(){
                    
                //     // setTimeout(
                //     // alert('删除成功');,"1000");
                // })
        
    }
</script>

@show

