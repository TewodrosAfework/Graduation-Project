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
	<link rel="stylesheet" type="text/css" href="css/alertbox.css"/>
    <script src="script/alertbox3.js"></script>
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
	<div id="body" class="blog-single">
		
		<?php 
			     include('conn.php');
				 $counter=0;
			     if(isset($_POST['Submits']) && $counter>=0)
               {
			   //  $_GET['id']; 
			   //$number_of_rows = mysql_num_rows(mysql_query("SELECT * FROM mcomments WHERE name='$name' AND id='$id'"));
			 $commentid=$_GET['id'];
			     
			      $name=$login_session;
			      $comment= $_POST['comment'];
				  $date=date("Y-m-d");
              	  $time=date("H:i a");
			      $image='images/user.jpg';
				  $result = mysql_query("SELECT commentnum FROM moviesdescription where comment_id='$commentid'");
				  
				 while($row = mysql_fetch_array($result))
	                   {
	             $commentnum=$row['commentnum'];
	                   }
	                $number=$commentnum+1;
				  mysql_query("update moviesdescription set commentnum='$number' where comment_id= '$commentid' ")or die(mysql_error());
				  $insert="INSERT INTO mcomments(name,comment,date,time,moviesid,image) VALUES('$name','$comment','$date','$time','$commentid','$image')";
			   mysql_query( $insert) or die(mysql_error());
			   
			  $counter++;
			   
			   }
				//header("Location:user-single-post.php");
				

			?>
		
		
		<div>
		<?php

             include('conn.php');
			 
			   $comment_id=$_GET['id'];
			   //echo $comment_id;
			   //if(isset($_POST['id']))
 
               $query=mysql_query("SELECT * FROM `moviesdescription` where comment_id='$comment_id'");
               while($row=mysql_fetch_array($query))
                  {
				  //echo id;
				  $comment_id1=$row['comment_id'];
                  $image=$row['image'];
                  $description=$row['description'];
				  $detaildesc=$row['detaildesc'];
                  $date=$row['date'];
				   $title=$row['title'];
                  //$price=$row['price'];
            ?>
	
			<img src="<?php echo $image;?>" alt="" width="200" height="200">
			<div>
				<h4><?php echo $title;?></h4>
				<span>Posted on <?php echo $date;?> by <a href="#">Multimedia specialist</a> 
			</div>
			<p>
			<?php echo $detaildesc;?>
			</p>
			
			<div class="comment">
			<?php
			
             $comment_id=$_GET['id'];
             include('conn.php');
			 
			$querys=mysql_query("SELECT * FROM `mcomments` where moviesid='$comment_id  '");
			if($querys === FALSE) { 
                       die(mysql_error()); // TODO: better error handling
                                  }
               while($row=mysql_fetch_array($querys))
                  {
				  //echo id;
				  //$comment_id1=$row['comment_id'];
                  $name=$row['name'];
                  $comment=$row['comment'];
				  $date=$row['date'];
                  $time=$row['time'];
				  $image1=$row['image'];
                  //$price=$row['price'];
            ?>
				<span></span>
				<p>
					<img src="<?php echo $image1;?>" alt=""> <span><?php echo $name;?> <?php echo $date;?> at <?php echo $time; ?> </span> <?php echo $comment;?>
				</p>
				<a href="#"></a> <span></span>
				<?php
                  }
				  ?>
			</div>
	
	
	<?php
     }
    ?>       
			<form action="user-single-post.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<div>
					<label for="comment">Comment</label>
					<textarea name="comment" id="comment" cols="30" rows="20" required></textarea>
					<input type="submit" value="" name="Submits">
				</div>
				
			</form>
			
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