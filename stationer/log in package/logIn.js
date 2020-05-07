function Validation()
{
	
	var EMAIL  = document.forms["myForm"]["email"].value;
	var PASSWORD = document.forms["myForm"]["password"].value;
	
	
	
		if (EMAIL == "")
	{
		alert("EMAIL Must Be Filled");
		return false;
	}
		if (PASSWORD == "")
	{
		alert("password Must Be Filled");
		return false;
	}
}