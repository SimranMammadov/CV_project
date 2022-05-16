<?php 	
include'../include/db.php';
$id = $_GET['id'];
$education = mysqli_query($connect,"SELECT * FROM `education` WHERE `id` = $id" );
$eduarr = mysqli_fetch_array($education);
?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="../menu.css">
 	<title>UPDATE_EDUCATION</title>
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
		<form action="/actions/updateeducation.php" method="post">
			<input type="hidden" name="id" value="<?php echo $eduarr['id']?>">
			<input type="text" name="edutitle" placeholder="Title" value="<?php echo $eduarr['edutitle']?>"><br><br>
			<input type="date" name="edustartdate" value="<?php echo $eduarr['edustartdate']?>"><br><br>
			<input type="date" name="eduenddate" value="<?php echo $eduarr['eduenddate']?>"><br><br>
			<textarea name="edudescription" placeholder="Description"><?php echo $eduarr['edudescription']?></textarea><br><br>
			<button value="send">Update</button>
			</form>
	</div>
 
 </body>
 </html>