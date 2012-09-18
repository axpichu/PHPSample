<?php
    session_start();
    $con= mysqli_connect('localhost', 'root', 'bronto', 'park' );	
	$_SESSION['entries']+= 1;
 	$pay = $_POST['paymenttype'];
	$form= $_POST['type'];
	$date= date("Y-m-d", time());
	$ammount;
	if($form=="Normal")
	{
		$ammount=$_SESSION['normal'];
	}
	elseif($form=="Senior")
	{
		$ammount=$_SESSION['senior'];
	}
	elseif($form=="Bus")
	{
		$ammount=$_SESSION['bus'];
	}
	elseif($form==NULL)
	{
		header("Location: Entry.php");
	}
	
	if ($pay== "cash")
	{
		$_SESSION['cash']=$ammount+$_SESSION['cash'];
	}
	$_SESSION['total']=$ammount+$_SESSION['total'];
	$sql= "INSERT INTO entries (type,payment,date) VALUES ('$form','$pay','$date')";

	$result= mysqli_query($con,$sql);
	
	header("Location:". $_SESSION['basepage']);
	/*
	 * this is used to print the recipt
	$sql = "SELECT MAX(entryid) FROM entries";
	$result= mysqli_query($sql);
	$row= $result->fetch_assoc();
	$id=$row['MAX(entryid)'];
	header("Location: printrecipt.php")
		*/
?>