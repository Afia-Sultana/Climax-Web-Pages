function decrementQty(){
		var old=document.getElementById("QtyInput").value;
		if(Number(old)<=1){
			document.getElementById("QtyInput").value=1;
		}
		else{
			document.getElementById("QtyInput").value=old-1;
		}
	}
    function incrementQty(){
		var old=document.getElementById("QtyInput").value;
			document.getElementById("QtyInput").value=Number(old)+1;
	}