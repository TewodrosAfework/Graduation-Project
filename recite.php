<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Movies - Cinema Theater Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/alertbox.css"/>
    <script src="script/alertbox3.js"></script>
	<style type="text/css">

</style>
	
</head>
<body>
<div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.gif" alt=""></a>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="selected">
					<a href="movies.php">Movies</a>
					<ul>
						<li class="selected">
							<a href="#">Now Showing</a>
						</li>
						<li>
							<a href="#">Comming Soon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="ticket-info.php">Ticket Info</a>
				</li>
				<li>
					<a href="rentals.php">Rentals</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="moviess">
     
	 


<center>Insert Your Back Recite</center>
<center>Recommended file type : JPG</center>
<form method="POST" action="" enctype="multipart/form-data">
<br />
	<div style="zoom: 150%; border:double 2px; width: 200px; margin-left:200px;margin-right: auto;">
		<center>
			<img src="Recite/Desert.jpg" width="150" height="150"><br>
			
			<input type="file" required="required" name="myFile" class="inputFile">
			
			<input type="hidden" name="profileID" value="<?php echo $id; ?>"/>
			<p style="margin-left:-128px;  margin-top:10px;"><input type="submit" name="changeProfile" class="probtn" value=" Upload "/></p>
		</center>
	</div>
<br />
	
	
	 
</form>
<br />

<?php
$cn=mysql_connect('localhost','root','')or
 die('Unable to connect to server');
 mysql_select_db('lemreservation',$cn) or
   die(mysql_error($cn));

if(isset($_POST['changeProfile'])){
//echo $_POST['myFile'];
//$id = $_POST['profileID'];
//$filename = md5($id);
$name = $_FILES["myFile"]["name"];
$type = $_FILES["myFile"]["type"];
$size = $_FILES["myFile"]["size"];
$tmp =  $_FILES["myFile"]["tmp_name"];
$err =  $_FILES["myFile"]["error"];

if($err > 0)
	die("Error uploading file! Code: $err.");
else
{

	if($size > 1000000 || $size < 7000) //conditions for the file
	{
		echo "<script>Alert.render('Upload Failed!<br/>Image size is 7Kb to 1Mb.')</script>";
	}else{
	if($type == "image/gif"){
		$ext = "gif";
		$profile = $name;
		
		$result = mysql_query('SELECT MIN(id) AS min, MAX(id) AS max FROM seat') or exit(mysql_error()); 
        $row = mysql_fetch_assoc($result);
        $last_id=$row['max'];
		
		
		$results= mysql_query('SELECT MIN(ID) AS min, MAX(ID) AS max FROM ticket') or exit(mysql_error()); 
        $rows= mysql_fetch_assoc($results);
        $last_ids=$rows['max'];
        $query=mysql_query("SELECT * FROM `ticket` where ID='$last_ids'");
     	$rowss=mysql_fetch_array($query);
        $price=$rowss['price'];
        $username=$rowss['username'];
		
		$ticket=$rowss['Ticket_Number'];
		mysql_query("update seat set recite='$profile',price='$price',username='$username',payment='notpaid',ticket_num='$ticket' where id= '$last_id' ")or die(mysql_error());
		
		move_uploaded_file($tmp, "Recite/".$profile);
		
		echo "<script>Alert.render('your reservation will be pend and your payment status is not paid until the administration approve it')</script>";
		echo "
		<script>
			setInterval(
				function(){	window.location='userrecite.php' },9000
			);
		</script>";
	}
	elseif($type == "image/png"){
		$ext = "png";
		$profile = $name;
		
		$result = mysql_query('SELECT MIN(id) AS min, MAX(id) AS max FROM seat') or exit(mysql_error()); 
        $row = mysql_fetch_assoc($result);
        $last_id=$row['max'];	
		
		$results= mysql_query('SELECT MIN(ID) AS min, MAX(ID) AS max FROM ticket') or exit(mysql_error()); 
        $rows= mysql_fetch_assoc($results);
        $last_ids=$rows['max'];
        $query=mysql_query("SELECT * FROM `ticket` where ID='$last_ids'");
     	$rowss=mysql_fetch_array($query);
        $price=$rowss['price'];
        $username=$rowss['username'];
		
	    $ticket=$rowss['Ticket_Number'];
		mysql_query("update seat set recite='$profile',price='$price',username='$username',payment='notpaid',ticket_num='$ticket' where id= '$last_id' ")or die(mysql_error());
		
		move_uploaded_file($tmp, "Recite/".$profile);
		
		echo "<script>Alert.render('your reservation will be pend and your payment status is not paid until the administration approve it')</script>";
		echo "
		<script>
			setInterval(
				function(){	window.location='userrecite.php' },9000
			);
		</script>";
	}
	elseif($type == "image/jpg"){
		$ext = "jpg";
		$profile = $name;
		
		$result = mysql_query('SELECT MIN(id) AS min, MAX(id) AS max FROM seat') or exit(mysql_error()); 
        $row = mysql_fetch_assoc($result);
        $last_id=$row['max'];
		
		$results= mysql_query('SELECT MIN(ID) AS min, MAX(ID) AS max FROM ticket') or exit(mysql_error()); 
        $rows= mysql_fetch_assoc($results);
        $last_ids=$rows['max'];
		$query=mysql_query("SELECT * FROM `ticket` where ID='$last_ids'");
     	$rowss=mysql_fetch_array($query);
        $price=$rowss['price'];
        $username=$rowss['username'];
	    $ticket=$rowss['Ticket_Number'];
		
		mysql_query("update seat set recite='$profile',price='$price',username='$username',payment='notpaid',ticket_num='$ticket' where id= '$last_id' ")or die(mysql_error());
		move_uploaded_file($tmp, "Recite/".$profile);
		
		echo "<script>Alert.render('your reservation will be pend and your payment status is not paid until the administration approve it')</script>";
		echo "
		<script>
			setInterval(
				function(){	window.location='userrecite.php' },9000
			);
		</script>";
	}
	elseif($type == "image/jpeg"){
		$ext = "jpg";
		$profile = $name;
		
		$result = mysql_query('SELECT MIN(id) AS min, MAX(id) AS max FROM seat') or exit(mysql_error()); 
        $row = mysql_fetch_assoc($result);
        $last_id=$row['max'];
		
        $results= mysql_query('SELECT MIN(ID) AS min, MAX(ID) AS max FROM ticket') or exit(mysql_error()); 
        $rows= mysql_fetch_assoc($results);
        $last_ids=$rows['max'];
        $query=mysql_query("SELECT * FROM `ticket` where ID='$last_ids'");
     	$rowss=mysql_fetch_array($query);
        $price=$rowss['price'];
        $username=$rowss['username'];
		$ticket=$rowss['Ticket_Number'];
		mysql_query("update seat set recite='$profile',price='$price',username='$username',payment='notpaid',ticket_num='$ticket' where id= '$last_id' ")or die(mysql_error());
		//mysql_query('INSERT INTO image(profile)VALUES("' . $profile . '")');
		move_uploaded_file($tmp, "Recite/".$profile);
		
		echo "<script>Alert.render('your reservation will be pend and your payment status is not paid until the administration approve it')</script>";
		
		echo "
		<script>
			setInterval(
				function(){	window.location='userrecite.php' },9000
			);
		</script>";
	}
	else{
		echo "<script>Alert('Upload Failed!<br/>Recommend File Type : JPG, JPEG, GIF, PNG')</script>";
	}
		}
	}
}	
?>

	
		
	</div>
	<div id="footer">
		<div>
			<div>
				<span>Quick Links</span>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="ticket-info.php">Ticket Info</a>
					</li>
					<li>
						<a href="#">Location</a>
					</li>
					<li>
						<a href="movies.php">Now Showing</a>
					</li>
					<li>
						<a href="rentals.php">Rentals</a>
					</li>
					<li>
						<a href="about.php">Contact</a>
					</li>
					<li>
						<a href="movies.php">Comming Soon</a>
					</li>
					<li>
						<a href="about.php">The Company</a>
					</li>
					<li>
						<a href="blog.php">Blog</a>
					</li>
				</ul>
			</div>
			<div class="section">
				<span>Recent Tweets</span>
				<ul>
					<li>
						<p>
							Sed id mattis tellus. Proin egestas velit vel neque placerat sed interdum neque porta.
						</p>
						<span><a href="#">- 1 day ago</a></span>
					</li>
					<li>
						<p>
							Praesent at urna ac urna congue convallis.
						</p>
						<span><a href="#">- 2 day ago</a></span>
					</li>
				</ul>
			</div>
			<div>
				<span>Sign Up For Our Mailing List</span>
				<p>
					Praesent at urna ac urna congue convallis. Maecenas sed placerat turpis. Duis in dolor ut nibh molestie faucibus.
				</p>
				<form action="index.php">
					<input type="text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Enter Email Address Here':this.value;" value="Enter Email Address Here">
					<input type="submit" value="">
				</form>
			</div>
			<p>
				&#169; 2023 Cinema Theatre
			</p>
			<div class="connect">
				<span>Stay Connected:</span> <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a> <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">google+</a>
			</div>
		</div>
	</div>
</body>
</html>