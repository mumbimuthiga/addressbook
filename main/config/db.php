<?php

$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "addressbook";
$conn = mysqli_connect($servername, $username, $password, $database);
if($conn) {
   // echo "success"; 
} 
else {
    die("Error". mysqli_connect_error()); 
} 

/*if ($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
    print_r("Success");
    // Attempt insert query execution
$sql = "INSERT INTO entries(first_name, last_name, email,street,zip_code,city_name)
 VALUES 
('Peter', 'Parker', 'peterparker@mail.com' ,'Nairobi' ,'345' ,'Nairobi City')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}*/
