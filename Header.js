function enable(){
	if(document.getElementById("txt").value.length>0){
       document.getElementById("btn").style.pointerEvents = "auto";
	}
	if(document.getElementById("txt").value.length<=0)	{
		document.getElementById("btn").style.pointerEvents = "none";
	}
}
