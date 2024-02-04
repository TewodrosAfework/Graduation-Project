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
$lem=mysql_connect("localhost","root","");
if(!$lem)
{
die('Could not connect:'.mysql_error());
}
mysql_select_db("lemreservation", $lem);
	
	require_once('config.php');
	
	$ticketnum = $_GET['ticketnum'];
	$cdate=date("Y-m-d");
	//$time='05:05';
    $LocalTime = strtotime('3 hours');
    $ctime= date('h:i', $LocalTime);
	
	$result=$dbh->prepare("Select * From ticket Where Ticket_Number='$ticketnum'");
	$result->execute();
	while($row = $result->fetch(PDO::FETCH_ASSOC)){	
		 echo $payment = $row['payment'];
		 echo $price = $row['price'];
		 echo $username = $row['username'];
		 echo $date = $row['date'];
		 echo $Time = $row['Time'];
		 
	}
	echo "compuetr";
	echo $cdate;
	echo $ctime;
  $hourago = strtotime($Time . " - 2 hour");
  $h = strtotime($ctime);
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
		mysql_query("delete from seat where ticket_num='$ticketnum'")or die(mysql_error());
		mysql_query("delete from ticket where Ticket_Number='$ticketnum'")or die(mysql_error());
		//header("location: changestatus.php");
		echo "done";
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
		mysql_query("delete from seat where ticket_num='$ticketnum'")or die(mysql_error());
		mysql_query("delete from ticket where Ticket_Number='$ticketnum'")or die(mysql_error());
		//header("location: changestatus.php");
		echo "done";
	  }
	  else
	   echo "your Can't can";
	  }
	else
		 echo "<script>Alert.render('FOR CANCEL YOU SATAUS MUST PAYED')</script>";
	header("location:cancel.php");
?>
</html>