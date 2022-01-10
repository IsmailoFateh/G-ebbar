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
  <title>User home</title>
  
</head>
<body>

<header> 
    <div class="inner">
     <div class="logo">
   <div> <!-- The below line can be an image or a h1, either will work --> <img src="logo1.png" alt="G-EBBAR">
        <!-- <h1>My Logo</h1> --> </div> 
    </div> 
<nav> <!-- Each of the below lines look complicated. There is a reason for this markup though! <li> tag will be the container for the table. <span> will be the part that centers the content inside it <a> is the actual clickable part --> 
       
    <li>
        <span><a href="chat.php">Chat</a></span>
    </li>
    <li>
        <span><a href="add_pays_nationalité.php">Nationality</a></span>
    </li>
    <li>
        <span><a href="add_sport.php">Sport</a></span>
    </li>
    <li>
        <span> 
            <select class="selector" id="meme">
                <option class="option" disabled>Account Settings</option>
                
                <option class="option1" value="delete-inline.php"> Remove Account</a></option>
              
            </select>
            
    </li>
                                        <li>                  
                         <span>
						<div class="user-name" >
						<p style="color:#1D809F;"><strong><?php  echo  $_SESSION["username"] ;
                      ?></strong> 
				        </p>
						Online&nbsp;<img src='dot.png' height='15px' width='15px' alt=''>
						</span>
                                        </li>
    <li>
        <span><a <?php

      include 'config.php';
      $ev_id = $_SESSION['username'];
      $sq22="UPDATE `user` SET `online`='offline' WHERE uname='{$ev_id}' ";
        $result32 = mysqli_query($conn, $sq22) or die("Query Unsuccessful.") ;
       
                          

        ?>
 href="index.php" name="Logout" class="button">Log out</a></span>
        
    </li> <!-- On the line above, remove the class="button" if you don't want the final element to be a button --> </nav> 

</div>
 </header>
 <script type="text/javascript">
     var urlMenu = document.getElementById('meme');
     urlMenu.onchange = function(){
         var userOption = this.options[this.selectedIndex];
         window.open(userOption.value,"Settings","");
     }
     </script>



<?php
      include 'config.php';

      $sql = "SELECT * FROM person  LEFT JOIN personnationality ON person.ppay =  personnationality.nid LEFT JOIN personsport ON person.psport = personsport.sid WHERE pname = '$_SESSION[username]'";
      
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <div class="te">
      <h1>User: <?php echo  $_SESSION["username"] ?></h1>
    </div>
    <table id="table"cellpadding="30px">
        <thead>
        
        
        
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <th>N°Ordre</th>
                <td><?php echo $row['pid']; ?></td>
            </tr>
            <tr> <th>Registration Date </th>
               <td><?php echo $row['pdate']; ?></td>
            </tr>
            <tr><th>Name</th>
                <td><?php echo $row['pname']; ?></td>
            </tr>
            <tr><th>Prename</th>
                <td><?php echo $row['plname']; ?></td>
            </tr>
            <tr><th>Photo</th>
                <td><img height="70px" width="80px" src=<?php echo $row['file_name']; ?>></td>
            </tr> 
            <tr> <th>Date of Birth</th>
                <td><?php echo $row['pdn']; ?></td>
            </tr>
            <tr><th>Nationality</th>
                <td><?php echo $row['nationality']; ?></td>
            </tr>
            <tr><th>Flag</th>
                <td><img height="70px" width="80px" src=<?php echo $row['pdr']; ?>></td>
                </tr>
            <tr><th>Place of Birth</th>
                <td><?php echo $row['pln']; ?></td>
                </tr>
            <tr><th>Birth Country</th>
                <td><?php echo $row['ppn']; ?></td>
                </tr>
            <tr><th>Address</th>
                <td><?php echo $row['paddress']; ?></td>
                </tr>
            <tr><th>Address2</th>
                <td><?php echo $row['paddress2']; ?></td>
                </tr>
            <tr><th>Country</th>
                <td><?php echo $row['ppays']; ?></td>
                </tr>
            <tr><th>City</th>
                <td><?php echo $row['pville']; ?></td>
                </tr>
            <tr><th>City 2</th>
                <td><?php echo $row['pville2']; ?></td>
                </tr>
            <tr><th>Job</th>
                <td><?php echo $row['ppro']; ?></td>
                </tr>
            <tr><th>Phone</th>
                <td><?php echo $row['pphone']; ?></td>
                </tr>
            <tr><th>E-mail</th>
                <td><?php echo $row['pemail']; ?></td>
                </tr>
            <tr><th>Blood Type</th>
                <td><?php echo $row['poh']; ?></td>
                </tr>
            <tr><th>Gender</th>
                <td><?php echo $row['psexe']; ?></td>
            </tr>
            <tr><th>Statut</th>
                <td><?php echo $row['pstatut']; ?></td>
                </tr>
            <tr><th>Religion</th>
                <td><?php echo $row['preligion']; ?></td>
                </tr>
            <tr><th>Smoker</th>
                <td><?php echo $row['pfumeur']; ?></td>
                </tr>
            <tr><th>Art Type</th>
                <td><?php echo $row['part']; ?></td>
                </tr>
            <tr><th>Sport</th>
                <td><?php echo $row['sname']; ?></td>
                </tr>
            <tr><th>Personality Summary</th>
                <td><?php echo $row['pr']; ?></td>
                </tr>
            <tr><th>Video</th>
                <td><video width="200" height="150" controls><source src="<?php echo $row['pvid']; ?>" type="video/mp4">Your browser does not support the video tag.</video></td>
                </tr>
            
               
            
            
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Data Found</h2>"; ?>
         <span><a href="add.php" class="button">Create Compte</a></span>
    <?php }
  mysqli_close($conn);
  ?>
</body>
</html>