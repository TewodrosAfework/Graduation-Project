<?php
mysql_connect("localhost","root","");
mysql_select_db("lemreservation");
$res=mysql_query("select * from membership");
echo"<table>";
while($row=mysql_fetch_array($res))
{
echo"<tr>";
echo"<td>";echo $row["name"]; echo"</td>";
echo "<td>";?><a href="<?php echo $row["path"]; ?>">Download</a><?php echo"</td>";
echo "</tr>";
}
echo"</table";
?>
