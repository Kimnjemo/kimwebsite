<?php

session_start();
session_destroy();
$data=$_SESSION['data'];


if($_SESSION['status']==1){


	$status='<b class="text1">voted</b>';


}else{


	$status='<b class="text2">not voted</b>';
	
}

?>

<!DOCTYPE html>
<html>
 <head>
 	<title>vorte now</title>

 	<link rel="stylesheet" type="text/css" href="dash.css">
 </head>
 <body>

 	<div class="head">
 			<h1>WELLCOME TO VOTE</h1>


 	</div>

 <div class="container">
			 
<div class="row">
	

<div class="left">
			<!--<div class="im" >
				

				
			</div>--->
			<?php 

	if(isset($_SESSION['groups'])){

     $groups=$_SESSION['groups'];
     for($i=0; $i<count($groups); $i++){

?>

	<div class="inf">
				
				<p  class="candidate">
     			<img src="../kim/v.png" alt="image1">

					<h4>&nbsp &nbsp &nbsp &nbsp &nbspCANDIDATE NAME:<?php echo $groups[$i]['FULLNAME']; ?></h4>


				<h4>&nbsp &nbsp &nbsp &nbsp &nbsp CANDIDATE REG NO:<?php echo $groups[$i]['REGNO']; ?></h4>

				<h4>&nbsp &nbsp &nbsp &nbsp &nbsp POSITION:</h4>
				</p>


							<form action="" method="post">

				<input type="hidden"  name="groupid" value="<?php echo $groups[$i]['id']; ?>" >
				
				<input type="hidden" name="groupvotes" value="<?php echo $groups[$i]["VOTES"]; ?>">







<?php

if ($_SESSION['status']==1) {

	?>

<button class="btn1" type="submit">VOTED</button>


	<?php
}else{
?>

<button class="btn3"  type="submit">VOTE</button>

<?php
}
?>


	<hr>
			</div >










			</form>

			<br><br><br><br><br><br><br><br><br>
		
			<br><br><br><br><br>
			<br><br>


<?php

    

     	
     }
     }


			 ?>



		


		
		</div>

		<div class="right">
				 <a href="LOGIN.PHP"><button class="bk">BACK</button></a>
			 <a href="logot.php"><button class="LG">LOGOUT</button></a>

			 <div class="vt">
			 	<strong><h4>STUDENT NAME:<?php echo $data['FULLNAME'] ;  ?></h4></strong>
			 	
			 	<strong><h4>STUDENT REG NO:<?php echo $data['REGNO'] ;  ?></h4></strong>
			 	
				<strong><h4>MOBILE NUMBER:	<?php echo $data['PNUMBER'] ;  ?></h4></strong>
			
				<strong><h4>STATUS: <?php echo $status ;  ?></h4></strong>
			 	

			 </div>
			



		</div>


</div>
		

 </div>
 
 </body>
 </html>



