<?php 

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "";

  $databaseName = "lemreservation";
  $tableName = "seat";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  include 'DB.php';
  $con = mysql_connect($host,$user,$pass)or die("Unable to connect");
  $dbs = mysql_select_db($databaseName, $con)or die("Unable to connect");

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $time=$_GET['timesval'];
  $title=$_GET['titleval'];
  $result = mysql_query("SELECT * FROM $tableName where time='$time' AND title='$title'");          //query
  $counter=-1;
  $array=array();
  while($row=mysql_fetch_array($result))
  
  { 
  
  
  //echo $row['ID'] . " " . $row['seat'] . " " . $row['status'];
   $counter++;
  $array[$counter]=array();
  $array[$counter]['Id']=$row['Id']; 
  $array[$counter]['seat']=$row['seat'];
  $array[$counter]['status']=$row['status'];
  $array[$counter]['title']=$row['title'];
  $array[$counter]['time']=$row['time'];
  //echo " id: ".$array[$counter]['Id'].", seat: ".$array[$counter]['seat'].", status: ".$array[$counter]['status'].",time: ".$array[$counter]['time'].".<br>";
  
    
}
echo json_encode($array);


//echo $array[1][0].": In stock: ".$array[1][1].", sold: ".$array[1][2].".<br>";

?>