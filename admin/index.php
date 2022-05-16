<?php include '../include/db.php'; ?>
<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Log In</title>
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>
		<body style="background: #2E86C1;">
			<div class="logbox">
				<div class="img5">
				<img  src="https://previews.123rf.com/images/vitechek/vitechek1907/vitechek190700199/126786791-user-login-or-authenticate-icon-human-person-symbol-vector.jpg"
				width="100" 
				height="110">
			</div><br><br><br>
		<form action="" method="post">
			<input type="text" name="username" placeholder="Username" size="23" ><br><br>
			<input type="password" name="password" placeholder="*******" size="23"><br><br><br>
			<div class="login">
			<input type="submit" value="Log In" name="login">
			</div><br><br>
			
</div>
</form>

<?php 	
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($connect,
	"SELECT * FROM `admin` WHERE `username` = '{$username}' and `password` = '{$password}'");

$row = mysqli_num_rows($login);

if($row > 0){
	$array = mysqli_fetch_array($login);
	$_SESSION['tesdiq'] = true;
	$_SESSION['id'] = $array['id'];

	if($_SESSION['tesdiq']){
		echo "You are in system.";
		header('Refresh:2; url=/admin/main.php');
	}
	else{
		echo"Username or Passwword is wrong!";
	}
}
}


 ?>
		</body>
		</html>		