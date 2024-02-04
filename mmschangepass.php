<?php
include("session.php");  
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Movies - Cinema Theater Website Template</title>
	<link rel="stylesheet" href="css/stylelast.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/alertbox.css"/>
    <script src="script/alertbox3.js"></script>
	<style type="text/css">
input[type=text], textarea {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 2px solid #DDDDDD;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
}

input[type=text]:focus, textarea:focus {
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
  height:30px;
  width:300px;
  font-family:"Courier New", Courier, monospace;
  font-size:20px;
  text-align:center;
  font-weight:bolder;
}
.style1 {color: rgb(255, 255, 51)}
input[type=email], textarea {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
 margin: 5px 1px 3px 0px;
  border: 2px solid #DDDDDD;
 
}

input[type=email]:focus, textarea:focus {
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
   height:30px;
  width:300px;
  font-family:"Courier New", Courier, monospace;
  font-size:20px;
  text-align:center;
  font-weight:bolder;
}
.style1 {color: rgb(255, 255, 51)}
input[type=password], textarea {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  margin: 5px 1px 3px 0px;
  border: 2px solid #DDDDDD;
 
}

input[type=password]:focus, textarea:focus {
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
  height:30px;
  width:300px;
  font-size:20px;
  text-align:center;
}
.style1 {color: rgb(255, 255, 51)}
input[type=submit], button {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  margin: 5px 1px 3px 0px;
  background-color:#0099FF;
  border: 2px solid #0066FF;
  height:35px;
  width:200px;
  font-family:Forte;
  font-size:18px;
  font-weight:bolder;
}
input[type=submit]:focus, button:focus {
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 5px solid rgba(81, 203, 238, 1);
  height:50px;
  width:300px;
  text-align:center;
  font-family:"Courier New", Courier, monospace;
   background-color: #0099FF;
}

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
				<li class="selected">
					<a href="mms.php">News</a>
				</li>
				<li>
					<a href="">Movies</a>
					<ul>
						<li>
							<a href="mmsnowshow.php">Now Showing</a>
						</li>
						<li>
							<a href="mmscoomming.php">Comming Soon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="video1.php">Video</a>
				</li>
				<li>
					<a href="comment.php">Comment</a>
				</li>
				<li>
					<a href="mmschangepass.php">Change Password</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div id="body" class="movies">
<p style="font-family: Berlin Sans FB Demi; font-weight:bolder;font-size: 30px; text-shadow: rgb(255, 0, 0) 6px 5px 5px; text-align: center; color: white;">Change Password
</p>
<form action="" method="post">
<?php 
include('conn.php');
if(isset($_POST['submits']))
{
$oldpassword = $_SESSION['password'];
$ID = $_SESSION['ID'];
$oldpass= md5($_POST['oldpass']);
$newpass= md5($_POST['newpass']);
$repass=md5($_POST['repass']);

//$query=mysql_query("SELECT * FROM accounts WHERE ID='$ID'")or die("Wrong Query");
//$row=mysql_fetch_array($query);
//$dbpass=$row['password'];
if($oldpassword==$oldpass)
       {
   if($newpass==$repass)	   
         
		 {
		 mysql_query("update accounts set password='$newpass' where ID='$ID'") or die(mysql_error());
		 echo "<script>Alert.render('success password changed')</script>";
		 }
		 else
		 echo "<script>Alert.render('Invalid combination of new password and Repeat password')</script>";
       }
else {
 echo "<script>Alert.render('Invalid old password')</script>";
}
}

//header("location:http://localhost/myproj1/filemanage.php");

?>

<p style="margin-left:10px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">Old Password:</p>
<p style="margin-left:220px; margin-top:-45px;"><input name="oldpass" type="password" required="required"></p>

<p style="margin-left:10px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">New Password:</p>
<p style="margin-left:220px; margin-top:-45px;"><input name="newpass" type="password" required="required" pattern="[a-zA-Z0-9]{6,8}"></p>

<p style="margin-left:10px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">Confirm new password:</p>
<p style="margin-left:220px; margin-top:-45px;"><input name="repass" type="password" required="required" pattern="[a-zA-Z0-9]{6,8}"></p>
<p style="text-align: center;"><input name="submits" value="Change" type="submit">
</p>
</form>
		
	</div>
	<div id="footer">
		<div>
			<div>
				<span>Quick Links</span>
				<ul>
					<li>
						<a href="mms.php">News</a>
					</li>
					<li>
						<a href="mmsnowshow.php">Now Showing</a>
					</li>
					<li>
						<a href="mmscoomming.php">Comming Soon</a>
					</li>
					<li>
						<a href="video1.php">Video</a>
					</li>
					<li>
					    <a href="comment.php">Comment</a>
					</li>
					<li>
					    <a href="mmschangepass.php">Password</a>
					</li>
				</ul>
			</div>
			<div class="section">
						<span>Things you have to remember </span>
				<ul>
					<li>
						<p>
							Don't tell Your password to another person
						</p>
						<span></span>
					</li>
					<li>
						<p>
							Don't forget to logout for your account
						</p>
						<span></span>
					</li>
				</ul>
			</div>
			<div>
				<span>Wel Come to Multimedia Specialist Page</span>
				<p>
					This page help's you to do your job.have nice job!!
				</p>
				
			</div>
			<p>
				&#169; 2015 Lem online cinema Reservation. All rights reserved!!
			</p>
			<div class="connect">
				<span>Stay Connected:</span> <a href="http://www.facebook.com/" id="facebook">facebook</a> <a href="http://www.twitter.com/" id="twitter">twitter</a> <a href="http://www.googleplus.com/" id="googleplus">google+</a>
			</div>
		</div>
	</div>
</body>
</html>