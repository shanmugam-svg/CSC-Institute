<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
	$mno=$_POST['mobileno'];
	$pass=$_POST['password'];
	
	$conn=mysqli_connect("localhost","root","","elms");
	
	$sql="select * from studentregistration ";
	$sql.="where mobilenumber like '$mno'";
	$rows=mysqli_query($conn,$sql);
	if($row=mysqli_fetch_row($rows))
	{
		$sql="update studentregistration set password=";
		$sql.="'$pass' where mobilenumber like '";
		$sql.="$mno'";
		$rows=mysqli_query($conn,$sql);
		echo "Password Change Successful...";
	}
	else
		echo "Invalid Details...";
	
	
?>
<h2 align=center>
	<a href="studentlogin.php"> Login Now </a>
</h2>
</body>
</html>