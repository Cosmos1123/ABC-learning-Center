

<?php
if (isset($_POST['name1']) && isset($_POST['email1']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['phone1']) && isset($_POST['address1']))
{
	$con = new mysqli("localhost","root","115822","mydba");
	// if ($con->connect_error) {
	//   die("Connection failed: " . $con->connect_error);
	// }
	
	$sql = "INSERT INTO leadregister(name, email, password,cpassword,phone,address) values('".$_POST["name1"]."','".$_POST["email1"]."','".$_POST["password1"]."','".$_POST["password2"]."','".$_POST["phone1"]."','".$_POST["address1"]."')";
	
	
	$con->query($sql);

	// if ($con->query($sql) === TRUE) {
	//   echo "New record created successfully";
	// } else {
	//   echo "Error: " . $sql . "<br>" . $con->error;
	// }
	$con->close();
}