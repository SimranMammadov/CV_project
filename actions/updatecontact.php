<?php 	
include '../include/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$address = $_POST['address'];
 	$phone = $_POST['phone'];
 	$email = $_POST['email'];

 	$contactup = mysqli_query($connect,"UPDATE `contact` SET `address` = '$address', `phone` = '$phone',
 		`email` = '$email' WHERE `id` = 1");

if($contactup){
	header('Refresh:2; url=/admin/contact.php');
}
else{
	echo"ERROR!";
	header('Refresh:3; url=/admin/contact.php');
}
}


 ?>
