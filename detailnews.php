<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Blog - Cinema Theater Website Template</title>
	<link rel="stylesheet" href="css/stylelast.css" type="text/css">
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
	<div id="body" class="blog-single">
		
		<div>
		<?php

             include('conn.php');
			 
			   $news_id=$_GET['news_id'];
			   //echo $comment_id;
			   //if(isset($_POST['id']))
 
               $query=mysql_query("SELECT * FROM `news` where news_id='$news_id'");
               while($row=mysql_fetch_array($query))
                  {
				  //echo id;
				  $index=$row['index'];
                  $image=$row['image'];
				  $date=$row['date'];
                  $detail=$row['detail'];
                  //$price=$row['price'];
            ?>
	        
			<img src="<?php echo $image;?>" alt="" width="200" height="200">
			
		
	
             		
			<div>
				<h4><?php echo $index;?></h4>
				<span>Posted on <?php echo $date;?> by <a href="#">Multimedia specialist</a> 
			</div>
			<p>
			
			<?php echo $detail;?>
			</p>
			
	
	
	<?php
     }
    ?>
			
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