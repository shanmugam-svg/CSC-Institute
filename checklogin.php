<?php

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
		//header("location:landing.php");
			$username=$row[0];
?>
	<form action=landing.php method=post>
	<input type=hidden
	name=username 
	value="<?php echo $username; ?>" >
		</form>
		<script>
			document.forms[0].submit();
		</script>
<?php	
		}
		else
			echo "Incorrect Password...";
	}
	else
	{
		echo "Invalid user ";
	}	
?>