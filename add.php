<!DOCTYPE html>
<html lang="en"  dir="ltr">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" >
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<head>
    <title>Create Account</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <span><a href="add_pays_nationalité.php">Nationality</a></span>
    </li>
    <li>
        <span><a href="add_sport.php">Sport</a></span>
    </li>
    <li>
        <span> 
        <select class="selector" id="meme">
                <option class="option" disabled>Account Settings</option>
                <option class="option"> <a href="">Edit Account</a></option>
                <option class="option1" value="delete-inline.php"> Remove Account</a></option>
              
            </select>
            
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
     </script>

<div id="main-content">
    
    <form class="post-form" action="savedata.php" method="post" enctype="multipart/form-data">
        <h2>Insert Your Information:</h2>
        <div class="form-group">
            <label style="font-family: sans-serif;">N°Ordre :</label><br>
            <input type="text" name="pid" placeholder="N°Ordre" required/>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Registration Date  :</label><br>
            <input type="date" name="pdate" required/>
        </div>
        <div class="form-group">
            <label style="font-family: sans-serif;">Name :</label><br>
            <input type="text" name="pname" placeholder="Nom" required/>
        </div>
        <div class="form-group">
            <label style="font-family: sans-serif;">Prename :</label><br>
            <input type="text" name="plname" placeholder="Prénom" required/>
        </div>
        
        <div class="form-group">
            
            <label for="profileImage" style="font-family: sans-serif;">Photo :</label><br>
            <img height="100px" width="150px" src="placeholder.png" onclick="triggerClick()" id="profileDisplay"/>
            <input type="file" id="profileImage" onchange="displayImage(this)" name="image" style="display: none;" required/>
            
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Date of Birth :</label><br>
            <input type="date" name="pdn" required/>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Nationality :</label><br>
            <select name="nationality" required>
                <option value="" selected disabled>Select...</option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM personnationality";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['nid']; ?>"><?php echo $row['nationality']; ?> </option>

              <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="DrapImage"style="font-family: sans-serif;" >Flag :</label><br>
            <img height="100px" width="150px" src="placeholder.png" onclick="atriggerClick()" id="DrapDisplay"/>
            <input type="file" id="DrapImage" onchange="displayDrap(this)" name="pdr"  style="display: none;" required/>
            
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Place of Birth :</label><br>
            <input type="text" name="pln" placeholder="Lieu Naissance" required/>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Birth Country :</label><br>
            <input type="text" name="ppn" placeholder="Pays Naissance" required/>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Address :</label><br>
            <input type="text" name="paddress" placeholder="Address" required/>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Address2 :</label><br>
            <input type="text" name="paddress2" placeholder="Address2" required/>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Country :</label><br>
            <input type="text" name="ppays" placeholder="Pays" required/>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">City :</label><br>
            <input type="text" name="pville" placeholder="Ville" required/>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">City 2:</label><br>
            <input type="text" name="pville2" placeholder="Ville2" required/>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Job :</label><br>
            <input type="text" name="ppro" placeholder="Profession" required/>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Phone :</label><br>
            <input type="text" name="pphone" placeholder="Phone" required/>
        </div>
        <div class="form-group">
            <label style="font-family: sans-serif;">E-mail :</label><br>
            <input type="text" name="pemail" placeholder="E-mail" required/>
        </div>

        <div class="form-group">
            <label style="font-family: sans-serif;">Blood Type :</label><br>
            <input type="text" name="poh" placeholder="Groupe Sanguin" required/>
        </div>
		
		<div class="radio">
		    <label for="psexe">Gendre:</label><br>
            <input type=radio name=psexe value=masculin>Male 
			<input type=radio name=psexe value=feminin>Female
        </div>
		 <div class="radio">
		     <label for="pstatut">Statut:</label><br>
             <input type=radio name=pstatut value=marie>Married 
			 <input type=radio name=pstatut value=celibataire>Single
			 <input type=radio name=pstatut value=veuf>Widower
			 <input type=radio name=pstatut value=divorce>Divorced
		    		
        </div>

        <div class="radio">
             <label for="preligion">Religion:</label><br>
             <input type=radio name=preligion value=musulmane>Muslim
             <input type=radio name=preligion value=chrétienne>Christian
             <input type=radio name=preligion value=juive>Jewish
             <input type=radio name=preligion value=autres>Other
                    
        </div>
			
            <div class="radio">
            <label for="pfumeur">Smoker:</label><br>
            <input type=radio name=pfumeur value=oui>Yes
            <input type=radio name=pfumeur value=non>Non 
        </div>
		 
		 <div class="radio">
            <label for="part">Art Type:</label><br>
            <input type=checkbox name=art[] value=théatre>Theatre
            <input type=checkbox name=art[] value=cinéma>Cinema 
            <input type=checkbox name=art[] value=musique>Music
            <input type=checkbox name=art[] value=universelle>Universelle
            <input type=checkbox name=art[] value=arts_plastiques>Plastiques Arts
            <input type=checkbox name=art[] value=littérature>Literature  
        </div>
		 
        <div class="radio">
            <label>Sport :</label><br>
            <select name="sport" required>
                <option value="" selected disabled>Select Sport</option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM personsport";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['sid']; ?>"><?php echo $row['sname']; ?> </option>

              <?php } ?>
            </select>
        </div>


        <div class="radio">
            <label>Personality Summary :</label><br>
            <textarea name="pr" rows="10" cols="60" placeholder="Write here..."></textarea>
        </div>


        <div class="radio">
            <label >Video :</label><br>
            <input type="file"   name="video"   required/>

        </div>
        

        <input class="submit" type="submit" value="Insert"  />
    </form>

    </div>
</div>
</div>
<script src="scriptes.js"></script>
</body>
</html>
