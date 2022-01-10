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

<header> 
    <div class="inner">
     <div class="logo">
   <div> <!-- The below line can be an image or a h1, either will work --> <img src="logo1.png" alt="G-EBBAR">
        <!-- <h1>My Logo</h1> --> </div> 
    </div> 
<nav> <!-- Each of the below lines look complicated. There is a reason for this markup though! <li> tag will be the container for the table. <span> will be the part that centers the content inside it <a> is the actual clickable part --> 
<li>
        <span><a href="chat2.php">Chat</a></span>
    </li>
    <li>
        <span> 
            <select class="selector" id="m"> 
                <option class="option" value="#" default>Stats... </option>
                
                <option class="option" value="sportpie.php"> Sport Pie</a></option>
                <option class="option" value="sportgraph.php"> Sport Graph</a></option>
                <option class="option" value="genderpie.php"> Gender Pie</a></option>
                <option class="option" value="genderbar.php"> Gender Graph</a></option>
                <option class="option" value="pieart.php"> Art Pie</a></option>
                <option class="option" value="artbar.php"> Art Graph</a></option>
            </select>
            
    </li>
    <li>
        <span> 
            <select class="selector" id="meme"> 
                <option class="option" value="#" default>Nationality... </option>
                <option class="option" value="aff_nation.php"> Display Nationalties</a></option>
                <option class="option"value="up_nation.php"> Edit Nationality</a></option>
                <option class="option" value="add_pays_nationalité.php"> Add Nationality</a></option>
                <option class="option1" value="sup_nation.php"> Delete Nationality</a></option>
            </select>
            
    </li>
    <li>
        <span> 
            <select class="selector" id="memee">
                <option class="option" value ="#" default>Sport... </option>
                <option class="option" value="aff_sport.php"> Display Sports</a></option>
                <option class="option"value="up_sport.php"> Edit Sport</a></option>
                <option class="option" value="add_sport.php"> Add Sport</a></option>
                <option class="option1" value="sup_sport.php"> Delete Sport</a></option>
            </select>
            
    </li>
    <li>
        <span> 
            <select class="selector" id="mem">
                <option class="option" value="#" default>Users Settings...</option>
                <option class="option" value ="add2.php" > Add User</a></option>
                <option class="option" value="update.php"> Edit User</a></option>
                <option class="option1" value="kick.php"> Kick User</a></option>
              
              
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
        <span><a href="index.php" class="button">Log out</a></span>
    </li> <!-- On the line above, remove the class="button" if you don't want the final element to be a button --> </nav> 
</div>
 </header>
 <script type="text/javascript">
     var urlMenu = document.getElementById('meme');
     urlMenu.onchange = function(){
         var userOption = this.options[this.selectedIndex];
         window.open(userOption.value,"Settings","");
     }

     var urlMenuu = document.getElementById('memee');
     urlMenuu.onchange = function(){
         var userOptionn = this.options[this.selectedIndex];
         window.open(userOptionn.value,"Settings","");
     }
     var urlMen = document.getElementById('mem');
     urlMen.onchange = function(){
         var userOptio = this.options[this.selectedIndex];
         window.open(userOptio.value,"Settings","");
     }
     var urlMen = document.getElementById('m');
     urlMen.onchange = function(){
         var userOpt = this.options[this.selectedIndex];
         window.open(userOpt.value,"Settings","");
     }
     </script>
<div id="main-content">
    <h2>All Data</h2>
    <?php
      include 'config.php';
      $sql = "SELECT * FROM person LEFT JOIN personnationality ON person.ppay =  personnationality.nid LEFT JOIN personsport ON person.psport = personsport.sid";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table id="tab"cellpadding="5px">
        <thead>
        <th>N°Ordre</th>
        <th>Date Enregistrement</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Photo</th>
        <th>Date Naissance</th>
        <th>Nationality</th>
        <th>Drapeau</th>
        <th>Lieu Naissance</th>
        <th>Pays Naissance</th>
        <th>Address</th>
        <th>Address2</th>
        <th>Pays</th>
        <th>Ville</th>
        <th>Ville2</th>
        <th>Profession</th>
        <th>N°Téléphone</th>
        <th>E-mail</th>
        <th>Group Sanguin</th>
        <th>Sexe</th>
        <th>Statut</th>
        <th>Religion</th>
        <th>Fumeur</th>
        <th>Type Arts</th>
        <th>Sport</th>
        <th>Résumé De La Personne</th>
        <th>Video</th>
        <!--<th>Action</th>-->
        
        
        
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['pid']; ?></td>
                <td><?php echo $row['pdate']; ?></td>
                <td><?php echo $row['pname']; ?></td>
                <td><?php echo $row['plname']; ?></td>
                <td><img height="70px" width="80px" src=<?php echo $row['file_name']; ?>></td>
                <td><?php echo $row['pdn']; ?></td>
                <td><?php echo $row['nationality']; ?></td>
                <td><img height="70px" width="80px" src=<?php echo $row['pdr']; ?>></td>
                <td><?php echo $row['pln']; ?></td>
                <td><?php echo $row['ppn']; ?></td>
                <td><?php echo $row['paddress']; ?></td>
                <td><?php echo $row['paddress2']; ?></td>
                <td><?php echo $row['ppays']; ?></td>
                <td><?php echo $row['pville']; ?></td>
                <td><?php echo $row['pville2']; ?></td>
                <td><?php echo $row['ppro']; ?></td>
                <td><?php echo $row['pphone']; ?></td>
                <td><?php echo $row['pemail']; ?></td>
                <td><?php echo $row['poh']; ?></td>
                <td><?php echo $row['psexe']; ?></td>
                <td><?php echo $row['pstatut']; ?></td>
                <td><?php echo $row['preligion']; ?></td>
                <td><?php echo $row['pfumeur']; ?></td>
                <td><?php echo $row['part']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['pr']; ?></td>
                <td><video width="200" height="150" controls><source src="<?php echo $row['pvid']; ?>" type="video/mp4">Your browser does not support the video tag.</video></td>
               <!--- <td>
                    <a href='edit.php?id=<?php echo $row['pid']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['pid']; ?>'>Delete</a>
                </td>--->
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>
</html>
