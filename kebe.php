<?php

error_reporting(0);
     $con = mysql_connect ("localhost","root","");
	// Select Database
	$sd="unavailable";
	mysql_select_db("lemreservation", $con);
	$title=array();
	$type=array();
    $qty=array();
    $takeseat=array();
    $a=0;
	$b=0;
	$device_query = mysql_query("SELECT *from new_item ") or die(mysql_error());
	echo "<br>";
	echo "title".$cc=mysql_num_rows($device_query);	
	echo "<br>";
	while($row = mysql_fetch_array($device_query))
	{
		$id2 = $row['category'];
		$id3 = $row['type'];
		
        $title[$b]=$id2;
	
	
	$device_query2=mysql_query("SELECT *from new_item where category='$id2' and type='$id3'") or die(mysql_error());
	echo "<br>";
	echo "paid".$bb=mysql_num_rows($device_query2);	
	echo "<br>";
     $type[$b]=$bb;
	//$totalpric[$b]=$a;
	//$device_query3=mysql_query("SELECT *from seat where title='$id2'") or die(mysql_error());
	//echo "sold".$d=mysql_num_rows($device_query3);
	//$takeseat[$b]=$d;
	
	$b++;
	}
	
	echo count($title);
	echo $cc;
	echo "<table border='1'>";
	for($x=0;$x<$cc;$x++)
	{
		
		if($takeseat[$x]!=0){
		echo "<tr><td>".$title[$x]."</td><td>".$type[$x]."</td></tr>";
		}
	}
	
echo "</tabel>";
?>