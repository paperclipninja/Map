<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<h1> ENTER USERNAME AND PASSWORD</h1>
	<form name='myform' method=get action='loginPage.php'>
Username: <input type="text" name="userN" id="userN"value="">
Password: <input type="text" name="pass" id="pass" value="">
<button type=submit name="button" accessKey='s'><u>S</u>ubmit</button>
</form>

<?php
$username=$_REQUEST["userN"];
$password=$_REQUEST["pass"];
$thingy="";
echo "THIS MAY BE WORKING";
function check($username, $password)
{
echo "?";
	if($username=="GABORGALORE" && $password=="PAAASSSWORD")
	{
		//redirect to the page	
		$thingy="IT WORKS!!!!!!!!!!!!!";
	}
	else{
		$thingy="ERROR";
	}
return $thingy;
}

echo $thingy;
?>

</body>
</html>
