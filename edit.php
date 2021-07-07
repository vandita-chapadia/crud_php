<?php

include_once("config.php");

if(isset($_POST['update']))
{	

	$id =  $_POST['id'];
	
	$name =$_POST["name"];

	$email =  $_POST['email'];
	$contact =  $_POST['contact'];
	$gender = $_POST['gender'];
	$profile =  $_POST['profile'];



	if(empty($name)  || empty($email) || empty($contact)||empty($gender)||empty($profile)) {	
			
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
				
	} else {	
	
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',contact='$contact',gender='$gender', profile='$profile' WHERE id=$id");
		
		
		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$email = $res['email'];
	$contact=$res['contact'];
	$gender=$res['gender'];
	$profile=$profile['profile'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
		
			<tr> 
				<td>Contact NO:</td>
				<td><input type="text" name="contact" maxlength="10" value="<?php echo $contact;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>Gender</td>
				<td><input type="text"  name="gender" value="<?php echo $gender;?>"></td>
				
			</tr>
			<tr>
				<td>Application for Post</td>
				<td>
				<input type="text"  name="profile" value="<?php echo $profile;?>"></td>
				</td>

				</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
