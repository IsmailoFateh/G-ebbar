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
  <title>Edit Nationality</title>
  
</head>
<body>
<div id="main-content">
    <div id="show">
        <h2>Edit Nationality</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nid" style="font-family: sans-serif;"> Nationality ID :</label><br>
            <input type="text" name="nid" placeholder="Id" />
        </div>
        <input class="submit" type="submit" name="showb" value="Display" />
    </form>
</div>
    <?php
      if(isset($_POST['showb'])){
        include 'config.php';

        $nat_id = $_POST['nid'];

        $sql = "SELECT * FROM personnationality WHERE nid = {$nat_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updata_nation.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
            <label style="font-family: sans-serif;">Nationality :</label><br>
            <input type="hidden" name="nid"  value="<?php echo $row['nid']; ?>" />
            <input type="text" name="nationality" placeholder="Nationality ..." value="<?php echo $row['nationality']; ?>" />
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