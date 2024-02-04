<?php
include("session.php"); 
include('header.php'); 
?>
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
			<a href="index.php" id="logo"><img src="images/logo.gif" alt=""></a>
			<ul>
				<li>
					<a href="index.php"></a>
				</li>
				<li class="selected">
					<a href="admin.php">User</a>
					
				</li>
				<li>
					<a href="admincancel.php">Seat Cancel</a>
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
					<a href="adminchangepass.php">Change Password</a>
				</li>
				<li>
					<a href="generate.php">Card Generate</a>
				</li>
				
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="moviesx">
	<div class="margin-top">
	<div class="row">	
			<div class="span2">			     
										<ul class="nav nav-tabs nav-stacked">
											<li>
											<a href="#add_user" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Add User</strong></a>
											</li>
										</ul>
										
										 
     <!-- Modal add user -->
	<?php include('modal_add_user.php'); ?>
										
			</div>
			<div class="span10">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Users Table</strong>
                                </div>
								
                                <thead>
                                    </br></br>
									<tr>                                        
                                                                                              
                                                                               


                                        <th>FNAME</th>
                                        <th>LNAME</th>                                 
                                        <th>USERNAME</th>                                 
                                        <th>SEX</th>
                                        <th>EMAIL</th>
										<th>TYPE</th>
										<th>STATUS</th>										
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
								  
								   $user_query=mysql_query("select * from accounts")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['ID']; ?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['fname']; ?></td> 
                                    <td><?php echo $row['lname']; ?></td> 
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['sex']; ?></td> 
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['type']; ?></td>
									<td><?php echo $row['status']; ?></td>
									
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_user<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_user_modal.php'); ?>
										<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    	<?php include('modal_edit_user.php'); ?>
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
						<a href="admin.php">User</a>
					</li>
					<li>
						<a href="changestatus.php">Seat Approval</a>
					</li>
					<li>
						<a href="deleteseat.php">Delete Seat</a>
					</li>
					<li>
						<a href="adminchangepass.php">Change Password</a>
					</li>
					<li>
						<a href="generate.php">Card Generate</a>
					</li>
					
				</ul>
			</div>
			<div class="section">
				<span>Things you have to remember </span>
				<ul>
					<li>
						<p>
							Don't tell Your password to another person
						</p>
						<span></span>
					</li>
					<li>
						<p>
							Don't forget to logout for your account
						</p>
						<span></span>
					</li>
				</ul>
			</div>
			<div>
				<span>Wel Come to admin Page</span>
				<p>
					This page help's you to do your job.have nice job!!
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