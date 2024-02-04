	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">First Name</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['ID']; ?>" required>
				<input type="text" id="inputEmail" name="fname" value="<?php echo $row['fname']; ?>" required="required" pattern="[a-zA-Z]+">
				</div>
			</div>
			
				<div class="control-group">
				<label class="control-label" for="inputEmail">Last Name</label>
				<div class="controls">
	
				<input type="text" id="inputEmail" name="lname" value="<?php echo $row['lname']; ?>" required="required" pattern="[a-zA-Z]+">
				</div>
			</div>
			
				<div class="control-group">
				<label class="control-label" for="inputEmail">Username</label>
				<div class="controls">

				<input type="text" id="inputEmail" name="username" value="<?php echo $row['username']; ?>" required="required">
				</div>
			</div>
			
			<div class="control-group">
			<label class="control-label" for="inputPassword">Sex:</label>
			<div class="controls">
			<select name="sex" required>
				<option><?php echo $row['sex']; ?></option>
				<option>Male</option>
				<option>Female</option>
			</select>
			</div>
		</div>
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="email" value="<?php echo $row['email']; ?>" required="required" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$">
				</div>
			</div>
		
		
				<div class="control-group">
			<label class="control-label" for="inputPassword">User type:</label>
			<div class="controls">
			<select name="type" required>
				<option><?php echo $row['type']; ?></option>
				<option>Admin</option>
				<option>MMT</option>
				<option>Ticket Controller</option>
			</select>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status" required>
				<option><?php echo $row['status']; ?></option>
				<option>active</option>
				<option>deactivate</option>
				
			</select>
			</div>
		</div>
			
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){
	$user_id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$username=$_POST['username'];
	$sex=$_POST['sex'];
	$email=$_POST['email'];
	$type=$_POST['type'];
	$status=$_POST['status'];
	
	
	mysql_query("update accounts set fname='$fname', lname='$lname' , username= '$username' , sex = '$sex',email = '$email',type = '$type',status = '$status'  where ID='$user_id'")or die(mysql_error()); ?>
	<script>
	window.location="admin.php";
	</script>
	<?php
	}
	?>