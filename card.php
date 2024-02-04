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
					<a href="user.php">Movies</a>
				</li>
				
				<li>
					<a href="card.php">Card</a>
				</li>
				<li>
					<a href="cancelchoose.php">Seat Cancel</a>
				</li>
				<li>
					<a href="userblog.php">Blog</a>
				</li>
				<li>
					<a href="changepassword.php">Change Password </a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="movies">
<p style="font-family: Berlin Sans FB Demi; font-weight:bolder;font-size: 30px; text-shadow: rgb(255, 0, 0) 6px 5px 5px; text-align: center; color: white;">Insert Hidden Number
</p>
<form action="" method="post">
<?php 
$con =mysql_connect('localhost', 'root', '') or die(mysql_error());
$db=mysql_select_db('lemreservation', $con);
if(isset($_POST['submits']))
{
  $ID = $_SESSION['ID'];
  $querys=mysql_query("SELECT * FROM `accounts` where ID='$ID'");
		   $rows=mysql_fetch_array($querys);
		   $username=$rows['username'];
	$h_num=$_POST['pass'];
	$sign=0;
	echo "<script>Alert.render('your card number $h_num <br>')</script>";
	
	//echo("num=".$h_num."<br>");
$result=mysql_query("SELECT  `serial` ,  `hidden_num` ,  `dateofgen` ,  `amount` ,  `enterd` 
FROM  `usercard` 
WHERE  `hidden_num` ='$h_num'
AND  `enterd` = '0'
LIMIT 0 , 30");
$record=mysql_fetch_array($result);
if($record)
{
	$temp=$record['amount'];
	
	//echo("card amount".$temp."<br>");
$result=mysql_query("SELECT  `username` ,  `password` ,  `credit` 
FROM  `accounts` 
WHERE  `username` =  '$username'
LIMIT 0 , 30");
$record=mysql_fetch_array($result);

if($record)
{
$temp2=$record['credit'];
//echo("you have".$temp."<br>");
$cash=$temp+$temp2;
//echo("you have".$temp2."<br>");
$sql=mysql_query("UPDATE  `lemreservation`.`accounts` SET  `credit` =  '$cash' WHERE `accounts`.`username` ='$username'");
if($sql)
{
	//echo("you have now ".$cash." birr"."<br>");
	$sql2=mysql_query("UPDATE  `lemreservation`.`usercard` SET `enterd` =  '1' WHERE `usercard`.`hidden_num` ='$h_num'");
if($sql2)
{
echo "<script>Alert.render('your card number $h_num <br> card amount $temp <br> you had $temp2 <br> you have now $cash birr ')</script>";
//echo("now succeful card entry");	
}
}
else
{
	echo("hola");}
}

else
{
	echo("oooo");
}	
	}	
else
{
echo "<script>Alert.render('Incorrect card number')</script>";
	echo("unsupported card num");	
}	
}

?>
<p style="margin-left:330px; margin-top:5px;"><input name="pass" type="password" size="40" required="required"></p>

<p style="text-align: center;"><input name="submits" value="Submit" type="submit">
</p>
</form>
		
	</div>
	<div id="footer">
		<div>
			<div>
				<span>Quick Links</span>
				<ul>
					<li>
					<a href="user.php">Movies</a>
				</li>
				
				<li>
					<a href="card.php">Card</a>
				</li>
				<li>
					<a href="cancel.php">Seat Cancel</a>
				</li>
				<li>
					<a href="userblog.php">Blog</a>
				</li>
				<li>
					<a href="changepassword.php">Change Password </a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
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
				<span>Well Come to Our Page</span>
				<p>
					You can reservation,getting information about movies and  giving comments  to movies!! 
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