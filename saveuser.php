<?php 
include 'config.php';

    $stu_id = $_POST["uid"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $sql ="INSERT INTO `user`(`uid`, `uname`, `password`, `login`) VALUES ('$stu_id','$username','$password','user')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.") ;
    
    header("Location: http://localhost/miniprojet/index.php");
?>