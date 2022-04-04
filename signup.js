function validateform()
{
var letters = /^[A-Za-z][A-Za-z\si]*$/;  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  

var name=document.signupform.name.value;  
var password=document.signupform.password.value;
	var repassword=document.signupform.repassword.value;  
  var email=document.signupform.uemail.value;
  var checkbox=document.signupform.accept.value;
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false; 
} 
else if(!name.match(letters)){ 
 alert("Name should only contain alphabets");  
  return false; 
}
  else if(password==null || password=="")   
  {
  	 alert("password can't be blank");  
  return false;
  }
else if(password.length<5){  
  alert("Password must be at least 5 characters long.");  
  return false;  
  }
  else if(repassword==null || repassword=="")   
  {
  	 alert("please confirm your password");  
  return false;
  }

  	else if(password!=repassword)

{
	alert("Password must be same");  
  return false; 
}
else if(email==null || email=="")   
  {
  	 alert("email can't be blank");  
  return false;
  }
  else if(!mailformat.test(email))
{
  alert("you have entered an invalid email address");  
  return false;

  }
   else if(checkbox.checked())
{
  alert("you have to Accept Term of Use and Privacy Policy");  
  return false;

  }
else{
	return true;
}

}  