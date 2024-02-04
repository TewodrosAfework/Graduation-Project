<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Ticket Info - Cinema Theater Website Template</title>
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
	<div id="body" class="ticket-info">
		<h2>Ticket Info</h2>
		<div class="section">
			<div class="first">
				<h3>Ticket Pricing</h3>
				<span>VIP: <span>Birr 100</span></span> <span>Normal: <span>Birr 50</span></span><span>
			</div>
			<div class="second">
				<h3>Ticket Promos</h3>
				<h4>
                Get a ticket now,
				Full time Entertainment 24/7!
				</h4>
			</div>
			<div class="last">
				<h3>How To buy A Ticket</h3>
				<div>
					<span>1</span>
					<div>
						<p>
						You can buy a ticket in person in case for services provided by the cinema house other than the website on line services
						</p>
					</div>
				</div>
				<div>
					<span>2</span>
					<div>
						<p>
							You can buy a ticket by getting an account from our website fee for the ticket or buy the scratch able cards for watching your must see movies
						</p>
					</div>
				</div>
				<div>
					<span>3</span>
					<div>
						<p>
							You can buy a ticket,fee for it to a nearby bank and debit the fee to the cinema house account all you need to do then is,attach the recite to the cinema house  .
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="article">
			<h3>Rules and Regulations</h3>
			<ol>
				<li>
					<p>
					One person can reserves 5 seats for one movie.reserve the seats for friends,family
                    and enjoy your times of happiness.					
					</p>
				</li>
				<li>
					<p>
					Customers must come up with your own tickets.you will get full services of the cinema house for having one.having a full service is a least you deserve!
					</p>
				</li>
				<li>
					<p>
					To get all service the customer must create account.the account makes you get the services provided by the cinema house.movies,conferences and meeting are some of the services you get
					</p>
				</li>
				<li>
					<p>
						Cancellation of any reservation from the cinema house are likely possible for any change plans and postpone.
					</p>
				</li>
			</ol>
		</div>
		<div class="news">
			<h3>visit more,get a ticket !</h3>
			<img src="images/cinema1.jpg" alt="" width="479" height="149">
			<ol>
				<li>
					<p>
					create an account and become a member to get a service of the cinema house. 
					</p>
				</li>
				<li>
					<p>
                     Get a ticket to watch ur favourite movies.
					</p>
				</li>
				<li>
					<p>
					pay your fee by visiting the nearby bank and debit to the cinema house account.
					</p>
				</li>
				<li>
					<p>
                     Buy the scrach able cards for watching your favourite movies and make your days unforgettable 
					</p>
				</li>
				
			</ol>
			<?php
				mysql_connect("localhost","root","");
				mysql_select_db("lemreservation");
				$res=mysql_query("select * from membership");
				
				while($row=mysql_fetch_array($res))
				$path=$row["path"];
				?>
			    <a href="<?php echo $path;  ?>">Download</a>
			
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