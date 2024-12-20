<?php	
	session_start();
?>
<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1> Course detail </h1>
	<h2> Welcome
	<?php
		//$user=$_POST['username'];
		$user=$_SESSION['username'];
		echo $user;
	?>
	</h2>
	<table cellpadding=10 border=1 bgcolor=silver>
	<tr>
		<td> S.No </td>
		<td> List of Events </td>
	</tr>
	<tr>
		<td>1</td>
		<td> <a href=event.php?evt=Dance>HDCA</a></td>
	</tr>
	<tr>
		<td>2</td>
		<td> <a href=event.php?evt=Singing>DCCA</a></td>
	</tr>
	<tr>
		<td>3</td>
		<td> <a href=event.php?evt=Games>WAMP</a></td>
	</tr>
	<tr>
		<td>4</td>
		<td> <a href=event.php?evt=Presentation>Hardware and Networking</a></td>
	</tr>
	<tr>
		<td>5</td>
		<td> <a href=event.php?evt=Drawing>DTP</a></td>
	</tr>

	</body>

</html>