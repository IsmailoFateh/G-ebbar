<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php //include 'header.php';
include "config.php";


?>

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
            <tr colspan ="2"><th>Action</th>
                <td>
                <a href='delete-inline2.php?id=<?php echo $row['pid']; ?>'><h3>Delete</h3></a><br>
    
                </td>
                </tr>
            
            
          <?php } ?>
        </tbody>
    </table>
    <?php }else{
    echo "<h2>No Data Found</h2>"; ?>
         
    <?php }
  mysqli_close($conn);
  ?>
   
               
               
    </form>
</div>
</div>
</div>
</body>
</html>
