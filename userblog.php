<?php
include("session.php");
?>
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
				<li>
					<a href="user.php">Movies</a>
				</li>
				
				<li>
					<a href="card.php">Card</a>
				</li>
				<li>
					<a href="cancelchoose.php">Seat Cancel</a>
				</li>
				<li>
					<a href="userblog.php">Blog</a>
				</li>
				<li>
					<a href="changepassword.php">Change Password </a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="blog">
		
		<ul>
		
			<?php

             include('conn.php');
             $query=mysql_query("SELECT * FROM `moviesdescription`");
             while($row=mysql_fetch_array($query))
                  {
				  $comment_id=$row['comment_id'];
                  $image=$row['image'];
                  $description=$row['description'];
                  $date=$row['date'];
				  $commentnum=$row['commentnum'];
				  $title=$row['title'];
                  //$price=$row['price'];
            ?>	
			<li>
				<a href="user-single-post.php?id=<?php echo $comment_id; ?>"><img src="<?php echo $image;?>" alt="" width="200" height="200"></a>
				<div>
					<div>
						<h4><a href=""><?php echo $title; ?></a></h4>
						<span>Posted on <?php echo $date;?> by <a href="#">Multimedia specialist</a></span> <a href=""><?php echo $commentnum;?> Comments</a>
					</div>
					<p>
					<?php echo $description;?>
					</p>
					<a href="user-single-post.php?id=<?php echo $comment_id; ?>">Read More</a>
				</div>
			</li>
		
	<?php
     }
    ?>
		</ul>
	
    
	
	
		
		<div class="section">
			<!--<a href="#">&#60; Older Posts</a> <a href="#">Newer Posts &#62;</a>-->
		</div>
	</div>
	<div id="footer">
		<div>
			<div>
				<span>Quick Links</span>
				<ul>
				<li>
					<a href="user.php">Movies</a>
				</li>
				
				<li>
					<a href="card.php">Card</a>
				</li>
				<li>
					<a href="cancel.php">Seat Cancel</a>
				</li>
				<li>
					<a href="userblog.php">Blog</a>
				</li>
				<li>
					<a href="changepassword.php">Change Password </a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
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
				<span>Well Come to Our Page</span>
				<p>
					You can reservation,getting information about movies and  giving comments  to movies!! 
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