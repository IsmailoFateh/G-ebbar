<?php 
include 'config.php';
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $Online = $_POST["online"];
    $sql = "SELECT * FROM user WHERE uname='{$username}' AND password='{$password}'  ";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.") ;
    $row = mysqli_fetch_array($result);
    if ($row["login"]=="user") {
        $_SESSION["username"] = $username;
        $sql2="UPDATE `user` SET `online`='online' WHERE uname='{$username}' AND password='{$password}'";
        $result22 = mysqli_query($conn, $sql2) or die("Query Unsuccessful.") ;
        
        header("Location: http://localhost/miniprojet/user.php");
    }
    elseif ($row["login"]=="admin") {
        $_SESSION["username"] = $username;
        header("Location: http://localhost/miniprojet/admin.php");
    }
    else {
        echo "username or password incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="en"  dir="ltr">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
    <title>LOG IN</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<form class="post-form" action="#" method="post" enctype="multipart/form-data">
<div class="login-box">
  <h1>Log in</h1>
<div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username" placeholder="Nom" required/>
    
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Mot De Passe" required/>
  </div>


    
     
    
    <p><a href="creation.php">Sign in</a></p> 

        <input class="btn" type="submit" value="Login"  />
    </form>
</div>
</body>
</html>