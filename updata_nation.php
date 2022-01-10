<?php
include 'config.php';
$nat_id = $_POST['nid'];
$nat_name = $_POST['nationality'];
$sql = "UPDATE personnationality SET nationality = '{$nat_name}' WHERE nid = {$nat_id}";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.") ;

header("Location: http://localhost/miniprojet/admin.php");

mysqli_close($conn);

?>