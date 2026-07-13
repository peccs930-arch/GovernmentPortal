<?php

include "db.php";

$name=$_POST['name'];
$department=$_POST['department'];
$complaint=$_POST['complaint'];

$sql="INSERT INTO complaints
(name,department,complaint)
VALUES
('$name','$department','$complaint')";

$conn->query($sql);

echo "Complaint Submitted";

?>