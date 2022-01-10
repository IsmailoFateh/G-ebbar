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
  <title>Admin home</title>
  
</head>
<body>

<div id="main-content">
    <div id="show">
        <h2>Edit Sport</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="sid" style="font-family: sans-serif;"> Sport ID:</label><br>
            <input type="text" name="sid" placeholder="Id" />
        </div>
        <input class="submit" type="submit" name="showbn" value="Display" />
    </form>
</div>
    <?php
      if(isset($_POST['showbn'])){
        include 'config.php';

        $spr_id = $_POST['sid'];

        $sql = "SELECT * FROM personsport WHERE sid = {$spr_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updata_sport.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
            <label style="font-family: sans-serif;">Nom du sport :</label><br>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sname" placeholder="Sport Name" value="<?php echo $row['sname']; ?>" />
        </div>
        <input class="submit" type="submit" value="Edit"  />
    </form>
    <?php
  }
}
}

    ?>
</div>
</div>
</body>
</html>