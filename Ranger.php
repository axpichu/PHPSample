<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <meta charset="utf-8" />

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Ranger</title>

  <meta name="viewport" content="width=device-width; initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="basestyle.css"/>
  <?php
		if(!isset($_SESSION['basepage']))
		{
			//sets the basepage to return to on all actions except switch user.
			$_SESSION['basepage']=htmlentities($_SERVER['REQUEST_URL']);
		}
	
	?>
</head>

<body>
  <div>
    <header>
      <h1>Welcome <?php echo $_SESSION['user'];?></h1>
     </header>
      <div class="summary">
      		<p>Total number of customer: <?php echo $_SESSION['entries'];?>
      			Ammount taken in: <?php echo $_SESSION['total'];?>
      			Ammount in cash: <?php echo $_SESSION['cash'];?>      		
      		</p>
      	
      </div>
     <nav>
      <a href="/Entry.php">Entry</a>  <br/> 
      <a href="/Refund.php">Refund</a>   <br/>  
      <a href="/Login.php">Switch Users</a>   <br/>
      <a href="/Logout.php">Logout</a>   <br/>
    </nav>

    </div>
      
  
</body>
</html>
