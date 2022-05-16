<?php 	
include '../include/db.php';
$id = 1;
$smselect = mysqli_query($connect,"SELECT * FROM `sosials` WHERE `id` = $id");
$smrows = mysqli_num_rows($smselect);
$smarr = mysqli_fetch_array($smselect);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/../menu.css">
	<title>Sosial_Media</title>
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
				<form action="/actions/updatesmlink.php" method="post">
					<input type="text" name="twitter" placeholder="Twitter" value="<?php echo 
					$smarr['twitter'] ?>"><br><br>
					<input type="text" name="facebook" placeholder="Facebook"
				    value="<?php echo $smarr['facebook'] ?>"><br><br>
					<input type="text" name="instagram" placeholder="Instagram"
					value="<?php echo $smarr['instagram'] ?>"> <br><br>
					<input type="text" name="github" placeholder="GitHub"
					value="<?php echo $smarr['github'] ?>"><br><br>
					<button value="update">Update</button>
				</form>

				</div>




	</body>
	</html>

