<?php 	
include '../include/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$twitter = $_POST['twitter'];
	$facebook = $_POST['facebook'];
	$instagram = $_POST['instagram'];
	$github = $_POST['github'];


$upsm = mysqli_query($connect, "UPDATE `sosials` SET `twitter` = '{$twitter}', `facebook` = '{$facebook}',
`instagram` = '{$instagram}', `github` = '{$github}' WHERE `id` = 1");

if($upsm){
	header('Refresh:2; url=/admin/smlinks.php');
}
else{
	echo"ERROR!";
	header('Refresh:2; url=/admin/smlinks.php');
}


}
 ?>