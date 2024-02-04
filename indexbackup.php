<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Cinema Theater Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="script/jquery.min.js" type="text/javascript"></script>
<script src="script/jquery.nivo.slider.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:2000,
		startSlide:0, // Set starting Slide (0 index)
		directionNav: false, // Next and Prev
		directionNavHide:false, // Only show on hover
		controlNav:false, // 1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>
<body>

<div id="login">
		&nbsp;&nbsp;<p style="font-size: 4px;">&nbsp;</p>
		<div id="sublogin">
			
			<form method="POST" action="check.php">
<input class="textbox" type="text" name="email" autocomplete="on" required="required" placeholder="Email Address" /> 
<br /><p style="font-size: 6px;">&nbsp;</p>

<input class="textbox" type="password" name="pass" required="required" placeholder="Password" /> 
<br /><br />

<input type="submit" name="login" class="submit" value="Submit"/>

<a href="recovery.php" class="loginLink">Forgot Password?</a>
<br />

<a href="register.php" class="loginLink">Register New Account</a>
</form>
		</div> <!--#sublogin-->
		</div> <!--#login-->	

	<div id="header">
	
	
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			<ul>
				<li class="selected">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="movies.php">Movies</a>
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
	

	
	<div id="body" class="home">


		<div>
			<!--<div>-->
				 <div id="slider">
        <a href="http://www.templatemo.com/page/1" target="_parent"><img src="images/slideshow/Hydrangeas.jpg" alt="01" title="News one." /></a>
        <a href="http://www.templatemo.com/page/2" target="_parent"><img src="images/slideshow/02.jpg" alt="02" title="News Two." /></a>
        <a href="http://www.templatemo.com/page/3" target="_parent"><img src="images/slideshow/03.jpg" alt="03" title="News Three." /></a>
        <a href="http://www.templatemo.com/page/4" target="_parent"><img src="images/slideshow/04.jpg" alt="04" title="News Four." /></a>
        <a href="http://www.templatemo.com/page/5" target="_parent"><img src="images/slideshow/05.jpg" alt="05" title="News Five." /></a>
    </div> 
			<!--</div>-->
			
			
			
			
			<ul>
				<li>
					<h3>News one</h3>
					
				</li>
				
				<li>
					<h3>News Two</h3>
					
				</li>
				
				<li>
					<h3>News There</h3>
				</li>
				
				<li>
				
					<h3>News Four</h3>
					
				</li>
				
				<li>
					<h3>News Five</h3>
					
				</li>
				<li>
					<h3>News Six</h3>
					
				</li>
				
				<li>
					<h3>News Seven</h3>
				</li>
				
				<li>
				
					<h3>News Eight</h3>
					
				</li>
				
				<li>
					<h3>News Nine</h3>
					
				</li>
			</ul>
		</div>
		<div>
			<div>
				<h3><a href="rentals.php">Rental Services</a></h3>
				<ul>
					<li>
						<a href="rentals.php"><img src="images/conference.jpg" alt=""></a>
						<h4>Conference Rooms</h4>
						<p>
							In sed nibh mauris. Curabitur scelerisque dignissim viverra. Etiam interdum enim nec turpis.
						</p>
					</li>
					<li>
						<a href="rentals.php"><img src="images/cinema.jpg" alt=""></a>
						<h4>Cinema Rental</h4>
						<p>
							Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum.
						</p>
					</li>
				</ul>
			</div>
			<div>
				<h3><a href="blog.php">From The Blog</a></h3>
				<ul>
					<li>
						<a href="blog.php"><img src="images/trainor.jpg" alt=""></a>
						<div>
							<span>Posted on August 8, 2023 by Admin</span>
							<h4>Blog Post Title One</h4>
							<p>
								Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum. <a href="blog.php" class="more">Read More</a>
							</p>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/lava.jpg" alt=""></a>
						<div>
							<span>Posted on August 8, 2023 by Admin</span>
							<h4>Blog Post Title Two</h4>
							<p>
								Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum. <a href="blog.php" class="more">Read More</a>
							</p>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/castle.jpg" alt=""></a>
						<div>
							<span>Posted on August 8, 2023 by Admin</span>
							<h4>Blog Post Title One</h4>
							<p>
								Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum. <a href="blog.php" class="more">Read More</a>
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	
    <div id="external">
	  <a href="www.google.com"> <img src="images/google.jpg" width="60" height="40" name="google"
       onmouseover="google.width='100';image_name.height='40';"
       onmouseout="google.width='60';image_name.height='40';" /></a>

       <a href="www.youtube.com"><img src="images/youtube.jpg" width="60" height="40" name="youtube"
       onmouseover="youtube.width='100';image_name.height='40';"
       onmouseout="youtube.width='60';image_name.height='40';" /></a>
	   <a href="www.twitter.com"><img src="images/twitter.jpg" width="60" height="40" name="twitter"
       onmouseover="twitter.width='100';image_name.height='40';"
       onmouseout="twitter.width='60';image_name.height='40';" /></a>
	   <a href="http://freewebsitetemplates.com/go/facebook/"><img src="images/facebook.jpg" width="60" height="40" name="facebook"
      onmouseover="facebook.width='100';image_name.height='40';"
      onmouseout="facebook.width='60';image_name.height='40';" /></a>
	
	
    </div>
	<div id="indexfooter">
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
				<form action="about.php">
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