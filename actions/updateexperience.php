<?php 	
include '../include/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$id = $_POST['id'];
$title = $_POST['title'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$description = $_POST['description'];


$update = mysqli_query($connect,"UPDATE `experience` SET `title` = '$title',`startdate` = '$startdate',
	`enddate` = '$enddate',`description` = '$description' WHERE
 `id` = $id ");



if($update){
header('Refresh:2; url=/admin/experience.php');

}
else{
	"ERROR!";
	header('Refresh:3; url=/admin/experience.php');
}
}

 ?>
