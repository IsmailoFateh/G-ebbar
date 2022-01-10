<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" >
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Nationality</title>
  
</head>
<body>
<link rel="stylesheet" type="text/css" href="style.css">
<?php //include 'headernation.php'; ?>
<div id="main-content">
    <div id="show">
    <h2>Add Nationality</h2>
    <form class="post-form" action="savepays.php" method="post">
        <div class="form-group">
            <label style="font-family: sans-serif;">Nationality :</label><br>
            <input type="text" name="sname_pays_nationalité" required/>
        </div>
       
        
        <input class="submit" type="submit" value="Add"  />
    </form>
</div>
</div>
</div>
</body>
</html>
