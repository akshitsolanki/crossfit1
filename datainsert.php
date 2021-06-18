<?php
	include("databaseinfo.php");

	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$subject=$_POST['sub'];
	$message=$_POST['txtarea'];
	
	$qry = "insert into feedback (Name,Email,Subject,Message) values('$name','$mail','$subject','$message')";
	mysqli_query($con,$qry);	

	header("location: datainserted.php");
?>