
<div style="color: red; text-align: center;">
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
if($query==1)
{
echo'<script type="text/javascript">alert("Username or Email already exist!, try another email and username")</script>';
}
else {
if($pass==$repass){
mysql_query("INSERT INTO accounts (fname,lname,username,sex,email,password,type,status) VALUES('$fname','$lname','$user','$sex','$email','$pass','$type','$status')");
echo "<script>Alert.render('Login to your account now')</script>";
die("<script>
			setInterval(
				function(){	window.location='index.php' },2000
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

</div>
</body>
</html>