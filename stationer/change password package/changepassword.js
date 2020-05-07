function Validation()
{
	var OPASSWORD = document.forms["myForm"]["opass"].value;
	var NPASSWORD= document.forms["myForm"]["npass"].value;
	var RPASSWORD= document.forms["myForm"]["rpass"].value;

	
	if ( OPASSWORD == "")
	{
		alert("you must Enter your old password");
		return false;
	}
	if (NPASSWORD.length > 10)
	{
		alert("password length should be less than 10 characters");
		return false;
	}
	if (NPASSWORD == "")
	{
		alert("you should enter your new password");
		return false;
	}
	if (RPASSWORD == "")
	{
		alert("you should retype your password");
		return false;
	}
	if (NPASSWORD != RPASSWORD ) 
	{
		alert("No match password");
  		return false;
	}
		

}