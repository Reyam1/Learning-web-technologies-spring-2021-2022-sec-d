<?php


$nameError ="";
$username = "";


//print_r($_REQUEST);

if(isset($_REQUEST['submit']))

{

	if($_GET['username'] == null)

	{ 

		$nameError ="invalid username";
	}
	else 
	{
		$username = $_Request['username'];
	}

}

else
{
	echo"invalid";
}





?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP FORM</title>
</head>
<body> 




	<form  method="GET" action="Tesk_Task.php">

		<fieldset>
	   <legend> <center>NAME</center></legend>
	   	

	   	<table >
	   		
	   		<tr>
	   			
	   				<td>
	   					<input type="text" name="username" value="<? =?>">
	   				</td>

	   			
	   		</tr>

	   		<tr>
	   			
	   				<td> <hr><input type="submit" name="submit" value="Submit"></td>
	   			
	   		</tr>



	   	</table>
	   
		
</fieldset>

	</form>

</body>
</html>