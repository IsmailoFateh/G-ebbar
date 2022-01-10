<?php

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
 $stu_sport = $_POST['sport'];
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

 
$conn = mysqli_connect("localhost","root","","miniprojet") or die("Connection Failed");

$sql = "INSERT INTO person(pid,pdate,pname,plname,pdn,pln,ppn,paddress,paddress2,ppays,pville,pville2,ppro,psport,part,ppay,pphone,pemail,poh,psexe,pstatut,preligion,pfumeur,pr,file_name,pdr,pvid) VALUES ('{$stu_id}','{$stu_date}','{$stu_name}','{$stu_lname}','{$stu_dn}','{$stu_ln}','{$stu_pn}','{$stu_address}','{$stu_address2}','{$stu_pays}','{$stu_ville}','{$stu_ville2}','{$stu_pro}','{$stu_sport}','{$b}', '{$stu_nationality}' , '{$stu_phone}','{$stu_email}','{$stu_oh}','{$stu_sexe}','{$stu_statut}','{$stu_religion}','{$stu_fumeur}','{$stu_r}','{$img_des}','{$img_dess}','{$vid_des}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
//$sql="INSERT INTO `user`(`uid`, `uname`, `password`, `login`) VALUES ('$stu_id','$stu_name','$passwor','user')";



mysqli_close($conn);
header("Location: http://localhost/miniprojet/user.php");
?>
