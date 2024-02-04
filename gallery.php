<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Movies - Cinema Theater Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script type="text/javascript" src="js1/sagallery.js"></script>
    <script src="js1/script.js" type="text/javascript"></script>
    <script src="js1/jquery.prettyPhoto.js" type="text/javascript"></script> 
    <link href="prettyPhoto.css" rel="stylesheet" type="text/css" />
	 
	 
        
	
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
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="selected">
					<a href="movies.php">Movies</a>
					<ul>
						<li class="selected">
							<a href="#">Now Showing</a>
						</li>
						<li>
							<a href="#">Comming Soon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="ticket-info.php">Ticket Info</a>
				</li>
				<li>
					<a href="rentals.php">Rentals</a>
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
	<div id="body" class="movies">

<ul class="Movielist">
<?php

include('conn.php');
$query=mysql_query("SELECT * FROM `moviesdetail`");
while($row=mysql_fetch_array($query))
{
$id=$row['No'];
$image=$row['image'];
$status=$row['status'];
$title=$row['title'];
//$price=$row['price'];
?>

<div style=" width: 119px; height: 248px;" class="img">

<li>
 <a  href="movies.php?id=<?php echo $id; ?>" ><img src="<?php echo $image;?>" border="2px solid" opacity="0.5"  width="110px" height="130px" /><?php echo"</a><br>";
	
	echo"";?><a class="image-zoom" href="<?php echo $image;?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>" ?>
                                           	
 
<div class="desc"><p style="font:'Courier New', Courier, monospace; color:red;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"

     
	
	<?php echo "<p>".$status."<br>" ?>
	<?php echo $title."<br>" ?>
	</li>



</div>

<?php
}
?>
</ul>
	</div>
	</div>
	<div id="footer">
		<div>
			<div>
				<span>Quick Links</span>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="ticket-info.php">Ticket Info</a>
					</li>
					<li>
						<a href="#">Location</a>
					</li>
					<li>
						<a href="movies.php">Now Showing</a>
					</li>
					<li>
						<a href="rentals.php">Rentals</a>
					</li>
					<li>
						<a href="about.php">Contact</a>
					</li>
					<li>
						<a href="movies.php">Comming Soon</a>
					</li>
					<li>
						<a href="about.php">The Company</a>
					</li>
					<li>
						<a href="blog.php">Blog</a>
					</li>
				</ul>
			</div>
			<div class="section">
				<span>Recent Tweets</span>
				<ul>
					<li>
						<p>
							Sed id mattis tellus. Proin egestas velit vel neque placerat sed interdum neque porta.
						</p>
						<span><a href="#">- 1 day ago</a></span>
					</li>
					<li>
						<p>
							Praesent at urna ac urna congue convallis.
						</p>
						<span><a href="#">- 2 day ago</a></span>
					</li>
				</ul>
			</div>
			<div>
				<span>Sign Up For Our Mailing List</span>
				<p>
					Praesent at urna ac urna congue convallis. Maecenas sed placerat turpis. Duis in dolor ut nibh molestie faucibus.
				</p>
				<form action="index.php">
					<input type="text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Enter Email Address Here':this.value;" value="Enter Email Address Here">
					<input type="submit" value="">
				</form>
			</div>
			<p>
				&#169; 2023 Cinema Theatre
			</p>
			<div class="connect">
				<span>Stay Connected:</span> <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a> <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">google+</a>
			</div>
		</div>
	</div>
</body>
</html>