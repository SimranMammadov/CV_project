<?php 	
include '../include/db.php';
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$cont = mysqli_query($connect,
"INSERT INTO `contact`(`id`,`address`,`phone`,`email`)
VALUES(NULL,'{$address}','{$phone}','{$email}')" );

if()
 ?>