
<!DOCTYPE html>
<?php
	session_start();
	$con= mysqli_connect('localhost', 'root', 'bronto', 'park' );
	if (isset($_SESSION['basepage']))
	{
		//login chooses different pages base on user id.  This unsets the base page.	
		unset($_SESSION['basepage']);
	}
	
?>

<HTML>

<head>
	
	<title> User Login</title>
	 <link rel="stylesheet" type="text/css" href="basestyle.css"/>
  
</head>
<body>
.                                        
	<h1> Welcome to <?php echo $_SESSION['place'] ?> entry station.</h1>
	<br />
	<h2 class="login">Please login.</h2>
		<form action="checkuser.php" method="post">
		<p class="login">	
		Enter username:  <input type="text" name= "username"  /><br />
		Enter password:<input type="password" name="password" /><br />
		<input type="submit"/></p>
		</form>
	
	
	
</body>

</HTML>
