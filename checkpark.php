<?php
	session_start();
    $con= mysqli_connect('localhost', 'parkuser', 'lake', 'park' );
 	$park= $_POST['parkname'];
	$ppass= $_POST['parkpass'];
	$park= stripslashes($park);
	$ppass= stripslashes($ppass);
	//$park= mysql_real_esacape_string($park);
	//$ppass= mysql_real_escape_string($ppass);
	
	$sql= "SELECT parkname FROM login WHERE parkname='$park' and password= '$ppass'";
	$result= mysqli_query($con,$sql);
	if($result->num_rows==1)
		{
			$_SESSION['park']=$park;
			$sql= "SELECT ammount FROM rate";
			$result = mysqli_query($con, $sql);
			$row = $result->fetch_assoc();
			$_SESSION['bus']= $row['ammount'];
			$row = $result->fetch_assoc();
			$_SESSION['normal']= $row['ammount'];
			$row = $result->fetch_assoc();
			$_SESSION['senior']= $row['ammount'];
			mysqli_close($con);
			header("Location: Login.php");
		}
	else
	{
		mysqli_close($con);
		header("/Index.php");	
	}
	
	
?>