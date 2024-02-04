<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Movies - Cinema Theater Website Template</title>
	<link rel="stylesheet" href="css/style2.css" type="text/css">
	<script type="text/javascript" src="js1/sagallery.js"></script>
    <script src="js1/script.js" type="text/javascript"></script>
    <script src="js1/jquery.prettyPhoto.js" type="text/javascript"></script> 
    <link href="prettyPhoto.css" rel="stylesheet" type="text/css" />
	
	<link href="searchform.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
ul.Movielist li {
float: left;
text-decoration: none;
list-style: none;
}
div.movies div{
margin-left: 138px;
}
.SECOND{
	margin: 0px;
	padding: 10px;
	border: 4px solid #0000ff;
	height: auto;
	width: auto;
	margin: 0px 25px 50px 140px;
	float: left;
	opacity:1.5;
	filter:alpha(opacity=100);
	text-align: center;
	box-shadow: 0 0 20px rgba(81, 203, 238, 1);
}			
div.img img {
display: inline;
margin: 0px;
opacity:0.5;
filter:alpha(opacity=40);
border: 1px solid #ffffff;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
}
div.img a:hover img {
border: 1px solid #0000ff;
opacity:1.0;
filter:alpha(opacity=100);
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
}
div.desc {
text-align: center;
font-weight: normal;
width: 120px;
margin: 5px;

}
div.img {
margin: 0px;
padding: 10px;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
border: 4px solid #0000ff;
height: auto;
width: auto;
margin: 0px 25px 20px 15px;
float: left;
text-align: center;
} div.img img {
display: inline;
margin: 5px;
border: 1px solid #ffffff;
}
div.img a:hover img {
border: 3px solid white;
}
div.desc {
text-align: center;
font-weight: normal;
width: 120px;
height:auto;
margin: 5px;
}
</style>
	
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.gif" alt=""></a>
			<ul>
				<li class="selected">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="">Movies</a>
					<ul>
						<li>
							<a href="nowshow.php">Now Showing</a>
						</li>
						<li>
							<a href="commingsoon.php">Comming Soon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="ticket-info.php">Ticket Info</a>
				</li>
				<li>
					<a href="rentals.php">video</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="page">
      <form id="searchForm" method="post" action="commingsearch.php">
		<fieldset>
        
           	<input name="search" id="s" type="text" />
            
            <input name="submits" type="submit" value="Submit" id="submitButton" />          
        </fieldset>
    </form>
	</div>
	
	<div id="body" class="movies">

<ul class="Movielist">
<?php

include('conn.php');
 if(isset($_POST['submits']))
                {
				$search= $_POST['search'];
				 
				if(empty($search))
				{
				echo "<font color='red'>The result is not found</font>";
				}
				else
				{
$query=mysql_query("SELECT * FROM `upcomingdetail` where(title LIKE '%$search%')");
$count=mysql_num_rows($query);
if($count==0)
{
echo "<font color='red'>The result is not found</font>";
}
while($row=mysql_fetch_array($query))
{
$id=$row['No'];
$image=$row['Image'];
$status=$row['status'];
$title=$row['title'];
$date=$row['date'];
?>

<div style=" width: 119px; height: 248px;" class="img">

<li>
  <a href=xx.php?id=<?php echo $id; ?> </a><img src="<?php echo $image;?>" border="2px solid" opacity="0.5"  width="110px" height="130px" /><?php echo"</a><br>";
	
	echo"";?><a class="image-zoom" href="<?php echo $image;?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>" ?>
                                           	
 
<div class="desc"><p style="font:'Courier New', Courier, monospace; color:red; margin-top:-35px;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"

     
	
	<?php echo "<p>".$status."<br>" ?>
	<?php echo $title."<br>" ?>
	<?php echo "Date:&nbsp;&nbsp;".$date."<br></p>" ?>
	</li>



</div>

<?php
}
}
}
?>
</ul>
	</div>
	</div>
	<div id="footer">
		<div>
			<div>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					
					<li>
						<a href="nowshow.php">Now Showing</a>
					</li>
					<li>
						<a href="commingsoon.php">Comming Soon</a>
					</li>
					<li>
						<a href="ticket-info.php">Ticket Info</a>
					</li>

					<li>
						<a href="rentals.php">video</a>
					</li>
					<li>
						<a href="about.php">Contact</a>
					</li>
					
					<li>
						<a href="blog.php">Blog</a>
					</li>

				</ul>
			</div>
			<div class="section">
				
				<span>Recent Movies hit list</span>
				<ul>
				<?php
            
             include('conn.php');
             $query=mysql_query("SELECT * FROM `moviesdetail` Order By No DESC LIMIT 2");
             while($row=mysql_fetch_array($query))
                  {
				  $No=$row['No'];
				  $title=$row['title'];
                  
            ?>
					<li>
						<p>
						<?php echo $title;?>
						</p>
						<span><a href="nowshow.php">See More</a></span>
						
					</li>
					<?php }?>
					
				</ul>
			</div>
			<div>
				<span>Sign Up For More services</span>
				<p>
					for reservation,for getting information about movies and for giving comments  sign up and you will be more than satisfied! 
				</p>
				
			</div>
			<p>
				&#169; 2015 Lem online cinema Reservation. All rights reserved!!
			</p>
			<div class="connect">
<span>Stay Connected:</span> <a href="http://www.facebook.com/" id="facebook">facebook</a> <a href="http://www.twitter.com/" id="twitter">twitter</a> <a href="http://www.googleplus.com/" id="googleplus">google+</a>			</div>
		</div>
	</div>
</body>
</html>