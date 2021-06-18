<?php
	include("databaseinfoR.php");

	$name=$_POST['name'];
	$mail=$_POST['email'];
	$pass=$_POST['password'];
	
	$qry = "insert into regtable (Name,Email,Password) values('$name','$mail','$pass')";
	mysqli_query($con,$qry);	

	header("location: datainsertedR.php");
?>