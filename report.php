<form action="" method="post">
Form:<input type="date"  min="<?php echo date('Y-m-d')?>" id="inputEmail" name="date1"  required>
TO:<input type="date"   id="inputEmail" name="date2" placeholder="Title" required>
<input name="submits" value="report" type="submit">
</form>
<?php
if(isset($_POST['submits']))
{

$from= $_POST['date1'];
$to= $_POST['date2'];
 error_reporting(0);
     $con = mysql_connect ("localhost","root","");
	// Select Database
	$sd="unavailable";
	mysql_select_db("lemreservation", $con);
	$title=array();
	$totalpric=array();
    $qty=array();
    $takeseat=array();
	$overall=array();
    $a=0;
	$b=0;
	$device_query = mysql_query("SELECT *from moviesdetail ") or die(mysql_error());
	echo "<br>";
	echo "title".$cc=mysql_num_rows($device_query);	
	echo "<br>";
	while($row = mysql_fetch_array($device_query))
	{
		$id2 = $row['title'];
		//$id3 = $row['product_price'];
		
        $title[$b]=$id2;
	
	
	$device_query2=mysql_query("SELECT *from ticket where Title='$id2' and payment='paid'  and date1 between '$from' and '$to' ") or die(mysql_error());
	echo "<br>";
	echo "paid".$bb=mysql_num_rows($device_query2);	
	echo "<br>";
	while($roww = mysql_fetch_array($device_query2))	  
	   {
	$totalpric[$b]=$totalpric[$b]+$roww['price'];
	  }
	$device_query3=mysql_query("SELECT *from seat where title='$id2'") or die(mysql_error());
	echo "sold".$d=mysql_num_rows($device_query3);
	$takeseat[$b]=$d;
	
	$b++;
	}
	}
	echo count($title);
	echo $cc;

	?>

	echo "<table border='1'>";
	<tr>
	<th>title</th>
	<th>Total Prices</th>
	<th>Take seat</th>
	
	<?php
	for($x=0;$x<$cc;$x++)
	{
		
		if($takeseat[$x]!=0 && $totalpric[$x]!=""){
		echo "<tr><td>".$title[$x]."</td><td>".$totalpric[$x]."</td><td>".$takeseat[$x]."</td></tr>";
		}
	}
	
echo "</tabel>";
?>