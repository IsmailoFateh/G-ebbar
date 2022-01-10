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
  <title>Edit User</title>
  
</head>
<body>

<link rel="stylesheet" type="text/css" href="style.css">
<?php //include 'header.php'; ?>
<div id="main-content">
    <div id="show">
        <h2>Edit</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="pid" style="font-family: sans-serif;">Id :</label><br>
            <input type="text" name="pid" placeholder="Id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Display" />
    </form>
</div>
    <?php
      if(isset($_POST['showbtn'])){
        include 'config.php';

        $stu_id = $_POST['pid'];

        $sql = "SELECT * FROM person WHERE pid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post" enctype="multipart/form-data">

      <div class="form-group">
            <label for="pdate" style="font-family: sans-serif;">Date Enregistrement :</label><br>
            <input type="hidden" name="pid"  value="<?php echo $row['pid']; ?>" />
            <input type="date" name="pdate" value="<?php echo $row['pdate']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">nom :</label><br>
            <input type="hidden" name="pid"  value="<?php echo $row['pid']; ?>" />
            <input type="text" name="pname" placeholder="Nom" value="<?php echo $row['pname']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Prénom :</label><br>
            <input type="hidden" name="pid"  value="<?php echo $row['pid']; ?>" />
            <input type="text" name="plname" placeholder="Prénom" value="<?php echo $row['plname']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Photo :</label><br>
            <input type="file" name="image" value="<?php echo $row['file_name']; ?>"><img height="50px" height="40px" src="<?php echo $row['file_name']; ?>"> 
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;" >Date Naissance :</label><br>
            <input type="hidden" name="pid"  value="<?php echo $row['pid']; ?>" />
            <input type="date" name="pdn" value="<?php echo $row['pdn']; ?>" />
        </div>

        <div class="form-group">
        <label style="font-family: sans-serif;">Pays_nationalité :</label><br>
        <?php
          $sql1 = "SELECT * FROM personnationality";
          $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="nationality">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['ppay'] == $row1['nid']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['nid']}'>{$row1['nationality']}</option>";
            }
        echo "</select>";
      }
          ?>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Drapeau :</label><br>
            <input type="file" name="pdr" value="<?php echo $row['pdr']; ?>"><img width="40px" height="50px" src="<?php echo $row['pdr']; ?>"> 
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Lieu Naissance :</label><br>
            <input type="hidden" name="pid"  value="<?php echo $row['pid']; ?>" />
            <input type="text" name="pln" placeholder="Lieu Naissance" value="<?php echo $row['pln']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Pays Naissance :</label><br>
            <input type="hidden" name="pid"  value="<?php echo $row['pid']; ?>" />
            <input type="text" name="ppn" placeholder="Pays Naissance" value="<?php echo $row['ppn']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Address :</label><br>
            <input type="text" name="paddress" placeholder="Address" value="<?php echo $row['paddress']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Address2 :</label><br>
            <input type="text" name="paddress2" placeholder="Address2" value="<?php echo $row['paddress2']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Pays :</label><br>
            <input type="text" name="ppays" placeholder="Pays" value="<?php echo $row['ppays']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Ville :</label><br>
            <input type="text" name="pville" placeholder="Ville" value="<?php echo $row['pville']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Ville 2:</label><br>
            <input type="text" name="pville2" placeholder="Ville2" value="<?php echo $row['pville2']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Profession :</label><br>
            <input type="text" name="ppro" placeholder="Profession" value="<?php echo $row['ppro']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Phone :</label><br>
            <input type="text" name="pphone" placeholder="Phone" value="<?php echo $row['pphone']; ?>" />
        </div>
        <div class="form-group">
            <label style="font-family: sans-serif;">E-mail :</label><br>
            <input type="text" name="pemail" placeholder="E-mail" value="<?php echo $row['pemail']; ?>" />
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Groupe Sanguin :</label><br>
            <input type="text" name="poh" placeholder="Groupe Sanguin" value="<?php echo $row['poh']; ?>" />
        </div>

        <div class="radio">
        <label>Sexe :</label><br>
    <input type="radio" name="psexe"
    <?php if (isset($row['psexe']) && $row['psexe']=="masculin") echo "checked";?>
    value="masculin">masculin
      <input type="radio" name="psexe"
    <?php if (isset($row['psexe']) && $row['psexe']=="feminin") echo "checked";?>
    value="feminin">feminin
    
       </div>
        
          <div class="radio">
      <label>Statut :</label><br>
    <input type="radio" name="pstatut"
    <?php if (isset($row['pstatut']) && $row['pstatut']=="marie") echo "checked";?>
    value="marie">Marie
      <input type="radio" name="pstatut"
    <?php if (isset($row['pstatut']) && $row['pstatut']=="celibataire") echo "checked";?>
    value="celibataire">Celibataire
    <input type="radio" name="pstatut"
    <?php if (isset($row['pstatut']) && $row['pstatut']=="veuf") echo "checked";?>
    value="veuf">Veuf
      <input type="radio" name="pstatut"
    <?php if (isset($row['pstatut']) && $row['pstatut']=="divorce") echo "checked";?>
    value="divorce">Divorce
       </div>

        <div class="radio">
        <label>Religion :</label><br>
    <input type="radio" name="preligion"
    <?php if (isset($row['preligion']) && $row['preligion']=="musulmane") echo "checked";?>
    value="musulmane">Musulmane
      <input type="radio" name="preligion"
    <?php if (isset($row['preligion']) && $row['preligion']=="chrétienne") echo "checked";?>
    value="chrétienne">Chrétienne
    <input type="radio" name="preligion"
    <?php if (isset($row['preligion']) && $row['preligion']=="juive") echo "checked";?>
    value="juive">Juive
     <input type="radio" name="preligion"
    <?php if (isset($row['preligion']) && $row['preligion']=="autres") echo "checked";?>
    value="autres">Autres
       </div>
     <div class="radio">
        <label>Fumeur :</label><br>
    <input type="radio" name="pfumeur"
    <?php if (isset($row['pfumeur']) && $row['pfumeur']=="oui") echo "checked";?>
    value="oui">Oui
      <input type="radio" name="pfumeur"
    <?php if (isset($row['pfumeur']) && $row['pfumeur']=="non") echo "checked";?>
    value="non">Non
       </div>

        <div class="radio">
            <label for="part">Type Arts:</label><br>
          <input type=checkbox name="art[]" 
         <?php if (isset($row['part']) && $row['part']=="theatre") echo "checked";
         else if (isset($row['part']) && $row['part']=="theatre,cinéma") echo "checked";
         else if (isset($row['part']) && $row['part']=="theatre,musique") echo "checked";
         else if (isset($row['part']) && $row['part']=="theatre,universelle") echo "checked";
         else if (isset($row['part']) && $row['part']=="theatre,arts_plastiques") echo "checked";
         else if (isset($row['part']) && $row['part']=="theatre,littérature") echo "checked";?>
         value="theatre">Théatre

         <input type=checkbox name="art[]" 
         <?php if (isset($row['part']) && $row['part']=="cinéma") echo "checked";
         else if (isset($row['part']) && $row['part']=="theatre,cinéma") echo "checked";
         else if (isset($row['part']) && $row['part']=="cinéma,musique") echo "checked";
         else if (isset($row['part']) && $row['part']=="cinéma,universelle") echo "checked";
         else if (isset($row['part']) && $row['part']=="cinéma,arts_plastiques") echo "checked";
         else if (isset($row['part']) && $row['part']=="cinéma,littérature") echo "checked";?>
         value="cinéma">Cinéma

          <input type=checkbox name="art[]" 
         <?php if (isset($row['part']) && $row['part']=="musique") echo "checked";
         else if (isset($row['part']) && $row['part']=="theatre,musique") echo "checked";
         else if (isset($row['part']) && $row['part']=="cinéma,musique") echo "checked";
         else if (isset($row['part']) && $row['part']=="musique,universelle") echo "checked";
         else if (isset($row['part']) && $row['part']=="musique,arts_plastiques") echo "checked";
         else if (isset($row['part']) && $row['part']=="musique,littérature") echo "checked";?>
         value="musique">Musique
         
          <input type=checkbox name="art[]" 
         <?php if (isset($row['part']) && $row['part']=="universelle") echo "checked";
         else if (isset($row['part']) && $row['part']=="theatre,universelle") echo "checked";
         else if (isset($row['part']) && $row['part']=="cinéma,universelle") echo "checked";
         else if (isset($row['part']) && $row['part']=="musique,universelle") echo "checked";
         else if (isset($row['part']) && $row['part']=="universelle,arts_plastiques") echo "checked";
         else if (isset($row['part']) && $row['part']=="universelle,littérature") echo "checked";?>
         value="universelle">Universelle
         
         <input type=checkbox name="art[]" 
         <?php if (isset($row['part']) && $row['part']=="arts_plastiques") echo "checked";
         else if (isset($row['part']) && $row['part']=="theatre,arts_plastiques") echo "checked";
         else if (isset($row['part']) && $row['part']=="cinéma,arts_plastiques") echo "checked";
         else if (isset($row['part']) && $row['part']=="musique,arts_plastiques") echo "checked";
         else if (isset($row['part']) && $row['part']=="universelle,arts_plastiques") echo "checked";
         else if (isset($row['part']) && $row['part']=="arts_plastiques,littérature") echo "checked";
         ?>
         value="arts_plastiques">Arts plastiques 

         <input type=checkbox name="art[]" 
         <?php if (isset($row['part']) && $row['part']=="littérature") echo "checked";
         else if (isset($row['part']) && $row['part']=="theatre,littérature") echo "checked";
         else if (isset($row['part']) && $row['part']=="cinéma,littérature") echo "checked";
         else if (isset($row['part']) && $row['part']=="musique,littérature") echo "checked";
         else if (isset($row['part']) && $row['part']=="universelle,littérature") echo "checked";
         else if (isset($row['part']) && $row['part']=="arts_plastiques,littérature") echo "checked";?>
         value="littérature">Littérature
         
         
          </div>

        <div class="radio">
        <label>Sport :</label><br>
        <?php
          $sql1 = "SELECT * FROM personsport";
          $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="psport">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['psport'] == $row1['sid']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['sid']}'>{$row1['sname']}</option>";
            }
        echo "</select>";
      }
          ?>
        </div>


		<div class="radio">
            <label>Résumé De La Personne :</label><br>
            <textarea name="pr" value="<?php echo $row['pr']; ?>" ><?php echo $row['pr']; ?></textarea>
        </div>
		   	

        <div class="radio">
            <label>Video :</label>
            <input type="file" name="video" value="<?php echo $row['pvid']; ?>"><br>
            <video width="200" height="150" controls>
            <source src="<?php echo $row['pvid']; ?>" type="video/mp4">Your browser does not support the video tag.</video>

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
