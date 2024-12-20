<style>
    .dbresult,.dbresult td,.dbresult th{
		border:1px solid black;
		border-collapse; collapse;
		padding: 8px
	}
	.dbresult{
		width:800px;
		margin:auto;
	}
	.dbresult tr:nth-child(odd){
		background-color: #b2d0d6;
	}
	.dbresult tr:nth-child(even){
		background-color: lightcyan;
	}
</style>

<?php
    
	$con=mysqli_connect("localhost","root","","elms");
	if (!$con){
		die('Connection error'.mysqli_connect_error());
	}
	
	$query="SELECT registrationdate,name,gender,dateofbirth,fathername,mobilenumber,educationalqualification,department,year,currentprofile,jobprefer,aditionalskils,housenumber,streetname,place,district,pincode,contactnumber,whatsappnumber,mailid FROM placementcell";
	
	$result=mysqli_query($con,$query);
	
	$numrow=mysqli_num_rows($result);
	if($numrow>0){
		echo '<table class="dbresult">';
		echo '<tr>';
		echo '<th>registrationdate</th>';
		echo '<th>name</th>';
		echo '<th>gender</th>';
		echo '<th>dateofbirth</th>';
		echo '<th>fathername</th>';
		echo '<th>mobilenumber</th>';
		echo '<th>educationalqualification</th>';
		echo '<th>department</th>';
		echo '<th>year</th>';
		echo '<th>currentprofile</th>';
		echo '<th>jobprefer</th>';
		echo '<th>aditionalskils</th>';
		echo '<th>housenumber</th>';
		echo '<th>streetname</th>';
		echo '<th>place</th>';
		echo '<th>district</th>';
		echo '<th>pincode</th>';
		echo '<th>contactnumber</th>';
		echo '<th>whatsappnumber</th>';
		echo '<th>mailid</th>';
		echo '</tr>';
		while($row=mysqli_fetch_assoc($result)){
			echo '<tr>';
			echo '<td>'.$row['registrationdate'].'</td>';
			echo '<td>'.$row['name'].'</td>';
			echo '<td>'.$row['gender'].'</td>';
			echo '<td>'.$row['dateofbirth'].'</td>';
			echo '<td>'.$row['fathername'].'</td>';
			echo '<td>'.$row['mobilenumber'].'</td>';
			echo '<td>'.$row['educationalqualification'].'</td>';
			echo '<td>'.$row['department'].'</td>';
			echo '<td>'.$row['year'].'</td>';
			echo '<td>'.$row['currentprofile'].'</td>';
			echo '<td>'.$row['jobprefer'].'</td>';
			echo '<td>'.$row['aditionalskils'].'</td>';
			echo '<td>'.$row['housenumber'].'</td>';
			echo '<td>'.$row['streetname'].'</td>';
			echo '<td>'.$row['place'].'</td>';
			echo '<td>'.$row['district'].'</td>';
			echo '<td>'.$row['pincode'].'</td>';
			echo '<td>'.$row['contactnumber'].'</td>';
			echo '<td>'.$row['whatsappnumber'].'</td>';
			echo '<td>'.$row['mailid'].'</td>';
			echo'</tr>';
		}
		echo'</table>';	
	}else {
		echo 'Record Not fount';
	}
?>