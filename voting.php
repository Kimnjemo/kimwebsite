<?php 
session_start();
include('connect.php');

$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];


$updatevotes=mysqli_query($conn,'update user set votes="$totalvotes" where id="gid"');



$updatestatus=mysqli_query($conn,'update user set status=1 where id="uid"');

if($updatevotes and $updatestatus){
	$getgroups=mysqli_query($conn, 'select FULLNAME,REGNO,VOTES,id from user where standard="JUDGE"' );
	$groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
	$_SESSION['groups']=$groups;
	$_SESSION['status']=1;



echo "<script>alert('voting succesful !!!!!'');
	window.location='dashboard.php';
</script>";


}else

{

echo "<script>
alert('TECHNICAL ERROR');
	window.location='dashboard.php';
</script>";




}

?>