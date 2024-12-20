<style>
#ibox
{
	width:600px;
	height:1500px;
	background-color:silver;
	margin:auto;
}
</style>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1> Placement Cell </h1>
<form action=file.php method="post">
<div id="ibox">
	<div class="heading">
		Information of the user
	</div>
	<div class="labels"> Registration date</div>          
	<div class="inputs"> 
		<input type=date name=registrationdate>
	</div>
	
	<div class="labels"> Name </div>
	<div class="inputs"> 
		<input type=text name=name>
	</div>
	
	<div class="labels"> Gender </div>
	<div class="inputs"> 
	<input type=radio name=gender value=Male>
	Male
	<input type=radio name=gender value=Female>
	Female
	</div>

	<div class="labels"> Date of Birth </div>          
	<div class="inputs"> 
		<input type=date name=dateofbirth>
	</div>																																						
	
	<div class="labels"> Father Name </div>
	<div class="inputs"> 
		<input type=text name=fathername>
	</div>
	
	<div class="labels"> Mobile Number </div>
	<div class="inputs"> 
		<input type=text name=mobileno>
	</div>
	
	<div class="labels"> Educational qualification </div>
	<div class="inputs">
	<select name="educationalqualification">
	     <option value=" ">
	     <option value="10th">10th
	     <option value="12th">12th
	     <option value="BA">BA
	     <option value="BSC">BSC
	     <option value="BCOM">BCOM
	     <option value="BCA">BCA
	     <option value="BE">BE
	     <option value="B.TECH">B.TECH
	     <option value="MA">MA
	     <option value="MSC">MSC
	     <option value="MCA">MCA
	     <option value="MCOM">MCOM
	     <option value="ME">ME							
	     <option value="Diplomo">Diplomo
	     <option value="Others">Others
	
	</select>
	</div>
	
	<div class="labels"> Department </div>
	<div class="inputs">
	<select name="department">
	<option value=" ">
	<option value="SSLC">SSLC
	<option value="HSC">HSC
	<option value="Tamil">Tamil
	<option value="English">English
	<option value="Maths">Maths
	<option value="Physics">Physics
	<option value="Chemistry">Chemistry
	<option value="history">history
	<option value="Botany">Botany
	<option value="Zology">Zology
	<option value="Computer science">Computer science
	<option value="Computer application">Computer application
	<option value="economics">economics
	<option value="Information technology">Information technology
	<option value="Bio-technology">Bio-technology
	<option value="nutrician">nutrician
	<option value="beautician">beautician
	<option value="Catring">Catring
	<option value="home science">home science
	<option value="EEE">EEE
	<option value="ECE">ECE
	<option value="Civil">Civil
	<option value="Mechanical">Mechanical
	<option value="others">others
	</select>
	</div>
	
	<div class="labels"> year </div>
	<div class="inputs">
	<select name="year">
	<option value=" ">
	<option value="1">1st year
	<option value="2">2nd year
	<option value="3">3rd year
	<option value="4">4th year
	</select>
	</div>
	
	<div class="labels"> Current Profile </div>
	<div class="inputs">
	<select name="currentprofile">
	<option value=" ">
	<option value="Student">Student
	<option value="Unemployed">Unemployed
	<option value="Employed">Employed
	</select>
	</div>
	
	<div class="labels"> Job prefer </div>
	     <div class="inputs">
	         <select name="jobprefer">
			 <option value=" ">
	         <option value="Part time">Part time
	         <option value="Full time">Full time
	         <option value="IT job">IT job
	         <option value="Non-IT job">Non-IT job
	         <option value="Any job">Any job
	         </select>
	     </div>
		 
	<div class="labels"> Aditional Skils </div>
	     <div class="inputs">
	         <select name="aditionalskils">
			 <option value=" ">
	         <option value="Computer programming">Computer programming
	         <option value="App development">App development
	         <option value="Web development">Web development
	         <option value="Non-IT job">Non-IT job
	         <option value="Data entry">Data entry
			 <option value="office work">office work
			 <option value="accountant">accountant
			 <option value="Design">Design
	         </select>
	     </div>
	
	<div class="labels"> House number </div>
	<div class="inputs"> 
		<input type=text name=housenumber>
	</div>
	
	<div class="labels"> Street name </div>
	<div class="inputs"> 
		<input type=text name=streetname>
	</div>
	
	<div class="labels"> place </div>
	<div class="inputs"> 
		<input type=text name=place>
	</div>
	
	<div class="labels"> district </div>
	<div class="inputs"> 
		<input type=text name=district>
	</div>
	
	<div class="labels"> pincode </div>
	<div class="inputs"> 
		<input type=text name=pincode>
	</div>
	
	<div class="labels"> Contact number </div>
	<div class="inputs"> 
		<input type=text name=contactnumber>
	</div>
	
	<div class="labels"> Whatsapp number </div>
	<div class="inputs"> 
		<input type=text name=whatsappnumber>
	</div>
	
	<div class="labels"> Mail id </div>
	<div class="inputs"> 
		<input type=text name=mailid>
	</div>

	
	<div class="submitbtn">
		<input type=submit value="Submit">
	</div>
	
</div>
</form>
<body>
</html>
