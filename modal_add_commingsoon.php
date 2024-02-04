	<div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add Movies</strong></div>
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Image</label>
				<div class="controls">
				<input type="file"  name="myFile" id="inputFile" required="required">
				</div>
			</div>
			
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Title</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="title" placeholder="title" required="required" pattern="[a-zA-Z]+">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Date</label>
				<div class="controls">
				<input type="date"  min="<?php echo date('Y-m-d')?>" id="inputEmail" name="date" placeholder="Title" required>
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
	
	$name = $_FILES["myFile"]["name"];
	$type = $_FILES["myFile"]["type"];
	$size = $_FILES["myFile"]["size"];
	$tmp =  $_FILES["myFile"]["tmp_name"];
	$err =  $_FILES["myFile"]["error"];
	$title=$_POST['title'];
	$date=$_POST['date'];
	$status='COMING SOON';
		
	if($type=="image/gif" || $type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" )
	{
	$ext = "jpg";
	$profile = $name;	
	mysql_query("INSERT INTO `upcomingdetail` (`No`, `Image`, `status`, `title`, `date`) VALUES('','pics/coming soon/$name','$status','$title','$date')")or die(mysql_error());
	move_uploaded_file($tmp, "pics/coming soon/".$profile);
	}
	else
	echo "<script>Alert.render('Please Insert Correct Image Formate')</script>";
    
	}
	?>