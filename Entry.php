<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <meta charset="utf-8" />

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  

  <title>templates</title>
  <meta name="viewport" content="width=device-width; initial-scale=1.0" />
	

</head>

<body>
	<h1> Select Payment Type and Ammount</h1>
  <div class='entry'>
		<form action="payment.php" method="post">
		
		<input type="radio" name="paymenttype"  value="cash" />Cash
		<input type="radio" name="paymenttype" value="card" />Card
		<br/><br/>
		<input type="radio" name="type" value="Normal"/>Normal $<?php echo $_SESSION['normal'];?>
		<input type="radio" name="type" value="Senior"/>Senior $<?php echo $_SESSION['senior'];?>
		<input type="radio" name="type" value="Bus"/>Bus/Van $<?php echo $_SESSION['bus'];?>
		<br/><br/>
		<input type="submit" value="enter"/>
		
		</form>
	</div>
      
</body>
</html>
