<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Refund</title>
  
</head>

<body>
	<h3> Enter Ticket number to refund. </h3>
  <div class='entry'>
		<form action="fund.php" method="post">
		<p>Ticket Number: <input type="text" name="id" /></p> 
		<input type="submit"/>

		</form>
	</div>
</body>
</html>
