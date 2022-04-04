    function closePopUp(){
		var modal=document.getElementById("QuickView");
		modal.style.display = "none";
		return;
	}

	window.onclick = function(event) {var modal=document.getElementById("QuickView");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function changeColor(){
	var c=document.getElementById("Color1").value;
	alert("Color is:");
	var cc=document.getElementById("newColor");
	cc.style.backgroundColor=c;
}