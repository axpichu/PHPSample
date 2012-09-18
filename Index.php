<!DOCTYPE html>
<?php
	session_start();
	$_SESSION['cash']=0;
	$_SESSION['total']=0;
	$_SESSION['park'];
	$_SESSION['user'];
	$_SESSION['senior'];
	$_SESSION['normal'];
	$_SESSION['bus'];
	$_SESSION['entries']=0;
	$_SESSION['basepage'];
?>
<html lang="en">

<head>
	
  <meta charset="utf-8" />
	<title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="basestyle.css"/>
	
</head>

<body>
	
	<div>
		
		<h1>Welcome to DBO Lake Entry Station</h1>
		<br />
		<form action="checkpark.php" method="POST">
		<p class="login">Enter parkname:  <input type="text" name='parkname' /><br />
		Enter password:<input type="password" name='parkpass'  /><br />
		<input type="submit" /></p>
		</form>

		
	</div>
</body>

</html>

