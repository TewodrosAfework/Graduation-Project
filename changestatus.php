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

<table class="table table-bordered" style="width:550px">
	<tr>
		<th>ID</th><th>Username</th><th>Title</th><th>Time</th><th>Date</th><th>Price</th><th>Seat</th><th>Status</th><th>Payment</th><th>recite</th>
	</tr>
	<?php
		$result=$dbh->prepare("Select * From seat where status='pend'");
		$result->execute();
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
		//$ticketnum=$row['ticket_num']
			echo "<tr>";
			echo "<td>".$row['Id']."</td>";
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['title']."</td>";
			echo "<td>".$row['time']."</td>";
			echo "<td>".$row['date']."</td>";
			echo "<td>".$row['price']."</td>";
			echo "<td>".$row['seat']."</td>";
			
			
			if($row['status']=='pend') {
				echo "<td><a href='update_status.php?userid=$row[Id]' class='btn btn-success'>".$row['status']."</a></td>";
			}else{
				echo "<td><a href='update_status.php?userid=$row[Id]' class='btn btn-warning'>".$row['status']."</a></td>";
			}
			if($row['payment']=='notpaid') {
				echo "<td><a href='update_payment.php?userid=$row[Id]&ticket=$row[ticket_num]' class='btn btn-success'>".$row['payment']."</a></td>";
			}else{
				echo "<td><a href='update_payment.php?userid=$row[Id]&ticket=$row[ticket_num]' class='btn btn-warning'>".$row['payment']."</a></td>";
			}
			//echo "<td>".$row['payment']."</td>";
			if($row['recite']!=""){
			 
			 
			 echo "<td><a class='iframe' href='http://localhost/cinema/may.php?userid=$row[Id]'>".$row['recite']."</a></td>";
			 echo"</tr >";
             
			 echo"<tr >";
             echo"<td></td>";
             echo"<td></td>";
             echo"<td></td>";
             echo"<td></td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 echo"<td></td>";

             echo "</tr>";
  			
			}
			else
			{
			echo "<td>".$row['recite']."</td>";

			}
			
			
			echo "</tr>";
		if($row['recite']){
			 
			 
			 }
		}
	?>
</table>		
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