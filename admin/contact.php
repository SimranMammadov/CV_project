<?php
include '../include/db.php';
$id = 1;
$contact = mysqli_query($connect,"SELECT * FROM `contact` WHERE `id` = $id" );
$contactrow = mysqli_num_rows($contact);
$contactarr = mysqli_fetch_array($contact);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/../menu.css">
	<title>Contact</title>
</head>
<body>
	<div class="menu">
		<ul>
			<li><a href="/admin/main.php">Home</a></li>
			<li><a href="/admin/experience.php">Experience</a></li>
			<li><a href="/admin/education.php">Education</a></li>
			<li><a href="/admin/contact.php">Contact</a></li>
			<li><a href="/admin/smlinks.php">Sosial Media</a></li>
		</ul>
	</div>

	<div class="container">
		<form action="/actions/updatecontact.php" method="post">

 		<input type="address" name="address" placeholder="Address" value="<?php echo $contactarr['address'] ?>">
 		<br><br>
 		<input type="tel" name="phone" placeholder="Phone" value="<?php echo $contactarr['phone'] ?>"><br><br>
 		<input type="email" name="email" placeholder="E-mail" value="<?php echo $contactarr['email'] ?>"><br><br>
 		<button value="update">Update</button>

 	    </form>
		

          
	</div>
</body>
</html>