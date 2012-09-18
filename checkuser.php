<?php
	session_start();
    $con= mysqli_connect('localhost', 'parkuser', 'lake', 'park' );
 	$user= $_POST['username'];
	$pass= $_POST['password'];
	$user= stripslashes($user);
	$pass= stripslashes($pass);
	if(substr($user, 0,2)=="RA")
	{
		$sql= "SELECT name FROM rangers WHERE rangerid='$user' and password= '$pass'";
		$result= mysqli_query($con,$sql);
		if($result->num_rows==1)
		{
			$row= $result->fetch_assoc();
			$user= $row['name'];
			$_SESSION['user']=$user;
			mysqli_close($con);
			$_SESSION['basepage']="Ranger.php";
			header("Location: ".$_SESSION['basepage']);
		}
		else
		{
			mysqli_close($con);
			header("Location: Login.php");	
		}
	}
	else{
		$park= $_SESSION['park'];
		$sql= "SELECT name FROM employees WHERE password= '$pass' AND employeeid IN (SELECT eid FROM parks WHERE parkname= '$park' and eid='$user')";
		$result= mysqli_query($con,$sql);
		
		if($result->num_rows==1)
		{
			$row= $result->fetch_assoc();
			$user= $row['name'];
			$_SESSION['user']=$user;
			mysqli_close($con);
			$_SESSION['basepage']="Main.php";
			header("Location: ".$_SESSION['basepage']);
		}
		else
		{
			mysqli_close($con);
			header("Location: Login.php");	
		}
	}

?>