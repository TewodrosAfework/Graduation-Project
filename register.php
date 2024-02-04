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
.style7 {color: rgb(255, 255, 51)}
select[type=a], select {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  margin: 5px 1px 3px 0px;
  border: 5px solid #DDDDDD;
}

select[type=a]:focus, select:focus {
  box-shadow: 0 0 100px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
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
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="">Movies</a>
					<ul>
						<li>
							<a href="nowshow.php">Now Showing</a>
						</li>
						<li>
							<a href="commingsoon.php">Comming Soon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="ticket-info.php">Ticket Info</a>
				</li>
				<li>
					<a href="rentals.php">video</a>
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
	<div id="body" class="movies">
<p style="font-family: Berlin Sans FB Demi; font-weight:bolder;font-size: 30px; text-shadow: rgb(255, 0, 0) 6px 5px 5px; text-align: center; color: white;">Registration
Form Fill-up All
</p>
<form action="" method="post">
<?php 
include('conn.php');
if(isset($_POST['submits']))
{
//$submit=$_POST['submits'];
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$user= $_POST['user'];
$sex= $_POST['sex'];
$email= $_POST['email'];
$pass= md5($_POST['pass']);
$repass=md5($_POST['repass']);
$type='user';
$status='active';
$query=mysql_query("SELECT * FROM accounts WHERE username='$user' or email='$email'")or die("Wrong Query");
$count=mysql_num_rows($query);
if($count>=1)
       {
	   echo "<script>Alert.render('Username or Email already exist!, try another email and username')</script>";
        }
else {
if($pass!=$repass)
{
echo "<script>Alert.render('Invalid combination of new password and Repeat password')</script>";
}
else
{
mysql_query("INSERT INTO accounts (fname,lname,username,sex,email,password,type,status,credit) VALUES('$fname','$lname','$user','$sex','$email','$pass','$type','$status','0')");
echo "<script>Alert.render('Login to your account now')</script>";
die("<script>
			setInterval(
				function(){	window.location='login.php' },3000
			);
		</script>");
	
//echo "<script>alert(congra)</script>";
//echo "<script>windows.location(index.php)</script>";
//die("<button type='a' onclick=''><A href='index.php'>Login to your account now</A></button>");
}
}
}

//header("location:http://localhost/myproj1/filemanage.php");

?>

<p style="margin-left:10px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">First Name:</p>
<p style="margin-left:150px;  margin-top:-45px;"> <input name="fname" type="text" required="required" pattern="[a-zA-Z]+">&nbsp;</p>

<p style="margin-left:10px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">Last Name:</p>
<p style="margin-left:150px;  margin-top:-45px;"> <input name="lname" type="text" required="required" pattern="[a-zA-Z]+">&nbsp;</p>

<p style="margin-left:10px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">Username:</p>
<p style="margin-left:150px;  margin-top:-45px;"><input name="user" type="text" required="required"></p>

<p style="margin-left:10px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">SEX:</p>
<p style="margin-left:150px;  margin-top:-45px;"><select name="sex" type="text" ><option>Male</option><option>Female</option></select></p>

<p style="margin-left:470px; margin-top:-210px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">E-mail
Addrress:</p>
<p style="margin-left:650px;  margin-top:-45px;"><input name="email" type="email" required="required" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$"></p>

<p style="margin-left:470px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">Password</p>
<p style="margin-left:650px; margin-top:-45px;"><input name="pass" type="password" required="required" pattern="[a-zA-Z0-9]{6,8}"></p>

<p style="margin-left:470px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">Re-type
Password</p>
<p style="margin-left:650px; margin-top:-45px;"><input name="repass" type="password" required="required" pattern="[a-zA-Z0-9]{6,8}"></p>
<p style="text-align: center;"><input name="submits" value="Register Account" type="submit">
</p>
</form>
		
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
						<a href="nowshow.php">Now Showing</a>
					</li>
					<li>
						<a href="commingsoon.php">Comming Soon</a>
					</li>
					<li>
						<a href="ticket-info.php">Ticket Info</a>
					</li>

					<li>
						<a href="rentals.php">video</a>
					</li>
					<li>
						<a href="about.php">Contact</a>
					</li>
					
					<li>
						<a href="blog.php">Blog</a>
					</li>

				</ul>
			</div>
			<div class="section">
				<span>Recent Movies hit list</span>
				<ul>
				<?php
             include('conn.php');
             $query=mysql_query("SELECT * FROM `moviesdetail` Order By No DESC LIMIT 2");
             while($row=mysql_fetch_array($query))
                  {
				  $No=$row['No'];
				  $title=$row['title'];
                  
                  ?>
					<li>
						<p>
						<?php echo $title;?>
						</p>
						<span><a href="nowshow.php">See More</a></span>	
					</li>
					<?php }?>
				</ul>
			</div>
			<div>
				<span>Sign Up For More services</span>
				<p>
					for reservation,for getting information about movies and for giving comments  sign up and you will be more than satisfied! 
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