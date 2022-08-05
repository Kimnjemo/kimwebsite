<?php

session_start();


include("connect.php");







$regno=$_POST["regno"];
$password=$_POST["password"];
$std=$_POST["stds"];



$sql="select *from user where regno='$regno' and password='$password' and standard='$std'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$sq="select *from user where STANDARD='JUDGE'";
	$resultgroup=mysqli_query($conn,$sq);
if(mysqli_num_rows($resultgroup)>0){
	$groups=mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);
	$_SESSION['groups']=$groups;

}

$data=mysqli_fetch_array($result);
$_SESSION['id']=$data['id'];
$_SESSION['status']=$data['status'];
$_SESSION["data"]=$data;





echo "<script>
		
		window.location='dashboard.php';
	</script>";


}else{


echo "<script>
		alert('incorect!!!!!!');
		window.location='login.php';
	</script>";

}











  ?>