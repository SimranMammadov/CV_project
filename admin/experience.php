<?php include '../include/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/../menu.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Experience</title>
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
		<form action="/actions/addexperience.php" method="post">
			<input type="text" name="title" placeholder="Title"><br><br>
			<input type="date" name="startdate" placeholder="Startdate"><br><br>
			<input type="date" name="endtdate" placeholder="Endtdate"><br><br>
			<textarea  name="description" placeholder="Description"></textarea><br>
			<button name="send">Send</button>
		</form>

		<table >
			<tr>
				<th class="table">ID</th>
				<th class="table">Title</th>
				<th class="table">Delete</th>
				<th class="table">Update</th>
			</tr>
			<?php
				$tecrubeler = mysqli_query($connect, "SELECT * FROM `experience`");
				while($tecrube = mysqli_fetch_array($tecrubeler)) {
					echo "
						<tr>
							<td>".$tecrube['id']."</td>
							<td>".$tecrube['title']."</td>
							<td><a href='/actions/deleteexperience.php?id=".$tecrube['id']."'><i class='fa fa-trash'></i></a></td>
							<td><a href='update_experience.php?id=".$tecrube['id']."'><i class='material-icons'>&#xe881;</i></a></td>
						</tr>
					";
				}


			?>
		</table>
		
	</div>
</body>
</html>