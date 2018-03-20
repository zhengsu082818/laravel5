window.onload = function(){
 // 选项卡
	var thing = document.getElementsByClassName('thing');
	var h41 = thing[0].getElementsByTagName('h4');
	var a = h41[0].getElementsByTagName('a');
	var ul1 = thing[0].getElementsByTagName('ul');
	var li1 = ul1[0].getElementsByTagName('li');
	// alert(li1.length);
	for(var i=0;i<a.length;i++){
		a[i].onclick = function(){
			for(var j=0;j<a.length;j++){
				if(a[j] === this){
					ul1[j].className = 'thing1 hidden';
				}else{
					ul1[j].className = 'thing1 ';
				}
			}
		}
	}

 // 滚动事件
    var back = document.getElementsByClassName('back')[0];
    window.onscroll = function(){
    		var scrollT =document.documentElement.scrollTop 
    		|| window.pageYOffset || document.body.scrollTop;
    		if(scrollT  > 200){
               back.className = 'back';
       		}else{
       			 back.className = 'back hidden';
       		}
    }


    //购物车
    // var goods2_1O = document.getElementsByClassName('goods2_1');
    

    // for (var i = 0; i < goods2_1O.length; i++) {

    // 	// var goods2_62O = goods2_1O[i].getElementsByClassName('goods2_62')[0];
    // 	// 显示数量
    // 	var js_nums = document.getElementsByClassName('js_nums');
    // 	// 自减
    // 	var goods2_62O = document.getElementsByClassName('goods2_62');
    // 	//自增
    // 	var goods2_64O = document.getElementsByClassName('goods2_64');
    	
    // 	//鼠标移入
    // 	goods2_1O[i].onmousemove=function(){
    // 		var num=1;
    // 			for (var x = 0; x < goods2_1O.length; x++) {
    // 				if(goods2_1O[x]==this){
    // 					goods2_62O[x].onclick=function(){
    // 						for (var n = 0; n < goods2_1O.length; n++) {
    // 							if(goods2_62O[n]==this){
    // 								var max=document.getElementsByClassName('kc')[n].value;
    // 								if(num<=1){
    // 									num=1;
    // 								}else{
    // 									num--;
    // 								}
    // 								js_nums[n].innerHTML=num;
    // 							}
    // 						}
    // 					}

    // 					goods2_64O[x].onclick=function(){

    // 						for (var n = 0; n < goods2_1O.length; n++) {
    // 							if(goods2_64O[n]==this){
    // 								var max=document.getElementsByClassName('kc')[n].value;
    // 								// alert(max);
    // 								if(num>=max){
    // 									num=max;
    // 								}else{
    // 									num++;
    // 								}
    // 								js_nums[n].innerHTML=num;
    // 							}
    // 						}
    // 					}


    // 				}
    // 			}
    // 	}
    	
    // }
}
