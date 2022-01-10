<?php

 $stu_name = $_POST['sname_pays_nationalité'];
// $stu_address = $_POST['saddress'];
// $stu_class = $_POST['class'];
//  $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","miniprojet") or die("Connection Failed");

$sql = "INSERT INTO personnationality(nationality) VALUES ('{$stu_name}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/miniprojet/user.php");

mysqli_close($conn);

?>