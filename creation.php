<?php 
include 'config.php';

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
    <title>Sign In</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<form class="post-form" action="saveuser.php" method="post" enctype="multipart/form-data">
<div class="login-box">
  <h1>Sign in</h1>
<div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="uid" placeholder="ID" required/>
  </div>

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username" placeholder="Nom" required/>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Mot De Passe" required/>
  </div>


        <input class="btn" type="submit" value="Sign in"  />
    </form>
</div>
</body>
</html>
