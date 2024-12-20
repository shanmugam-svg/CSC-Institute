<html>
<link rel="stylesheet" href="styles.css">
<body>

<?php
	$sname=$_POST['studentname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dateofbirth'];
	$mno=$_POST['mobileno'];
	$pass=$_POST['password'];
	
	$conn=mysqli_connect("localhost","root","","elms");
	
	$sql="insert into studentregistration values('";
	$sql.=$sname . "','" . $dob . "','";
	$sql.=$mno . "','" . $gender . "','";
	$sql.=$pass . "')";
	
	$rows=mysqli_query($conn,$sql);
	
?>
	<h1> <?php echo $sname; ?>You Are Successfully Registered.....</h1>
	<h2 align=center>
	<a href=studentlogin.php> Login Here </a> 
	</h2>
</body>
</html>