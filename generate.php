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
				<li>
					<a href="index.php"></a>
				</li>
				<li class="selected">
					<a href="admin.php">User</a>
					
				</li>
				<li>
					<a href="admincancel.php">Seat Cancel</a>
					<ul>
						<li>
							<a href="changestatus.php">Seat Approve</a>
						</li>
						<li>
							<a href="deleteseat.php">Delete Approve</a>
						</li>
						
					</ul>
				</li>
				
				<li>
					<a href="adminchangepass.php">Change Password</a>
				</li>
				<li>
					<a href="generate.php">Card Generate</a>
				</li>
				
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="movies">
<p style="font-family: Berlin Sans FB Demi; font-weight:bolder;font-size: 30px; text-shadow: rgb(255, 0, 0) 6px 5px 5px; text-align: center; color: white;">Card Generation Fill-up All
</p>
<form action="" method="post">
<?php 
$con =mysql_connect('localhost', 'root', '') or die(mysql_error());
$db=mysql_select_db('lemreservation', $con);
if(isset($_POST['submits']))
{
$a=$_POST['five'];
$b=$_POST['twofive'];
$c=$_POST['onetho'];
$d=$_POST['fivehun'];
$e=$_POST['twofif'];
$dt=date("y-m-d");

$totcardnum=$a+$b+$c+$d+$e;
$cardarr=array();
$i=0;
while($i<$totcardnum)
{
$hidden=rand(10000,99999);
array_push($cardarr,$hidden);
$i++;
}
$i=0;
while($i<$totcardnum)
{

if($i<$a)
{	
$temp=5000;
}	

else if($i<($a+$b))
{
$temp=2500;	
}
else if($i<($a+$b+$c))
{
$temp=1000;	
}
 else if($i<($a+$b+$c+$d))
{
$temp=500;	
}
else
{
$temp=250;
}
$finalhidden=$cardarr[$i].$temp;
$ins="INSERT INTO  `lemreservation`.`usercard` (
`serial` ,
`hidden_num` ,
`dateofgen` ,
`amount`
)
VALUES (
NULL , '$finalhidden',  '$dt',  '$temp')";
$squ=mysql_query($ins);
if($squ)
{
echo "<script>Alert.render('card $finalhidden has beeen added into the database <br> ')</script>";
echo("card".$finalhidden."has beeen added into the database")."<br>";
}

else
{
echo("unsupported operation")."<br>";
}
$i++;
}

}

//header("location:http://localhost/myproj1/filemanage.php");

?>

<p style="margin-left:10px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">5000</p>
<p style="margin-left:150px;  margin-top:-45px;"> <input name="five" type="text" placeholder="amount" required="required" pattern="[0-9]+">&nbsp;</p>

<p style="margin-left:10px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">2500</p>
<p style="margin-left:150px;  margin-top:-45px;"> <input name="twofive" type="text" placeholder="amount" required="required" pattern="[0-9]+">&nbsp;</p>

<p style="margin-left:10px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">1000</p>
<p style="margin-left:150px;  margin-top:-45px;"><input name="onetho" type="text" placeholder="amount" required="required" pattern="[0-9]+"></p>

<p style="margin-left:10px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">500</p>
<p style="margin-left:150px;  margin-top:-45px;"><input name="fivehun" type="text" placeholder="amount" required="required" pattern="[0-9]+"></p>

<p style="margin-left:10px; margin-top:20px; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">250
</p>
<p style="margin-left:150px;  margin-top:-50px;"><input name="twofif" type="text" placeholder="amount" required="required" pattern="[0-9]+"></p>

<p style="margin-left:150px;"><input name="submits" value="Generate" type="submit">
</p>
</form>
		
	</div>
	<div id="footer">
		<div>
			<div>
				<span>Quick Links</span>
				<ul>
					<li>
						<a href="admin.php">User</a>
					</li>
					<li>
						<a href="changestatus.php">Seat Approval</a>
					</li>
					<li>
						<a href="deleteseat.php">Delete Seat</a>
					</li>
					<li>
						<a href="adminchangepass.php">Change Password</a>
					</li>
					<li>
						<a href="generate.php">Card Generate</a>
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
				<span>Wel Come to admin Page</span>
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