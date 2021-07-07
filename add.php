<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name =$_POST["name"];
	
	$email =  $_POST['email'];
	$contact =  $_POST['contact'];
	$gender = $_POST['gender'];
	$profile =  $_POST['profile'];



		

	if(empty($name) ||  empty($email) || empty($contact)||empty($gender)||empty($profile)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
	
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		if(empty($contact)) {
			echo "<font color='red'>Contact No field is empty.</font><br/>";
		}
		if(empty($gender)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
		}
		if(empty($profile)) {
			echo "<font color='red'>Profile field is empty.</font><br/>";
		}
		
		
	
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,contact,gender,profile) VALUES('$name','$email','$contact','$gender','$profile')");
		
	
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
