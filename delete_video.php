<?php
$ducepcon=mysql_connect("localhost","root","");
if(!$ducepcon)
{
die('Could not connect:'.mysql_error());
}
mysql_select_db("lemreservation", $ducepcon);

$id=$_GET['id'];

mysql_query("delete from video where video_id='$id'") or die(mysql_error());

header('location:video1.php');
?>