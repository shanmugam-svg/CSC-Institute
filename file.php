<html>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die('Could not connect:'.mysqli_error());
}
    $regd=$_POST['registrationdate'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$dob=$_POST['dateofbirth'];
	$fname=$_POST['fathername'];
	$mno=$_POST['mobileno'];
	$qualification=$_POST['educationalqualification'];
	$department=$_POST['department'];
	$year=$_POST['year'];
	$currentprofile=$_POST['currentprofile'];
	$jobprefer=$_POST['jobprefer'];
	$aditionalskils=$_POST['aditionalskils'];
	$housenumber=$_POST['housenumber'];
	$streetname=$_POST['streetname'];
	$place=$_POST['place'];
	$district=$_POST['district'];
	$pincode=$_POST['pincode'];
	$contactnumber=$_POST['contactnumber'];
	$whatsappnumber=$_POST['whatsappnumber'];
	$mailid=$_POST['mailid'];

mysqli_select_db($con,"elms");

$sql="insert into placementcell values('";
	$sql.=$regd . "','" . $name . "','";
	$sql.=$gender . "','" . $dob . "','";
	$sql.=$fname . "','" . $mno . "','";
	$sql.=$qualification . "','" . $department . "','";
	$sql.=$year . "','" . $currentprofile . "','";
	$sql.=$jobprefer . "','" . $aditionalskils . "','";
	$sql.=$housenumber . "','" . $streetname . "','";
	$sql.=$place . "','" . $district . "','";
	$sql.=$pincode . "','" . $contactnumber . "','";
	$sql.=$whatsappnumber . "','";
	$sql.=$mailid . "')";
	
mysqli_query($con,$sql);

mysqli_close($con);
	?>
	<h1> <?php echo $name; ?>You Are Successfully Registered.....</h1>
	<h2 align=center>
	<a href=check.php> View Here </a> 
	</h2>
</body>
</html>