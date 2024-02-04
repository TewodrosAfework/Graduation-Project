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
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/alertbox.css"/>
    <script src="script/alertbox3.js"></script>
	
   

      
	<!-- Bootstrap -->
		<link href="css4/bootstrap.min.css" rel="stylesheet">
		<link href="css4/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css4/bootstrap-responsive.css" rel="stylesheet" media="screen">
		<link href="css4/1docs.css" rel="stylesheet" media="screen">
		<link href="css4/font-awesome.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="../css/DT_bootstrap.css">
	<!-- js -->			
		<script src="js4/jquery-1.7.2.min.js"></script>
		 <script src="js4/jquery_1.9.js"></script>
		 <script src="js4/bootstrap.min.js"></script>
		<script src="js4/bootstrap.js"></script>			
		<script type="text/javascript" charset="utf-8" language="javascript" src="js4/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8" language="javascript" src="js4/DT_bootstrap.js"></script>
		
		  <link rel="stylesheet" href="colorbox.css" />
     <script src="script/jqueryy.min.js"></script>
     <script src="script/jquery.colorbox-min.js"></script>
    
	<script>
            $(document).ready(function(){
                $(".iframe").colorbox({iframe:true, fastIframe:false, width:"500px", height:"500px", transition:"fade", scrolling   : false});
            });
        </script>		
		
		<style>
            #cboxOverlay{ background:#666666; }
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
					<a href=""></a>
					
				</li>
				<li>
					<a href="ticketcontroller.php">Ticket</a>
				</li>
				<li>
					<a href="report1.php">Report</a>
				</li>
				<li>
					<a href="ticketchangepass.php">Change Password</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="movies">
<form action="" method="post">
<p style="margin-left:5px;  margin-top:20px; color: RED; font-weight:bolder" >Form:<p style="margin-left:50px;  margin-top:20px;">
<p style="margin-left:50px;  margin-top:-39px;"><input type="date"  min="<?php echo date('Y-m-d')?>" id="inputEmail" name="date1"  required></p>
<p style="margin-left:350px;  margin-top:-50px; color: RED; font-weight:bolder">TO:</p>
<p style="margin-left:400px;  margin-top:-30px;"><input type="date"   id="inputEmail" name="date2" placeholder="Title" required></p>
<p style="margin-left:700px;  margin-top:-50px;"><input name="submits" value="report" type="submit"></p>
</form>
<p style="margin-left:800px;  margin-top:-40px;"><a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a><p>
<table class="table table-bordered" style="width:550px">
	<tr>
		<th>Title</th><th>Total seat</th><th>Take seat</th><th>Total Price</th>
	</tr>
	<?php
	error_reporting(0);
	if(isset($_POST['submits']))
{

$from= $_POST['date1'];
$to= $_POST['date2'];
		  $con = mysql_connect ("localhost","root","");
	// Select Database
	$sd="unavailable";
	mysql_select_db("lemreservation", $con);
	$title=array();
	$totalpric=array();
    $qty=array();
    $takeseat=array();
	$overall=array();
    $a=0;
	$b=0;
	$device_query = mysql_query("SELECT *from moviesdetail ") or die(mysql_error());
	//echo "<br>";
	$cc=mysql_num_rows($device_query);	
	
	while($row = mysql_fetch_array($device_query))
	{
		$id2 = $row['title'];
		
		
        $title[$b]=$id2;
	
	
	$device_query2=mysql_query("SELECT *from ticket where Title='$id2' and payment='paid' and date1 between '$from' and '$to' ") or die(mysql_error());
	
	$bb=mysql_num_rows($device_query2);	
	
	while($roww = mysql_fetch_array($device_query2))	  
	   {
	$totalpric[$b]=$totalpric[$b]+$roww['price'];
	  }
	$device_query3=mysql_query("SELECT *from seat where title='$id2'") or die(mysql_error());
	$d=mysql_num_rows($device_query3);
	$takeseat[$b]=$d;
	
	$b++;
	}
	}
	
	//echo count($title);
	//echo $cc;
	for($x=0;$x<$cc;$x++)
	{
		
		if($takeseat[$x]!=0&& $totalpric[$x]!=""){
		echo "<tr><td>".$title[$x]."</td><td>".'100'."</td><td>".$takeseat[$x]."</td><td>".$totalpric[$x]."</td></tr>";
		}
	}
	
echo "</tabel>";
	?>
</table>		
	</div>
	<div id="footer">
		<div>
			<div>
				<span>Quick Links</span>
				<ul>
				<li>
					<a href="ticketcontroller.php">Ticket</a>
				</li>
				<li>
					<a href="report.php">Report</a>
				</li>
				<li>
					<a href="ticketchangepass.php">Change Password</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
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