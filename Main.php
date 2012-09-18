<!DOCTYPE html>
<?php
session_start();
?>
<HTML>
	
<head>
	<title>Welcome to <?php echo $_SESSION['park']; ?> station</title>
	 <link rel="stylesheet" type="text/css" href="basestyle.css"/>

</head>


<body>
	<h1> Welcome <?php echo $_SESSION['user']; ?></h1>

	<nav>
      <p><a href="/Entry.php">Entry</a></p>	
      <p><a href="/Refund.php">Refund</a></p>
      <p><a href="/Login.php">Swith User</a></p>
    </nav>
	
</body>
</HTML>
