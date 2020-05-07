function Validation()
{
	
	var CREDIT  = document.forms["myForm"]["credit"].value;
	var PASSWORD = document.forms["myForm"]["password"].value;
	
	
		if (CREDIT == "")
	{
		alert("you should enter your credit number");
		return false;
	}
	if (PASSWORD == "")
	{
		alert("password Must Be Filled");
		return false;
	}	
}