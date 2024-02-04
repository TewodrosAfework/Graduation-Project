	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Ticket_Number</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['ID']; ?>" required>
				<input readonly type="text" id="inputEmail" name="fname"  value="<?php echo $row['Ticket_Number']; ?>" required>
				</div>
			</div>
			
				<div class="control-group">
				<label class="control-label" for="inputEmail">Username</label>
				<div class="controls">
	
				<input readonly type="text" id="inputEmail" name="lname" value="<?php echo $row['username']; ?>" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Title</label>
				<div class="controls">
				<input readonly type="text" id="inputEmail" name="email" value="<?php echo $row['Title']; ?>" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Price</label>
				<div class="controls">
				<input readonly type="text" id="inputEmail" name="email" value="<?php echo $row['price']; ?>" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Time</label>
				<div class="controls">
				<input readonly type="text" id="inputEmail" name="email" value="<?php echo $row['Time']; ?>" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Date</label>
				<div class="controls">
				<input readonly type="text" id="inputEmail" name="email" value="<?php echo $row['date']; ?>" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">penality</label>
				<div class="controls">
				<input readonly type="text" id="inputEmail" name="email" value="<?php echo $row['penality']; ?>" required>
				</div>
			</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status" required>
				<option><?php echo $row['ticket_status']; ?></option>
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
	$status=$_POST['status'];
	
	
	
	mysql_query("update cancel set ticket_status='$status' where ID='$user_id'")or die(mysql_error()); ?>
	<script>
	window.location="admincancel.php";
	</script>
	<?php
	}
	?>