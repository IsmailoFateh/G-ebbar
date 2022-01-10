<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php //include 'header.php';
if(isset($_POST['show'])){
include 'config.php';
$stu_id = $_POST['pid'];
$sql = "SELECT * FROM person  LEFT JOIN personnationality ON person.ppay =  personnationality.nid LEFT JOIN personsport ON person.psport = personsport.sid WHERE pid = '{$stu_id}'";

$res = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

if(mysqli_num_rows($res) > 0)  {
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
  <th>Action</th>
  
  
  
  </thead>
  <tbody>
    <?php
      while($row = mysqli_fetch_assoc($res)){
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
          <td>
              
              
          </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php }else{
echo "<h2>Aucun Donnee</h2>";
}
mysqli_close($conn);
}

if(isset($_POST['delete'])){

include "config.php";
$stu_id = $_POST['pid'];
$sql = "DELETE FROM person WHERE pid  = {$stu_id} ";
$result = mysqli_query($conn, $sql);
if ($result){
    $sql2 =  "DELETE FROM user WHERE uid = {$stu_id}";
    $resul = mysqli_query($conn, $sql2);
    header("Location: http://localhost/miniprojet/admin.php");
}
mysqli_close($conn);

}
?>
<div id="main-content">
    <div id="show">
    
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <h2>Kick User:</h2>
            <label style="font-family: sans-serif;">Id :</label><br>
            <input type="text" name="pid" />
        </div>
        <div>
        <input class="butn" type="submit" name="show" value="Display" />
        </div>
        <div>
        <input class="butn" type="submit" name="delete" value="Kick" />
        </div>
    </form>
</div>
</div>
</div>
</body>
</html>
