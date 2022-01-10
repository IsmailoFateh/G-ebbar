<?php
include 'config.php';

$stu_id = $_POST['pid'];
$stu_date = $_POST['pdate'];
$stu_name = $_POST['pname'];
$stu_lname = $_POST['plname'];
$stu_dn = $_POST['pdn'];
$stu_ln = $_POST['pln'];
$stu_pn = $_POST['ppn'];
$stu_address = $_POST['paddress'];
$stu_address2 = $_POST['paddress2'];
$stu_pays = $_POST['ppays'];
$stu_ville = $_POST['pville'];
$stu_ville2 = $_POST['pville2'];
$stu_pro = $_POST['ppro'];
$stu_sport = $_POST['psport'];
$stu_nationality = $_POST['nationality'];
$stu_phone = $_POST['pphone'];
$stu_email = $_POST['pemail'];
$stu_oh = $_POST['poh'];
$stu_sexe = $_POST['psexe'];
$stu_statut = $_POST['pstatut'];
$stu_religion = $_POST['preligion'];
$stu_fumeur = $_POST['pfumeur'];
$stu_art = $_POST['art'];
$b =implode(',',$stu_art);
$stu_r = $_POST['pr']; 
$IMAGE = $_FILES['image'];
$img_loc = $_FILES['image']['tmp_name'];
$img_name = $_FILES ['image']['name'];
$img_des = "uploadImage/".$img_name;
move_uploaded_file($img_loc,'uploadImage/'.$img_name);
$IMAGEE = $_FILES['pdr'];
$img_locc = $_FILES['pdr']['tmp_name'];
$img_namee = $_FILES ['pdr']['name'];
$img_dess = "uploadImage/".$img_namee;
move_uploaded_file($img_locc,'uploadImage/'.$img_namee);

$VIDEO = $_FILES['video'];
 $vid_loc = $_FILES['video']['tmp_name'];
 $vid_name = $_FILES ['video']['name'];
 $vid_des = "uploadVideo/".$vid_name;
 move_uploaded_file($vid_loc,'uploadVideo/'.$vid_name);



$sql = "UPDATE person SET pdate = '{$stu_date}',pname = '{$stu_name}',plname = '{$stu_lname}',pdn = '{$stu_dn}',pln = '{$stu_ln}',ppn = '{$stu_pn}', paddress = '{$stu_address}',paddress2 = '{$stu_address2}',ppays = '{$stu_pays}',pville= '{$stu_ville}',pville2= '{$stu_ville2}',ppro = '{$stu_pro}',psport = '{$stu_sport}',part = '{$b}',ppay = '{$stu_nationality}', pphone = '{$stu_phone}',pemail = '{$stu_email}',poh = '{$stu_oh}', psexe = '{$stu_sexe}', pstatut= '{$stu_statut}', preligion= '{$stu_religion}' ,pfumeur= '{$stu_fumeur}',pr= '{$stu_r}',file_name= '{$img_des}',pdr= '{$img_dess}',pvid= '{$vid_des}' WHERE pid = {$stu_id}";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.") ;

header("Location: http://localhost/miniprojet/admin.php");

mysqli_close($conn);

?>
