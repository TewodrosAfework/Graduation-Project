<?php
	
	/*if(!isset($_SESSION['id'])) {
		header('Location:changestatus.php');
	}*/
	$lem=mysql_connect("localhost","root","");
if(!$lem)
{
die('Could not connect:'.mysql_error());
}
mysql_select_db("lemreservation", $lem);
	
	require_once('config.php');
	
	$get_userid = $_GET['userid'];
	
	$result=$dbh->prepare("Select * From seat Where Id='$get_userid'");
	$result->execute();
	while($row = $result->fetch(PDO::FETCH_ASSOC)){	
		echo $curr_status = $row['status'];
	}
		
	if($curr_status == "pend") {
		$sql = "UPDATE seat 
        SET status=?
		WHERE Id=?";
		
		$this_status = "unavailable";
		$q = $dbh->prepare($sql);
		$q->execute(array($this_status, $get_userid));
           //mysql_query("update  ticket set ticket_status = 'active' where Title='Frontera'")or die(mysql_error());
		header("location: changestatus.php");
	}/* else if($curr_status == "available") {
		$sql = "UPDATE seat 
        SET status=?
		WHERE Id=?";
		
		$this_status = "unavailable";
		$q = $dbh->prepare($sql);
		$q->execute(array($this_status, $get_userid));
		header("location: changestatus.php");
		
	}
	else{
		$sql = "UPDATE seat 
        SET status=?
		WHERE Id=?";
		
		$this_status = "available";
		$q = $dbh->prepare($sql);
		$q->execute(array($this_status, $get_userid));
		header("location: changestatus.php");
		
	}*/
	header("location: changestatus.php");
?>