<?php
	session_start();

	 include("databaseinfo.php");
	 
	 $Email=$_POST['username'];
	 $Password=$_POST['pass'];
	 
	 $qry="select * from regtable where Email='$Email' and Password='$Password'";
	 
	 $result = mysqli_query($con,$qry);
	
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['UserId'] = $Email;
		echo "<a href='Admin/home.html'>Confirm You Are Not A Robot!</a>";
	}
	else
		echo "<a href='login.html'>Wrong,click here to login again</a>";
		
?>