<?php
session_start();
if (!isset($_SESSION['login_username']) || (trim($_SESSION['login_username']) == '')) {
    header("location: index.php");
    exit();
}
else
include('conn.php');
$check=$_SESSION['login_username'];
$fetch=mysql_query("SELECT * FROM `accounts` WHERE username='$check'");
while($row=mysql_fetch_array($fetch))
{
$_SESSION['ID']=$row['ID'];
$_SESSION['password']=$row['password'];
$_SESSION['email']=$row['email'];
$login_session=$row['username'];
}
?>