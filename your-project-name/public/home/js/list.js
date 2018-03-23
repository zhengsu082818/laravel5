// alert();
window.onload = function(){
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
   	// 	clearInterval(time);
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
}
