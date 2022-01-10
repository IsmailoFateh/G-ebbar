<?php //include 'header.php';

$stu_id = $_GET['id'];
include "config.php";
$sql = "DELETE FROM person WHERE pid  = {$stu_id} ";
$result = mysqli_query($conn, $sql);
if ($result){
    $sql2 =  "DELETE FROM user WHERE uid = {$stu_id}";
    $resul = mysqli_query($conn, $sql2);
    header("Location: http://localhost/miniprojet/index.php");
}
else {
 echo 'no';
}
mysqli_close($conn);


?>