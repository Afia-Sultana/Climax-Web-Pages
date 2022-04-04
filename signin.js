function validateform()
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var password=document.signinform.password.value;
	var email=document.signinform.uemail.value;

	if(email==null || email=="")   
  {
  	 alert("email can't be blank");  
  return false;
  }
  else if(password==null || password=="")   
  {
  	 alert("password can't be blank");  
  return false;
  }
  else
  {
  	return true;
  }
	} 