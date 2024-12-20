<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1> Student Login </h1>
<form action=storedata.php method="post">
<div id="registerbox">
	<div class="heading">
		User Registration
	</div>
	<div class="labels"> Student Name </div>
	<div class="inputs"> 
		<input type=text name=studentname>
	</div>

	<div class="labels"> Date of Birth </div>
	<div class="inputs"> 
		<input type=date name=dateofbirth>
	</div>
	
	
	<div class="labels"> Mobile Number </div>
	<div class="inputs"> 
		<input type=text name=mobileno>
	</div>
	
	
	<div class="labels"> Gender </div>
	<div class="inputs"> 
	<input type=radio name=gender value=Male>
	Male
	<input type=radio name=gender value=Female>
	Female
	</div>

	<div class="labels"> Password  </div>
	<div class="inputs"> 
		<input type=password  name=password>
	</div>

	
	<div class="submitbtn">
		<input type=submit value="Register">
	</div>

</div>
</form>
<body>
</html>
