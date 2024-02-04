	$lem=mysql_connect("localhost","root","");
if(!$lem)
{
die('Could not connect:'.mysql_error());
}
mysql_select_db("lemreservation", $lem);
	
	require_once('config.php');
	
	$username =$_GET['username'];
	$title =$_GET['title'];
	$date =$_GET['date'];
	$time=$_GET['time'];
	
	mysql_query("update  ticket set payment='paid' where username='$username',title='$title',date='$date',time='$time'")or die(mysql_error());
	
	ticket.Title=seat.title where seat.status='$sd' and seat.title='Levitated Mass'") 
	
	Order By Id ASC
	
	<?php

	$con = mysql_connect ("localhost","root","");
	// Select Database
	$sd="unavailable";
	mysql_select_db("lemreservation", $con);
	$device_query = mysql_query("SELECT ticket.Title,seat.time,seat.date,seat.seat
    FROM ticket
    LEFT JOIN seat
    ON ticket.Title=seat.title where seat.status='$sd' and seat.title='Levitated Mass'") or die(mysql_error());
	
	echo $cc=mysql_num_rows($device_query);
	
	?>	
	
	<table border="1">
	<tr>
	<th>title</th>
	<!---<th>genre</th>--->
	<th>Total seat</th>
	<th>take seat</th>
	<th>seat</th>
	<th>time</th>
	<th>date</th>
	<th>Total</th>
	
	</tr>
<?php		


$a=0;
$c=0;
while($row = mysql_fetch_array($device_query))
//$a=$a+$row['price'];
	{
	echo "<tr>";
	
	
		//if($cc>1)
		//{
		echo "<td>".$id = $row['Title']."</td>";
		//echo "<td>".$id = $row['genre']."</td>";
		echo "<td>".'100'."</td>";
		echo "<td>".$cc."</td>";
		echo "<td>".$dev_id = $row['seat']."</td>";
		echo "<td>".$id = $row['time']."</td>";
		echo "<td>".$id = $row['date']."</td>";
		echo "<td>".""."</td>";

		
		//echo "<td>"." "."</td>";
		echo "</tr>";
//$c++;	
		}
//}

		/*echo "<tr>";
		echo "<td></td><td></td><td></td><td></td><td></td><td>".$cc*$dev_id."</td>";
		echo "</tr>";*/
		?>

 


<?php
/*
	$con = mysql_connect ("localhost","root","teddyten");
	// Select Database
	mysql_select_db("netsipro", $con);
	$device_query = mysql_query("SELECT catagories.cat_title, products.product_title
FROM catagories
LEFT JOIN products
ON catagories.cat_id=products.product_cat") or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		echo $id = $row['cat_title'];
		echo "                                 :";
		echo $dev_id = $row['product_title'];
		
		echo "<br>";
		}
*/?>




<?php

	$con = mysql_connect ("localhost","root","");
	// Select Database
	$sd="unavailable";
	mysql_select_db("lemreservation", $con);
	$device_query = mysql_query("SELECT moviesdetail.title,moviesdetail.genre, seat.seat,seat.time,seat.date
FROM moviesdetail
LEFT JOIN seat
ON moviesdetail.title=seat.title where seat.status='$sd' and seat.title='Levitated Mass' ") or die(mysql_error());
	
	echo $cc=mysql_num_rows($device_query);
	
	?>	
	
	<table border="1">
	<tr>
	<th>title</th>
	<th>genre</th>
	<th>Total seat</th>
	<th>take seat</th>
	<th>seat</th>
	<th>time</th>
	<th>date</th>
	
	</tr>
<?php		


$a=0;
$c=0;
while($row = mysql_fetch_array($device_query))
//$a=$a+$row['product_price'];
	{
	echo "<tr>";
	
	
		//if($cc>1)
		//{
		echo "<td>".$id = $row['title']."</td>";
		echo "<td>".$id = $row['genre']."</td>";
		echo "<td>".'100'."</td>";
		echo "<td>".$cc."</td>";
		echo "<td>".$dev_id = $row['seat']."</td>";
		echo "<td>".$id = $row['time']."</td>";
		echo "<td>".$id = $row['date']."</td>";

		
		//echo "<td>"." "."</td>";
		echo "</tr>";
//$c++;	
		}
//}

		/*echo "<tr>";
		echo "<td></td><td></td><td></td><td></td><td></td><td>".$cc*$dev_id."</td>";
		echo "</tr>";*/
		?>

 


<?php
/*
	$con = mysql_connect ("localhost","root","teddyten");
	// Select Database
	mysql_select_db("netsipro", $con);
	$device_query = mysql_query("SELECT catagories.cat_title, products.product_title
FROM catagories
LEFT JOIN products
ON catagories.cat_id=products.product_cat") or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		echo $id = $row['cat_title'];
		echo "                                 :";
		echo $dev_id = $row['product_title'];
		
		echo "<br>";
		}
*/?>