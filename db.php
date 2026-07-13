<?php

$conn = new mysqli(
"localhost",
"root",
"",
"government_portal"
);

if($conn->connect_error)
{
die("Connection Failed");
}

?>