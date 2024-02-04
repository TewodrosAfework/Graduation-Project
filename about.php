<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Cinema Theatre Website Template</title>
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
	<div id="body" class="about">
		<h2>About</h2>
		<div>
			<div>
				<h4>The Company</h4>
				<img src="images/cinema1.jpg" alt="" width="479" height="149">
				<h3>Recent basis of the cinema house</h3>
				<p>
				Lem cinema house, a house with full service of movies and amazing events, delightful and comfortable rooms and services that satisfies customers by the capability and modernized technology they can accomplish, visit for more information on our website.
				</p>
				<h3>We serve you as your wish</h3>
				<p>
				Movies and event rentals as you reserved and want to be, we are open 24/7 to serve with any movie kind you wish to watch, just be our guest.

				</p>
				<h3>Be a part of the excitement</h3>
				<p>
				If you are interested in having fun and excitement, make your first choice Lem cinema house we will be serving you more than you ever expected.
				</p>
				<h3></h3>
				<p>
					
				</p>
				<p>
				</p>
				<p>
				</p>
				<p>
				</p>
			</div>
			<div>
				<h4>Contact</h4>
				<img src="images/retro-telephone.jpg" alt=""> <span class="address">Cinema Theatre, 1076 Stout Street, New Holland, PA 17557</span> <span class="phone-num">717-354-7008</span> <span class="fax-num">717-354-7009</span> <span class="email">info@cinematheatre.com</span>
				
				
				<form action="" method="post">
				<?php 
				include('conn.php');
					if(isset($_POST['submits']))
					{
					//$submit=$_POST['submits'];
					$name= $_POST['name'];
					$email= $_POST['email'];
					$subject= $_POST['subject'];
					$comment= $_POST['comment'];
					$date=date("Y-m-d");
				
                    mysql_query("INSERT INTO feedback (name,email,subject,comment,date) VALUES('$name','$email','$subject','$comment','$date')")or die(mysql_error());
                    echo "<script>Alert.render('Thanks For Your Feedback')</script>";
                    }
				
				?>
				
					<label for="name"><span>Name *</span>
						<input name="name" type="text" id="name" required="required">
					</label>
					<label for="email"><span>Email *</span>
						<input name="email" type="text" id="email" required="required">
					</label>
					<label for="subject"><span>Subject</span>
						<input name="subject" type="text" id="subject" required="required">
					</label>
					<label for="comment"><span class="comment">Comment</span>
						<textarea name="comment" id="comment" cols="30" rows="10" required="required"></textarea>
					</label>
					<input name="submits" type="submit" value="">
				</form>
				
				
			</div>
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
<span>Stay Connected:</span> <a href="http://www.facebook.com/" id="facebook">facebook</a> <a href="http://www.twitter.com/" id="twitter">twitter</a> <a href="http://www.googleplus.com/" id="googleplus">google+</a>			</div>
		</div>
	</div>
</body>
</html>