<?php include '../include/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/../menu.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Education</title>
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
		<form action="/actions/addeducation.php" method="post">
			<input type="text" name="edutitle" placeholder="Title"><br><br>
			<input type="date" name="edustartdate" placeholder="Startdate"><br><br>
			<input type="date" name="eduenddate" placeholder="Endtdate"><br><br>
			<textarea  name="edudescription" placeholder="Description"></textarea><br>
			<button name="send">Send</button>
		</form>
<table>
	<tr>
		<th class="table">ID</th>
		<th class="table">Title</th>
		<th class="table">Delete</th>
		<th class="table">Update</th>
	</tr>
	<?php 
		$select = mysqli_query($connect,"SELECT * FROM `education`");

		while($selectarr = mysqli_fetch_array($select)){
			
			echo "
			
				<tr>
					<td>".$selectarr['id']."</td>
					<td>".$selectarr['edutitle']."</td>
					<td><a href='/actions/deleteeducation.php?id=".$selectarr['id']."'><i class='fa fa-trash'></i></a></td>
					<td><a href='/admin/update_education.php?id=".$selectarr['id']."'><i class='material-icons'>&#xe881;</i></a></td>
				</tr>
		

			";
		}



	?>

</table>
	
		
	</div>
</body>
</html>