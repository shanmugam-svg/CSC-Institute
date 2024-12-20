<?php
	session_start();
	$mno=$_POST['mobileno'];
	$pass=$_POST['password'];
	
	$conn=mysqli_connect("localhost","root","","elms");
	
	$sql="select * from studentregistration where ";
	$sql.=" mobilenumber like '$mno'";
	
	$rows=mysqli_query($conn,$sql);
	if($row=mysqli_fetch_row($rows))
	{
		if($pass==$row[4])
		{
			$_SESSION['username']=$row[0];
			header("location:landing.php");	
		}
		else
			echo "Incorrect Password...";
	}
	else
	{
		echo "Invalid user ";
	}	
?>