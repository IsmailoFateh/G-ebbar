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
  <title>Display Nationality</title>
  
</head>
<body>

 <?php
      include 'config.php';
      $sql = "SELECT `nid`, `nationality` FROM `personnationality`";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0){  
    ?>
    <div class="login-box">
    <table id="tab"cellpadding="5px">
        <thead>
        <th>Id</th>
        <th>Nationality</th></thead>
        <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['nid']; ?></td>
                <td><?php echo $row['nationality']; ?></td>
                <?php } ?>
            </table>   
            <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
            </form>

</div>

</body>
</html>