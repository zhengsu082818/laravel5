$(function(){
	// 默认商品价格计算
	$(":input").attr("checked","checked");
   $("div.goods2_1").mousemove(function(){
	   	var indexA = $("div.goods2_1").index(this);
	   	var shoujia = $(".js_shoujia").eq(indexA).text();
	   	var num = $(".js_nums").eq(indexA).text();
	   	var max =  $("input:hidden").eq(indexA).val();


   		$(".js_zongjia").eq(indexA).text(shoujia*num);

   		//自增,自减
   		$(".goods2_62").eq(indexA).click(function(){
   			if(num<=1){
   				$(".js_nums").eq(indexA).text(1);
   			}else{
   				$(".js_nums").eq(indexA).text(num--);
   			}

   		});
   		$(".goods2_64").eq(indexA).click(function(){
   			if(num>=max){
   				$(".js_nums").eq(indexA).text(max);
   			}else{
   				$(".js_nums").eq(indexA).text(num++);

   			}

   		});
   })
	//默认选中input
	

	$("label").click(function(){
		if ($("input").attr("checked") == 'checked') {
	      //已选中的行取消选中
	      $("input").attr("checked", false);
	    } else {
	      //未选中的行，进行选中
	      $("input").attr("checked", true);
	    }
	})

	$("input:first").click(function(){
		if ($("input").attr("checked") != 'checked') {
	      //已选中的行取消选中
	      $("input").attr("checked", false);
	    } else {
	      //未选中的行，进行选中
	      $("input").attr("checked", true);
	    }
	})

	$("input:gt(0)").click(function(){
		var num=$("input:gt(0)[type='checkbox']:checked").length;

		var count=$("input").length-4;
		if(count>=num){
	       $("input:first").attr("checked", false);

		}else{
	       $("input:first").attr("checked", true);

		}
		
	   
		
	})


	
})