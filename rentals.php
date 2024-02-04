<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Ticket Info - Cinema Theater Website Template</title>
	
	<link rel="stylesheet" href="colorbox.css" />
    <script src="script/jqueryy.min.js"></script>
    <script src="script/jquery.colorbox-min.js"></script>
	
	
	
	<link rel="stylesheet" href="css/stylelast.css" type="text/css">
	<link href="css/style1.css" rel="stylesheet" type="text/css" />
	<link href="searchform.css" rel="stylesheet" type="text/css" />
	
	<script>
            $(document).ready(function(){
                $(".iframe").colorbox({iframe:true, fastIframe:false, width:"700px", height:"364px", transition:"fade", scrolling   : false});
            });
        </script>		
		
		<style>
            
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
	
	 
		
	<div id="body" class="rentals">
	<div id="page">
    <form id="searchForm" method="post" action="searchvideo.php">
		<fieldset>
        
           	<input name="search" id="s" type="text" />
            
            <input name="submits" type="submit" value="Submit" id="submitButton" />          
        </fieldset>
    </form>
	</div>
		 <div class="content">
         
          <ul class="movies">
		  
		  <?php

             include('conn.php');
             $query=mysql_query("SELECT * FROM `video`");
             while($row=mysql_fetch_array($query))
                  {
				  $video_id=$row['video_id'];
                  $video_title=$row['video_title'];
                  $profile=$row['profile'];
                  
                  //$price=$row['price'];
            ?>
            <li>
              <a class='iframe' href='http://localhost/cinema/video.php?video_id=<?php echo $video_id; ?>'><img src='video/<?php echo $profile; ?>' alt='' width="289" height="190"/></a>
              <h4 style="color:white"><?php echo $video_title;?></h4>
			  <!--class='iframe' href='http://localhost/cinema/may.php?userid=$row[Id]'-->
			</li>            
	<?php
     }
    ?>
          </ul>
        </div>
	</div>
	<div id="videofooter">
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
<span>Stay Connected:</span> <a href="http://www.facebook.com/" id="facebook">facebook</a> <a href="http://www.twitter.com/" id="twitter">twitter</a> <a href="http://www.googleplus.com/" id="googleplus">google+</a>			</div>
		</div>
	</div>
</body>
</html>