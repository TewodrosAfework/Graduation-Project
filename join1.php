
<form action="" method="post">
<?php
    $con = mysql_connect ("localhost","root","");
	// Select Database
	$sd="unavailable";
	mysql_select_db("lemreservation", $con);
             $query=mysql_query("SELECT * FROM `moviesdetail`");
?>

<select name="sex" >
  <?php
  while($row=mysql_fetch_array($query))
                  {
			
                
            ?>
belawk
<option><?php echo $row['title']; ?></option>
<?php
}
?>
</select>
<input name="submits" value="report" type="submit">
</form>

<?php
if(isset($_POST['submits']))
{

$sex= $_POST['sex'];
	$con = mysql_connect ("localhost","root","");
	// Select Database
	$sd="unavailable";
	

	mysql_select_db("lemreservation", $con);
	$device_query = mysql_query("SELECT moviesdetail.title,moviesdetail.genre, seat.seat,seat.time,seat.date
FROM moviesdetail
LEFT JOIN seat
ON moviesdetail.title=seat.title where seat.status='$sd' and seat.title='$sex' ") or die(mysql_error());
	
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
	<th>TOtal</th>
	
	</tr>
<?php		

	   

$a=0;
		$ticke=mysql_query("SELECT * from ticket where Title='$sex'");
	
	while($roww = mysql_fetch_array($ticke))	  
	   {
	   $a=$a+$roww['price'];	   
       }
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

		
		
		echo "</tr>";
//$c++;
           	
		}
//}
echo "<td colspan='7'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>".$a."</td>";

		/*echo "<tr>";
		echo "<td></td><td></td><td></td><td></td><td></td><td>".$cc*$dev_id."</td>";
		echo "</tr>";*/
		}
		?>

 


