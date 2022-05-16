<?php 	
include 'include/db.php';
$indexcsel = mysqli_query($connect,"SELECT * FROM `contact`");
$indexcarr = mysqli_fetch_array($indexcsel);
$indexedsel = mysqli_query($connect,"SELECT * FROM `education`");
$indexexsel = mysqli_query($connect,"SELECT * FROM `experience`");
$indexsmsel = mysqli_query($connect,"SELECT * FROM `sosials`");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>makeCV.com</title>
</head>
<body style="background: #F2F3F4;">
	<div class="header">
		<div class="headername">
			<label>RiHANNA</label>
		</div>
		<?php 	while($sm = mysqli_fetch_array($indexsmsel)): ?>
				<div class="headersosial">
					<a href="<?php echo $sm['twitter']?>">
						
					<img src="https://cdn-icons-png.flaticon.com/512/81/81609.png"
						 width="30" height="30">
							</a>	
					<a href="<?php echo $sm['facebook']?>">
   					<img src="http://neofm.es/wp-content/uploads/2019/03/facebook-logo-rond-png-4.png"
			             width="30" height="30">
			         	</a>
					<a href="<?php echo $sm['instagram']?>">
					<img src="https://icons.veryicon.com/png/o/miscellaneous/unicons/instagram-52.png"
						 width="30" height="30">
							</a>
					<a href="<?php echo $sm['github']?>">
					<img src="https://icon-library.com/images/github-icon-vector/github-icon-vector-27.jpg"
						 width="30" height="30">
							</a>
				</div>
			<?php 	endwhile; ?>
		</div>


	<div class="box ">
		<div class="imgbox"></div>
			<div class="img">
				<img src="https://s3.vcdn.biz/static/f/2314652691/image.jpg" width="200" height="200">
			</div>
					<div class="namepro">
						<label style="font-size: 45px; ">RiHANNA</label><br><br>
						<label style="font-size: 20px; font-family: strong;">PHP Programmer & Web Developer</label><br><br>
						<a href="https://demo.templateflip.com/right-resume/right-resume.pdf"><button style=
						"color: #626567; background-color: #E5E7E9; font-size: 25px; border-radius: 20px;
						border: 2px solid #E5E7E9;" name="download";>Download CV</button></a>
						<button style="color: #626567; background-color: #2ECC71; font-size: 25px; 
						border-radius: 20px;
						border: 2px solid #2ECC71;" name="download";>Here Me</button>
					</div>
		
		<div class="about"></div>
					<div class="aboutme">
							<label style="font-size:45px; font-family:arial;">About Me</label>
							<p style="font-size:20px">Hello! Robyn Rihanna Fenty (born February 20, 1988) is a Barbadian singer, actress, fashion designer, and businesswoman. Born in Saint Michael and raised in Bridgetown, Barbados, Rihanna was discovered by American record producer Evan Rogers who invited her to the United States to record demo tapes.</p>
					</div><br>
										<div class="aepa">
												<p style="font-size:20px">Age</p>
												<p style="font-size:20px">Phone</p>
												<p style="font-size:20px">E-mail</p>
												<p style="font-size:20px">Address</p>
										</div>
		<div class="aepainfo">
			<p style="font-size:20px">33</p>
			<p style="font-size:20px">+0718-111-0011</p>
			<p style="font-size:20px">badgirlriri@icloud.com</p>
			<p style="font-size:20px">CA, Los Angeles Bel Air</p>
		</div><br><br><br>

		<div class="line1"></div>
		<div class="proskills">
			<label style="font-size:45px; font-family:arial;">Professional Skills</label>
		</div>
		<div style="font-size:20px" class="html">HTML</div>
		<div style="font-size:20px" class="css">CSS</div>
		<div style="font-size:20px" class="javascript">JavaScript</div>
		<div style="font-size:20px" class="adobephotoshop">Adobe Photoshop</div>
		<div style="font-size:20px" class="sketch">Sketch</div>
		<div style="font-size:20px" class="adobexd">Adobe XD</div><br><br><br>

		<div class="line1"></div>
<div class="workexperience">

			<label style="font-size:45px; font-family:arial;">Work Experience</label>
		</div><br><br>

<?php 	while ($ex = mysqli_fetch_array($indexexsel)): ?>
		<div class="whead1"><br><br>
			<label style="font-size:25px"><?php echo $ex['title'] ?></label>
		    <p style="color:grey;"><?php echo $ex['startdate'] . "||" . $ex['enddate'] ?></p>
		    <p style="font-size:20px;"><?php echo $ex['description'] ?></p></div>	
		    
		    <?php 	endwhile; ?>	 

<?php 	while ($ex = mysqli_fetch_array($indexexsel)): ?>
		<div class="whead2"><br><br>
			<label style="font-size:25px"><?php echo $ex['title'] ?></label>
		    <p style="color:grey;"><?php echo $ex['startdate'] . "||" . $ex['enddate'] ?></p>
		    <p style="font-size:20px;"><?php echo $ex['description'] ?></p></div>	
		    
		    <?php 	endwhile; ?>	 


	<?php 	while ($ex = mysqli_fetch_array($indexexsel)): ?>
		<div class="whead3"><br><br>
			<label style="font-size:25px"><?php echo $ex['title'] ?></label>
		    <p style="color:grey;"><?php echo $ex['startdate'] . "||" . $ex['enddate'] ?></p>
		    <p style="font-size:20px;"><?php echo $ex['description'] ?></p></div>	
		    
		    <?php 	endwhile; ?><br><br>	 
<div class="line1"></div>
<div class="education">

			<label style="font-size:45px; font-family:arial;">Education</label>
		</div><br><br>

		<?php while($ed = mysqli_fetch_array($indexedsel)):?>

		<div class="ehead1"><br><br>
			<label style="font-size:25px"><?php echo $ed['edutitle'] ?>
			</label>
		    <p style="color:grey;"><?php echo $ed['edustartdate'] . "||" .  $ed['eduenddate'] ?></p>
		    <p style="font-size:20px;"><?php echo $ed['edudescription'] ?></p></div>
		<?php endwhile; ?>	
		    	    
<?php while($ed = mysqli_fetch_array($indexedsel)): ?>
<div class="ehead2"><br><br>
	<label style="font-size:25px"><?php echo $ed['edutitle'] ?></label>
		    <p style="color:grey;"><?php echo $ed['edustartdate'] . "||" .  $ed['eduenddate'] ?></p>
		    <p style="font-size:20px;"><?php echo $ed['edudescription'] ?></p>
	
</div>
<?php 	endwhile; ?>

	<?php while($ed = mysqli_fetch_array($indexedsel)): ?>
<div class="ehead2"><br><br>
	<label style="font-size:25px"><?php echo $ed['edutitle'] ?></label>
		    <p style="color:grey;"><?php echo $ed['edustartdate'] . "||" .  $ed['eduenddate'] ?></p>
		    <p style="font-size:20px;"><?php echo $ed['edudescription'] ?></p>
	
</div>
<?php 	endwhile; ?>
<div class="contact">
		<label style="font-size:45px; font-family:arial;">Contact</label>
		</div>
</div>
<div class="yourname" style="color: grey; font-size: 20px; text-align: left;">Your Name</div>

<div class="youremail" style="color: grey; font-size: 20px; text-align: left;">Your E-mail</div>

<div class="yourmessage" style="color: grey; font-size: 20px; text-align: left;">Your Message</div>

<div class="send" style="color: white; font-size: 20px; text-align: center;">Send</div>

										<div class="ape">
												<p style="font-size:20px">Address</p>
												<p style="font-size:20px"><?php echo $indexcarr['address'];?></p>
												<p style="font-size:20px">Phone</p>
												<p style="font-size:20px"><?php echo $indexcarr['phone'];?></p>
												<p style="font-size:20px">E-mail</p>
												<p style="font-size:20px"><?php echo $indexcarr['email'];?></p>
	
										</div>

</div>

<div class="down">

<label style="font-size: 45px; text-align: center; "> RiHANNA</label><br><br>

				<div class="headersosialdown">
					<a href="https://twitter.com/i/flow/login">
					<img src="https://cdn-icons-png.flaticon.com/512/81/81609.png"
						 width="30" height="30"></a>	
					<a href="https://ru-ru.facebook.com/">
					<img src="http://neofm.es/wp-content/uploads/2019/03/facebook-logo-rond-png-4.png"
			             width="30" height="30"></a>
					<a href="https://www.instagram.com/">
					<img src="https://icons.veryicon.com/png/o/miscellaneous/unicons/instagram-52.png"
						 width="30" height="30"></a>
					<a href="https://github.com/login">
					<img src="https://icon-library.com/images/github-icon-vector/github-icon-vector-27.jpg"
						 width="30" height="30"></a>
				</div><br><br>

<div class="rightresume">
	<p>© Right Resume. All rights reserved.</p>
	<div class="designed">
	<p style="text-align: left; font-size:40px; font-family:algerian" >Designed - by Simran</p>
	</div>
</div>
	</div>
</body>
</html>