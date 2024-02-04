<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Movies - Cinema Theater Website Template</title>
	<link rel="stylesheet" href="css/stylelast.css" type="text/css">
	
	<link rel="stylesheet" href="colorbox.css" />
     <script src="script/jqueryy.min.js"></script>
     <script src="script/jquery.colorbox-min.js"></script>

        <script>
            $(document).ready(function(){
                $(".iframe").colorbox({iframe:true, fastIframe:false, width:"1000px", height:"700px", transition:"fade", scrolling   : false});
            });
        </script>
		
		<style>
            #cboxOverlay{ background:#666666; }
        </style>
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
	</div>
	<div id="body" class="movies">
		<h2>Movies</h2>
		<ul>
		<?php
           include('conn.php');
		   $id=$_GET['id'];
           $query=mysql_query("SELECT * FROM `moviesdetail` where No='$id'");
		   {
		   $row=mysql_fetch_array($query);
         ?>
			<li>
				<a href="movie-details.php"><img src="<?php echo $row['image'];?>" alt="" width="240" height="200"></a>
				<h3><?php echo $row['title'];?></h3>
				<p>
				Release Date:</br>
				<?php echo $row['ReleaseDate'];?></br></br>
				Duration:</br>
				<?php echo $row['Duration'];?></br></br>  
				Director:</br>
				<?php echo $row['director'];?></br></br> 
                Genre:</br>
				<?php echo $row['genre'];?></br></br> 
                Cast and Crew:</br>
				<?php echo $row['castandcrew'];?> 				


				
                 				

				</p>
				
			</li>
			<li>
				<h3><?php echo $row['date1'];?></h3>
				<h3> <a class='iframe' href="http://localhost/cinema/choose.php?id=<?php echo $id; ?>&date=<?php echo $row['date1']; ?>&time=<?php echo $row['time1']; ?>"><?php echo $row['time1'];?></a></h3>
				
				
			</li>
			<li>
				<h3><?php echo $row['date2'];?></h3>
				<h3> <a class='iframe' href="http://localhost/cinema/choose.php?id=<?php echo $id; ?>&date=<?php echo $row['date2']; ?>&time=<?php echo $row['time2']; ?>"><?php echo $row['time2'];?></a></h3>
				
			</li>
			<li>
				<h3><?php echo $row['date3'];?></h3>
				<h3> <a class='iframe' href="http://localhost/cinema/choose.php?id=<?php echo $id; ?>&date=<?php echo $row['date3']; ?>&time=<?php echo $row['time3']; ?>"><?php echo $row['time3'];?></a></h3>
			</li>
			<?php
			}
			?>
		</ul>
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