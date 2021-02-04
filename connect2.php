<?php

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$purpose = $_POST["purpose"];
$Section = $_POST["Section"];

// Create connection
$conn = new mysqli('localhost','root','','Aman');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
else{
	$stmt = $conn->prepare("insert into change_r(firstName,lastName,purpose,Section) values(?,?,?,?)");

	$stmt->bind_param("ssss",$firstName,$lastName,$purpose,$Section);
	$stmt->execute();

  echo "registration successfully";  

  $stmt->close();
  $conn->close(); 
}

?>