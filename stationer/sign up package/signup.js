function Validation()
{
	var FNAME = document.forms["myForm"]["fName"].value;
	var LNAME = document.forms["myForm"]["lName"].value;
	var EMAIL  = document.forms["myForm"]["email"].value;
	var PASSWORD = document.forms["myForm"]["password"].value;
	var RPASSWORD= document.forms["myForm"]["rpassword"].value;
	var AGE  = document.forms["myForm"]["age"].value;
	var TELE  = document.forms["myForm"]["tele"].value;
	
	
	if (FNAME == "")
	{
		alert("First name Must Be Filled");
		return false;
	}
	if (LNAME == "")
	{
		alert("Last name Must Be Filled");
		return false;
	}
		if (EMAIL == "")
	{
		alert("EMAIL Must Be Filled");
		return false;
	}
	if (TELE == "")
	{
		alert("telephone Must Be Filled");
		return false;
	}
		if (PASSWORD == "")
	{
		alert("password Must Be Filled");
		return false;
	}
	if (PASSWORD.length > 10)
	{
		alert("password length should be less than 10 characters");
		return false;
	}
		if (RPASSWORD == "")
	{
		alert("you should retype your password");
		return false;
	}
		if (PASSWORD != RPASSWORD ) 
	{
		alert("No match password");
  		return false;
	}
		if ( AGE == "")
	{
		alert("age must be filled");
		return false;
	}

}