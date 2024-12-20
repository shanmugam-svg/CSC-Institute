<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1> Student Login </h1>
<form action=checklogins.php method="post">
<div id="loginbox">
	<div class="heading">
		User Login
	</div>
	<div class="labels"> Mobile Number </div>
	<div class="inputs"> 
		<input type=text name=mobileno>
	</div>

	<div class="labels"> Password </div>
	<div class="inputs"> 
		<input type=password name=password>
	</div>
	
	<div class="submitbtn">
		<input type=submit value="Login">
	</div>
	
	<div id="forgot">
		Forgot Password?
		<A href="changepassword.php">
		Change Password
		</a>
	</div>
	
	<div id=newuser>
		New User ? 
		<a href="register.php"> 
		Register Here </a>
	</div>
</div>
</form>
</body>
</html>
