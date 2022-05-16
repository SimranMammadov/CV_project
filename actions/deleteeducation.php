<?php 	
include '../include/db.php';
$id = $_GET['id'];
$deleteedu = mysqli_query($connect,"DELETE FROM `education` WHERE `id` = $id");

if($deleteedu){
	header('Refresh:2; url=/admin/education.php');
}
else{
echo"ERROR!";
header('Refresh:2; url=/admin/education.php');
}



 ?>

