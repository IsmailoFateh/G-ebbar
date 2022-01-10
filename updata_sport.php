<?php
include 'config.php';
$spr_id = $_POST['sid'];
$spr_name = $_POST['sname'];
$sql = "UPDATE personsport SET sname = '{$spr_name}' WHERE sid = {$spr_id}";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.") ;

header("Location: http://localhost/miniprojet/admin.php");

mysqli_close($conn);

?>