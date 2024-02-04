<html>
<head>
<link rel="stylesheet" type="text/css" href="css/alertbox.css"/>
<script src="script/alertbox3.js"></script>
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

<?php 
include('conn.php');
session_start();{
$email=mysql_real_escape_string($_POST['email']);
$pass=md5($_POST['pass']);
$fetch=mysql_query("SELECT * FROM `accounts` WHERE email='$email' and password='$pass'");
$count=mysql_num_rows($fetch);
if($count!="")
{
while($row=mysql_fetch_array($fetch))
{
$type=$row['type'];
$username=$row['username'];
$status=$row['status'];
if($type=="user" && $status=="active")
{
$_SESSION['login_username']=$username;
header("location:user.php");
}
else if($type=="Admin"&& $status=="active")
{
$_SESSION['login_username']=$username;
header("location:admin.php");
}
else if($type=="Ticket Controller"&& $status=="active")
{
$_SESSION['login_username']=$username;
header("location:ticketcontroller.php");
}
else if($type=="MMS"&& $status=="active")
{
$_SESSION['login_username']=$username;
header("location:mms.php");
}
else
header('location:index.php');
//session_register("sessionusername");
//$_SESSION['login_username']=$user;
}
}
else{
//echo'<script type="text/javascript">alert("Please Fill up All Fields!")</script>';
//echo "<script>Alert.render('Login to your account now')</script>";
header('location:index.php');
/*echo "
		<script>
			setInterval(
				function(){	window.location='index.php' },9000
			);
		</script>";*/
}
}
?>
</body>
</html>