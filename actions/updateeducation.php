<?php 	
include'../include/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$id = $_POST['id'];
	$edutitle = $_POST['edutitle'];
	$edustartdate = $_POST['edustartdate'];
	$eduenddate = $_POST['eduenddate'];
	$edudescription = $_POST['edudescription'];

	$updateedu = mysqli_query($connect,"UPDATE `education` SET `edutitle` = '{$edutitle}',
		`edustartdate` = '{$edustartdate}',`eduenddate` = '{$eduenddate}',
		 `edudescription` = '{$edudescription}' WHERE `id` = '{$id}'");

if($updateedu){
	header('Refresh:2; url=/admin/education.php');
}
else{
	echo "ERROR!";
	header('Refresh:3; url=/admin/education.php');
}
}

 ?>