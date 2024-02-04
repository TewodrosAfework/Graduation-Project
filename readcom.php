<?php include('header.php'); ?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Movies - Cinema Theater Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/alertbox.css"/>
    <script src="script/alertbox3.js"></script>
	<style type="text/css">



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
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			<ul>
				<li>
					<a href="index.php"></a>
				</li>
				<li class="selected">
					<a href="admin.php">User</a>
					
				</li>
				<li>
					<a href="">Approve</a>
					<ul>
						<li>
							<a href="changestatus.php">Seat Approve</a>
						</li>
						<li>
							<a href="deleteseat.php">Delete Approve</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="changepass.php">Change Password</a>
				</li>
				<li>
					<a href="generate.php">Card Generate</a>
				</li>
				
				<li>
					<a href="logout.php.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="moviesx">
	<div class="margin-top">
	<div class="row">	
			
			<div class="span10">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Feedback Table</strong>
                                </div>
								
                                <thead>
                                    </br></br>
									<tr>                                        
                                                                                              
                                                                               


                                        <th>NAME</th>
                                        <th>EMAIL</th>                                 
                                        <th>SUBJECT</th>                                 
                                        <th>COMMENT</th>
                                        <th>DATE</th>										
                                        <th>ACTION</th>
										
										
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php
								  $lem=mysql_connect("localhost","root","");
if(!$lem)
{
die('Could not connect:'.mysql_error());
}
mysql_select_db("lemreservation", $lem);
								  
								   $user_query=mysql_query("select * from feedback")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['feedback_id']; ?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['name']; ?></td> 
                                    <td><?php echo $row['email']; ?></td> 
                                    <td><?php echo $row['subject']; ?></td>
                                    <td><?php echo $row['comment']; ?></td> 
									<td><?php echo $row['date']; ?></td> 
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_user<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_feedback_modal.php'); ?>
									</td>
									<?php //include('toolttip_edit_delete.php'); ?>
									     <!-- Modal edit user -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
								
 			
			</div>		
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
				<form action="index.php">
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