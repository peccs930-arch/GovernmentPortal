<?php
include "db.php";

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$aadhaar=$_POST['aadhaar'];

$sql="INSERT INTO users
(name,email,password,aadhaar)
VALUES
('$name','$email','$password','$aadhaar')";

$conn->query($sql);

header("Location: ../login.html");

?>