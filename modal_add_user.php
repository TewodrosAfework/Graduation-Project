	<div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">First Name</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="first" placeholder="First Name" required="required" pattern="[a-zA-Z]+">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Last Name</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="last" placeholder="Last Name" required="required" pattern="[a-zA-Z]+">
				</div>
			</div>
			
				<div class="control-group">
				<label class="control-label" for="inputEmail">Username</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="username" placeholder="Username" required="required" >
				</div>
			</div>
			
			<div class="control-group">
			<label class="control-label" for="inputPassword">Sex:</label>
			<div class="controls">
			<select name="sex" required>
				<option></option>
				<option>Male</option>
				<option>Female</option>
			</select>
			</div>
		</div>
		
			<div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="email" placeholder="Email" required="required" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$">
				</div>
			</div>
		
		
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				<input type="password" name="password" id="inputPassword" placeholder="Password" required="required" pattern="[a-zA-Z0-9]{6,8}">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputPassword">Confirm Password</label>
				<div class="controls">
				<input type="password" name="pass" id="inputPassword" placeholder="Confirm Password" required="required" pattern="[a-zA-Z0-9]{6,8}">
				</div>
			</div>
			
				<div class="control-group">
			<label class="control-label" for="inputPassword">User type:</label>
			<div class="controls">
			<select name="type" required>
				<option></option>
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
				<option></option>
				<option>active</option>
				<option>deactivate</option>
				
			</select>
			</div>
		</div>
		
		
			
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$fname=$_POST['first'];
	$lname=$_POST['last'];
	$username=$_POST['username'];
	$sex=$_POST['sex'];
	$email=$_POST['email'];
	$pass=md5($_POST['password']);
	$repass=md5($_POST['pass']);
	$type=$_POST['type'];
	$status=$_POST['status'];
	$query=mysql_query("SELECT * FROM accounts WHERE username='$username' or email='$email'")or die("Wrong Query");
$count=mysql_num_rows($query);
if($count>=1)
       {
	   echo "<script>Alert.render('Username or Email already exist!, try another email and username')</script>";
        }
else
 {
if($pass!=$repass)
{
echo "<script>Alert.render('Invalid combination of new password and Repeat password')</script>";
}
else
{
mysql_query("insert into accounts (fname,lname,username,sex,email,password,type,status,credit) values('$fname','$lname','$username','$sex','$email','$pass','$type','$status','0')")or die(mysql_error());
}
}
}
	?>