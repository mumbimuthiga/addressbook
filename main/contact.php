<?php
	
$showAlert = false;
$showError = false;
$exists=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Include file which makes the
	// Database Connection.
	include 'config/db.php';
    include 'get.php';
	
	$fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email=$_POST["email"];
    $street=$_POST["street"];
    $zipcode=$_POST["zipcode"];
    $cityname=$_POST["cityname"];
	
			
	
	
		
	
		// Password Hashing is used here.
            //"INSERT INTO entries(first_name, last_name, email,street,zip_code,city_name)
			$sql = "INSERT INTO `entries` ( `first_name`,`last_name`, `email` ,`street` ,`zip_code` ,`city_name`) 
            VALUES ('$fname','$lname', '$email' ,'$street' ,'$zipcode' ,'$cityname'";
	
			$result = mysqli_query($conn, $sql);
	
			if ($result) {
				$showAlert = true;
			}
			

	

	
}
	
?>
	
