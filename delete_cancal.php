<?php
$ducepcon=mysql_connect("localhost","root","");
if(!$ducepcon)
{
die('Could not connect:'.mysql_error());
}
mysql_select_db("lemreservation", $ducepcon);

$id=$_GET['id'];

mysql_query("delete from cancel where ID='$id'") or die(mysql_error());

header('location:admincancel.php');
?>