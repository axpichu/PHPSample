<?php
	session_start();
	$date= date("Y-m-d", time());
	$filename=$_SESSION['park'].$date;
	$handle=fopen($filename, w);
	$string="Total number of customer: ".$_SESSION['entries']." Ammount taken in: ".$_SESSION['total'].
			" Ammount in cash: ".$_SESSION['cash']."\n";	
	fwrite($handle, $string);
	fclose($handle);
	session_destroy();	
	header("Location: Index.php");
?>