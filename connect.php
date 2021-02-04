<?php

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$birthdate = $_POST["birthdate"];
$gender = $_POST["gender"];
$Address = $_POST["Address"];
$Contact = $_POST["Contact"];
$Adhar = $_POST["Adhar"];


// Create connection
$conn = new mysqli('localhost','root','','Aman');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
else{
	$stmt = $conn->prepare("insert into confidential(firstName,lastName,email,birthdate,gender,Address,Contact,Adhar) values(?,?,?,?,?,?,?,?)");

	$stmt->bind_param("ssssssii",$firstName,$lastName,$email,$birthdate,$gender,$Address,$Contact,$Adhar);
	$stmt->execute();

  echo "registration successfully";  

  $stmt->close();
  $conn->close(); 
}

?>