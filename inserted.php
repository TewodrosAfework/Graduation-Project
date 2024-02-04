<?php
$cn=mysql_connect('localhost','root','')or
 die('Unable to connect to server');
 mysql_select_db('lemreservation',$cn) or
   die(mysql_error($cn));
   
$seatArray = $_REQUEST['Arrayval']; 
$seat= count($seatArray);
$ID=$_POST['ID'];
$Tickets=$_POST['ticketval'];
$Total=$_POST['Totalval'];
$title=$_POST['titleval'];
$time=$_POST['timeval'];
$date=$_POST['dateval'];
$ticketnum=$_POST['ticketnum'];
$status='unavailable';
$statuss='Active';
$a='a';
$username=$_POST['username'];
$payed='paid';
$date1=date("Y-m-d");
$pay_way='card';
 for($x = 0; $x < $seat; $x++){
    $strs[] = "('{$seatArray[$x]}')";
	$d = implode(',',$strs);	
	$s =$seatArray[$x];
	
$sql='INSERT INTO seat(seat,status,title,time,date,ticket_num )VALUES("' . $s . '","' . $status . '","' . $title . '","' . $time . '","' . $date . '","' . $ticketnum . '")';

$result=mysql_query($sql,$cn) or
die(mysql_error($cn));  
 
  }
 $querys=mysql_query("SELECT * FROM `accounts` where ID='$ID'");
 $rows=mysql_fetch_array($querys);
 $credit=$rows['credit'];
 $newcredit=$credit-$Total;

 mysql_query("update accounts set credit='$newcredit' where ID='$ID'")or die(mysql_error()); 
  
$sq='INSERT INTO ticket(ID,Ticket_Number,username,seat,Title,price,Time,date,Total,ticket_status,payment,date1,pay_way)VALUES("","' . $ticketnum . '","' . $username . '","' . $d . '","' . $title . '","' . $Total. '","' . $time . '","' . $date . '","' . $Tickets . '","' . $statuss . '","'. $payed .'","'. $date1 .'","'. $pay_way .'")';
$results=mysql_query($sq,$cn) or
die(mysql_error($cn));

?>