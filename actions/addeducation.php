<?php 	
include '../include/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$edutitle = $_POST['edutitle'];
$edustartdate = $_POST['edustartdate'];
$eduenddate = $_POST['eduenddate'];
$edudescription = $_POST['edudescription'];

$eduadd = mysqli_query(
$connect,
"INSERT INTO `education`(`id`,`edutitle`,`edustartdate`,`eduenddate`,`edudescription`)
VALUES (NULL, '{$edutitle}','{$edustartdate}','{$eduenddate}','{$edudescription}')"
);

if($eduadd){
    header('Refresh:2; url=/admin/education.php');
}
else{
    echo "ERROR!";
    header('Refresh:3; url=/admin/education.php');
}

}
 ?>




