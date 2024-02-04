<?php
include("session.php");
require_once('config.php');	
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
		
		<!-- Bootstrap -->
		<link href="css4/bootstrap.min.css" rel="stylesheet">
		<link href="css4/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css4/bootstrap-responsive.css" rel="stylesheet" media="screen">
		<link href="css4/1docs.css" rel="stylesheet" media="screen">
		<link href="css4/font-awesome.css" rel="stylesheet" media="screen">
	
	<!-- js -->			
		<script src="js4/jquery-1.7.2.min.js"></script>
		 <script src="js4/jquery_1.9.js"></script>
		 <script src="js4/bootstrap.min.js"></script>
		<script src="js4/bootstrap.js"></script>			
		<script type="text/javascript" charset="utf-8" language="javascript" src="js4/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8" language="javascript" src="js4/DT_bootstrap.js"></script>
	
	
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
<br><p style="font-family: Berlin Sans FB Demi; font-weight:bolder;font-size: 30px; text-shadow: rgb(255, 0, 0) 6px 5px 5px; text-align: center; color: white;">Insert Ticket Number
</p><br>
<form action="" method="post">
<?php 
include('conn.php');
require_once('config.php');
if(isset($_POST['submits']))
{
$ticket=$_POST['ticket'];

	
	
	$cdate=date("Y-m-d");
	//$time='05:05';
    $LocalTime = strtotime('3 hours');
    $ctime= date('h:i', $LocalTime);
	
	$result=$dbh->prepare("Select * From ticket Where Ticket_Number='$ticket'");
	$result->execute();
	while($row = $result->fetch(PDO::FETCH_ASSOC)){	
		 echo $payment = $row['payment'];
		 echo $price = $row['price'];
		 echo $username = $row['username'];
		 echo $date = $row['date'];
		 echo $Time = $row['Time'];
		 echo $pay_way = $row['pay_way'];
		 
	}
	echo "compuetr";
	echo $cdate;
	echo $ctime;
  $hourago = strtotime($Time . " - 2 hour");
  $h = strtotime($ctime);
  if($pay_way == "card") {
	if($payment == "paid") {

		if($cdate<$date)
		{
	
		$results=mysql_query("SELECT * FROM accounts where username='$username'");
		while($rows = mysql_fetch_array($results))
	                   {
	             $credit=$rows['credit'];
	                   }
		$d=$price*0.2;
		$h=$price-$d;
		$total=$credit+$h;
        mysql_query("update  accounts set credit='$total' where username='$username'")or die(mysql_error());
		mysql_query("delete from seat where ticket_num='$ticket'")or die(mysql_error());
		mysql_query("delete from ticket where Ticket_Number='$ticket'")or die(mysql_error());
		
		echo "<script>Alert.render('you are cans your seat successfully')</script>";

	}
	else if($cdate==$date&&$h<$hourago)
	  {
	  		$results=mysql_query("SELECT * FROM accounts where username='$username'");
		while($rows = mysql_fetch_array($results))
	                   {
	             $credit=$rows['credit'];
	                   }
		$d=$price*0.2;
		$h=$price-$d;
		$total=$credit+$h;
        mysql_query("update  accounts set credit='$total' where username='$username'")or die(mysql_error());
		mysql_query("delete from seat where ticket_num='$ticket'")or die(mysql_error());
		mysql_query("delete from ticket where Ticket_Number='$ticket'")or die(mysql_error());
		
		echo "<script>Alert.render('you are cans your seat successfully')</script>";

	  }
	  else
	   echo "<script>Alert.render('You cant')</script>";
	  }
	else
		 echo "<script>Alert.render('FOR CANCEL YOU SATAUS MUST PAYED')</script>";
		 }
		 else
		 echo "<script>Alert.render('You payment way is not match')</script>";
		
}
?>
	
<p style="margin-left:380px; margin-top:5px;"><input name="ticket" type="text" size="40" required="required"></p>

<p style="margin-left:380px;"><input name="submits" value="Cancel" type="submit">
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