<?php 	
include '../include/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$title = $_POST['title'];
$startdate = $_POST['startdate'];
$enddate = $_POST['endtdate'];
$description = $_POST['description'];

$ex = mysqli_query(
$connect,
"INSERT INTO `experience`
(`id`,`title`,`startdate`,`enddate`,`description`)
VAlUES (NULL,'{$title}','{$startdate}','{$enddate}','{$description}')");


if($connect){
    header('Refresh:2; url=/admin/experience.php');
}
else{
    echo"ERROR!";
    header('Refresh:3; url=/admin/experience.php');
    
}
}



 ?>




