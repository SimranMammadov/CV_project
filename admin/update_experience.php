<?php 	
include '../include/db.php';
$id = $_GET['id'];
$experience = mysqli_query($connect, "SELECT * FROM `experience` WHERE `id` = $id");
$rows = mysqli_num_rows($experience);
$arr = mysqli_fetch_array($experience);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/../menu.css">
	<title>UPDATE_EXPERIENCE</title>
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
		<form action="/actions/updateexperience.php" method="post">
			<input type="hidden" name="id" value="<?=$arr['id']?>">
			<input type="text" name="title" placeholder="Title" value="<?=$arr['title']?>"><br><br>
			<input type="date" name="startdate" placeholder="Startdate" value="<?=$arr['startdate']?>"><br><br>
			<input type="date" name="enddate" placeholder="Endtdate" value="<?=$arr['enddate']?>"><br><br>
			<textarea  name="description" placeholder="Description"><?=$arr['description']?></textarea><br>
			<button name="send">Update</button>
		</form>

		
</div>


</body>
</html>