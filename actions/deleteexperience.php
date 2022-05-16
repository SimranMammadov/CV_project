<?php 	
include '../include/db.php';
$id = $_GET['id'];
$delete = mysqli_query(
	$connect,
	"DELETE FROM `experience` WHERE `id` = $id");

if($delete){
	header('Refresh:2; url=/admin/experience.php');
}
else{
	echo "ERROR!";
	header('Refresh:3; url=/admin/experience.php');
	
}










 ?>