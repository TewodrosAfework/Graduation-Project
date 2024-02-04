<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Cinema Theater Website Template</title>
	<link rel="stylesheet" href="css/stylelast.css" type="text/css">
	<link rel="stylesheet" href="css/style1.css" type="text/css">
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
	

	
	<div id="body" class="home">


		<div>
		
			
			<!--<div>-->
				 <div id="slider">
				 
			<?php
             include('conn.php');
             $query=mysql_query("SELECT * FROM `news` Order By news_id DESC LIMIT 6");
             while($row=mysql_fetch_array($query))
                  {
				  $news_id=$row['news_id'];
                  $image=$row['image'];
				  $index=$row['index'];
            ?>
				 
        <a href="detailnews.php?news_id=<?php echo $news_id; ?>" target="_parent"><img src="<?php echo $image;?>" alt="" title="<?php echo $index; ?>" /></a>
       

		
	<?php
     }
    ?>
		
    </div>
			<!--</div>-->
			
			
			
<center><p style="font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: white; font-weight:bolder">News</p></center>

			<ul >
			<?php
            
             include('conn.php');
			 
	
             $query=mysql_query("SELECT * FROM `news` Order By news_id DESC LIMIT 6");
             while($row=mysql_fetch_array($query))
                  {
				  $news_id=$row['news_id'];
				  $index=$row['index'];
                  
            ?>
				<li>
					<a href="detailnews.php?news_id=<?php echo $news_id; ?>"><h3><?php echo $index;?></h3> </a>
				</li>
				 
			<?php
                  }
            ?>
       		   
			</ul>
		</div>
		<div>
			<div>
				<h3><a href="rentals.php">Services are provided 24/7,contact us for more !</a></h3>
				<ul>
					<li>
						<a href=""><img src="images/conference1.jpg" alt="" width="239" height="191"></a>
						<h4>Movie show</h4>
						<p>
					         make urself ready for recently produced movies 
						</p>
					</li>
					<li>
						<a href=""><img src="images/cinema1.jpg" alt="" width="239" height="191"></a>
						<h4>Cinema Rental</h4>
						<p>
							visit us for conference,meeting and for more service 
						</p>
					</li>
				</ul>
			</div>
			<div>
				<h3><a href="blog.php">From The Blog</a></h3>
				<ul>
					<?php

             include('conn.php');
             $query=mysql_query("SELECT * FROM `moviesdescription` Order By comment_id DESC LIMIT 3");
             while($row=mysql_fetch_array($query))
                  {
				  $comment_id=$row['comment_id'];
                  $image=$row['image'];
                  $description=$row['description'];
                  $date=$row['date'];
				  
                  //$price=$row['price'];
            ?>
					<li>
						<a href="blog-single-post.php?id=<?php echo $comment_id; ?>"><img src="<?php echo $image;?>" alt="" width="159" height="95"></a>
						<div>
							<span>Posted on <?php echo $date;?> Multimedia specialist</span>
							<h4>Blog Post Title One</h4>
							<p>
								<?php echo $description; ?> <a href="blog-single-post.php?id=<?php echo $comment_id; ?>" class="more">Read More</a>
							</p>
						</div>
					</li>
			
	<?php
     }
    ?>
				</ul>
			</div>
		</div>
	</div>
	
	
    <div id="external">
	  <a href="http://www.google.com"> <img src="images/google.jpg" width="40" height="40" name="google"
       onmouseover="google.width='50';image_name.height='40';"
       onmouseout="google.width='40';image_name.height='40';" /></a>

       <a href="http://www.youtube.com"><img src="images/youtube.jpg" width="40" height="40" name="youtube"
       onmouseover="youtube.width='50';image_name.height='40';"
       onmouseout="youtube.width='40';image_name.height='40';" /></a>
	   <a href="http://www.twitter.com/"><img src="images/twitter.jpg" width="40" height="40" name="twitter"
       onmouseover="twitter.width='50';image_name.height='40';"
       onmouseout="twitter.width='40';image_name.height='40';" /></a>
	   <a href="http://www.facebook.com/"><img src="images/facebook.jpg" width="40" height="40" name="facebook"
      onmouseover="facebook.width='50';image_name.height='40';"
      onmouseout="facebook.width='40';image_name.height='40';" /></a>
	
	
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
				<span>Stay Connected:</span> <a href="http://www.facebook.com/" id="facebook">facebook</a> <a href="http://www.twitter.com/" id="twitter">twitter</a> <a href="http://www.googleplus.com/" id="googleplus">google+</a>
			</div>
		</div>
	</div>
</body>
</html>