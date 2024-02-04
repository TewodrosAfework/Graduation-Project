<?php
$cn=mysql_connect('localhost','root','')or
 die('Unable to connect to server');
 mysql_select_db('lemreservation',$cn) or
   die(mysql_error($cn));
   
$seatArray = $_REQUEST['Arrayval']; 
$seat= count($seatArray);
$Tickets=$_POST['ticketval'];
$Total=$_POST['Totalval'];
$title=$_POST['titleval'];
$time=$_POST['timeval'];
$date=$_POST['dateval'];
$ticketnum=$_POST['ticketnum'];
$status='pend';
$statuss='Active';
$a='a';
$username=$_POST['username'];
$pay='notpaid';
$date1=date("Y-m-d");
$pay_way='recite';
 for($x = 0; $x < $seat; $x++){
    $strs[] = "('{$seatArray[$x]}')";
	$d = implode(',',$strs);	
	$s =$seatArray[$x];
	
$sql='INSERT INTO seat(seat,status,title,time,date,ticket_num)VALUES("' . $s . '","' . $status . '","' . $title . '","' . $time . '","' . $date . '","' . $ticketnum . '")';

$result=mysql_query($sql,$cn) or
die(mysql_error($cn));  
 
  }
$sq='INSERT INTO ticket(ID,Ticket_Number,username,seat,Title,price,Time,date,Total,ticket_status,payment,date1,pay_way)VALUES("","' . $ticketnum . '","' . $username . '","' . $d . '","' . $title . '","' . $Total. '","' . $time . '","' . $date . '","' . $Tickets . '","' . $statuss . '","' . $pay . '","' . $date1 . '","' .$pay_way. '")';
$results=mysql_query($sq,$cn) or
die(mysql_error($cn));

?>