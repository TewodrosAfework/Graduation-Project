<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Movies - Cinema Theater Website Template</title>
	<link rel="stylesheet" href="css/stylelast.css" type="text/css">
	<link rel="stylesheet" href="css/style1.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/alertbox.css"/>
    <script src="script/alertbox3.js"></script>
	<style>
			
	</style>


	
</head>
<body>
<div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>
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
	<div id="body" class="rentals">
<p style="font-family: Berlin Sans FB Demi; font-weight:bolder;font-size: 30px; text-shadow: rgb(255, 0, 0) 6px 5px 5px; text-align: center; color: white;">Choose Your Payment
</p>
        
		<?php
		  
        ?>
          <ul class="moviess">
          
            <li>
             
              <div class="wrapper"><a href="recitecancel.php" class="link2"><span><span>Recite</span></span></a></div>
            </li>
            <li class="last">
              
              <div class="wrapper"><a href="cancel.php" class="link2"><span><span>Card</span></span></a></div>
            </li>
            <li class="clear">&nbsp;</li>
          </ul>
            

		 </div>
		 
          </div>
		
	</div>
	<div id="videofooter">
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
					<a href="userblog.php">Blog</a>
				</li>
				<li>
					<a href="changepassword.php">Password </a>
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