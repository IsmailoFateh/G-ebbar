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








<div id="page-wrapper"  >
			<div class="main-page" >
			<div class="col_1">
			<div class="col-md-4 span_8">
				<div class="activity_box">
					<h2>USERS</h2>
					<div class="scrollbar" id="style-1">
                        
					<?php   include 'config.php';
                     $sqlmember ="SELECT * FROM user WHERE uid!=101 ";
			       $retrieve = mysqli_query($conn,$sqlmember);
				                    $count=0;
                     while($found = mysqli_fetch_array($retrieve))
	                 {
                      
                       
    
                       $ids=$found['uid'];
                       $firstname=$found['uname'];
                       $online=$found['online'];
			           $count=$count+1;
                       $get_time=$found['Time'];
                       $time=time();
                       $pass=$found['password'];
			           if($online=='online'){
						                    $dis="<img src='dot.png' height='15px' width='15px' alt=''>";
                                           }else
                                           {
                                             $dis="<img src='reddot.png' height='15px' width='15px' alt=''>";											
                                           }
				       $sql ="SELECT file_name FROM person  WHERE pid='$ids'";
                                                $rget = mysqli_query($conn,$sql);
												$num=mysqli_num_rows($rget);
                                                if($num!=0){
												                   while($found = mysqli_fetch_array($rget))
	                                                                {
                                                                       $profile= $found['file_name'];
		                                                            }
																	$pic="<img src='$profile' height='50px' width='50px' alt=''>";	   
												             }
												        else{
												           	$pic="<img src='homme.jpg' height='50px' width='50px' alt=''>";	   
														     	   $profile='homme.jpg';
												             }
									
				                
		                   if($online=='online'){
						                    $dis="<img src='dot.png' height='15px' width='15px' alt=''> Online";
                                           }else
                                           {
                                             $dis="<img src='reddot.png' height='15px' width='15px' alt=''> Offline";											
                                           }
				   

                       echo"<div class='activity-box'>
							<div class='col-xs-3 activity-img'>						
                                 <a class='example-image-link' href='$profile' data-lightbox='example-1'>$pic</a></div>
							<div class='col-xs-7 activity-desc'>
								<h5><a href='#'>$firstname </a></h5>
								
							</div>
							<div class='col-xs-2 activity-desc1'><h6>$dis</h6></div>
							
						</div>";

                       }?>						
					</div>
					
				</div>
			</div>





			<div class="col-md-4 span_8">
				<div class="activity_box activity_box2">
                <script src="https%3A%2F%2Fajax.googleapis.com%2Fajax%2Flibs%2Fjquery%2F3.4.1%2Fjquery.min.js"></script>
                 <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
					
					<textarea name="message"  style="width: 180px ;position:relative;left:400px;bottom:150px;"></textarea>
                    <br>
                    <input type="submit" class="btn" name="valider" value="Send" style="width: 150px ;position:relative;left:400px;bottom:150px;">
				
			     </form>
                 <?php
                include 'config.php';

                
                if (isset($_POST['valider'])){
                                              $user=$_SESSION["username"];
                                              $messagee=($_POST['message']);
                                              $sql14="INSERT INTO `chat`( `user`, `message`) VALUES ('$user','$messagee')";
                                              $res = mysqli_query($conn, $sql14)or die("Query Unsuccessful.");
                                              
                                             }
                
                ?>
		   </div>
           <section id="messages"> 
           <?php
                include 'config.php';
                 
                 $sql16="SELECT * FROM `chat` ";
                 $reee = mysqli_query($conn, $sql16)or die("Query Unsuccessful.");
                 while($message = mysqli_fetch_assoc($reee)){
                        ?>
                        <div clase="message"style="position:relative;left:400px;bottom:500px;">
                        
                        <h4><?= $message['user'];  ?>:<?= $message['message'];  ?></h4>
                        
                        
                        </div>
                         <?php
                }                        
                ?>
               </section>
             </div>  
                 <div style="position:relative;left:400px;bottom:650px;">
			      <h1>Global Chat</h1>
                 </div>
		</div>

 <script>
     setInterval('load_messages()',1000);
     function load_messages(){
         $('#messages');
     }
 </script>




		
	




 
</body>
</html>