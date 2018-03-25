window.onload=function(){
  var numberO=document.getElementById('number').value=1;
  var numsO=Number(document.getElementsByClassName('nums')[0].innerHTML);
  var plusO=document.getElementsByClassName('plus')[0];
  var reduceO=document.getElementsByClassName('reduce')[0];
  // alert(numsO)
  var shu=numsO;
  plusO.onclick=function(){
  	if(numberO<numsO){
  		numberO++;
  		document.getElementById('number').value=numberO;
  	}
  	if(numsO>0){
  		shu=numsO-numberO;
  		document.getElementsByClassName('nums')[0].innerHTML=shu;
  	}
  }

   reduceO.onclick=function(){
  	if(numberO>1){
  		numberO--;
  		document.getElementById('number').value=numberO;
  	}
  	if(numsO>0){
  		shu=numsO-numberO;
  		document.getElementsByClassName('nums')[0].innerHTML=shu;
  	}
  }
}