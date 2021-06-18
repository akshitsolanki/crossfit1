<?php
	include("databaseinfo.php");
	
	$Email=$_POST['username'];
	$Password=$_POST['pass'];
	$Confirm_Password=$_POST['cpass'];
	
	$qry = "update regtable set Password='$Password' where Email='$Email'";
	mysqli_query($con,$qry);	


	header("location: datainserted.php");
?>