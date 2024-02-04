	<div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add video</strong></div>
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Title</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="title" placeholder="title" required="required" pattern="[a-zA-Z]+">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Image</label>
				<div class="controls">
				<input type="file"  name="myFile" id="inputFile" required="required">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Video</label>
				<div class="controls">
				<input type="file"  name="video" id="inputFile" required="required">
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
	
	$vname = $_FILES["video"]["name"];
	$vtype = $_FILES["video"]["type"];
	$vsize = $_FILES["video"]["size"];
	$vtmp =  $_FILES["video"]["tmp_name"];
	$verr =  $_FILES["video"]["error"];
	
	$title=$_POST['title'];
	
	$date=date("Y-m-d");
		
	if($type=="image/gif" || $type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $vtype=="video/mp4" )
	{
	$ext = "jpg";
		$profile = $name;
		$vprofile = $vname;		
	mysql_query("INSERT INTO `video` (`video_id`, `video_title`, `location`, `profile`, `date`) VALUES('','$title','$vname','$name','$date')")or die(mysql_error());
	move_uploaded_file($tmp, "video/".$profile);
	move_uploaded_file($tmp, "video/".$vprofile);
	
	}
	else
	echo "<script>Alert.render('Please Insert Correct  Formate')</script>";
	}
	
	
	
	?>