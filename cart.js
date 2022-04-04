function additemcart() 
{
 
var v=document.getElementById("cartcount").innerHTML;
//document.write(v);
var y=parseInt(v,10);
var s= y+1;
//document.write(s);
var n=s.toString();
document.getElementById("cartcount").innerHTML=s;
}