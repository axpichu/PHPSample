<?php
    session_start();
    $con= mysqli_connect('localhost', 'parkuser', 'lake', 'park' );	
	$entryid= $_POST['id'];
	$sql= "SELECT type , payment FROM entries where entryid= '$entryid'";
	$result= mysqli_query($con,$sql);
	$num=$result->num_rows;
	echo $num;
	if($num==1)
	{
		echo "test";
		$row=$result->fetch_assoc();
		
		if($row['type']=="Normal")
		{
			$ammount= $_SESSION['normal'];
		}
		elseif($row['type']=='Senior')
		{
			$ammount=$_SESSION['senior'];
		}
		else
		{
			$ammount=$_SESSION['bus'];
		}
		if($row['payment'=='Cash'])
		{
			$_SESSION['cash']-=$amount;
		}
		$_SESSION['total']-=$amount;
		$sql= "UPDATE entries SET refund='1' WHERE entryid='$entryid'";
		$result= mysqli_query($con,$sql);
		header("Location:". $_SESSION['basepage']);
	}
	else{
		
		header("Location: Refund.php");
	}
?>