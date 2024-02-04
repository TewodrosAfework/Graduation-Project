	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit Video</strong></div>
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Title</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['video_id']; ?>" required>
				<input type="text" id="inputEmail" name="title" value="<?php echo $row['video_title']; ?>" required="required" pattern="[a-zA-Z]+">
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Image</label>
				<div class="controls">
	            <input type="file"  name="myFile" id="inputFile" ><br>
				Current image: <img src="<?php echo "video/".$row['profile']; ?>" width="100" height="100" />
				</div>
			</div>	
			<div class="control-group">
				<label class="control-label" for="inputEmail">Video</label>
				<div class="controls">
				<input type="file"  name="video" id="inputFile" >
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
	$user_id=$_POST['id'];
	
	$title=$_POST['title'];
	
	$date=date("Y-m-d");
	
	if($name!="" && $vname!="") {
    mysql_query("update `video` set `video_title`='$title', `location`='$vname' , `profile`= '$name' , `date`= '$date' where video_id='$user_id'")or die(mysql_error());
	move_uploaded_file($tmp, "video/".$name);
	move_uploaded_file($tmp, "video/".$vname);
     } 
	 else if($name!="" && $vname == "")
	 {
	mysql_query("update `video` set `video_title`='$title',`profile`= '$name' , `date`= '$date' where video_id='$user_id'")or die(mysql_error());
	move_uploaded_file($tmp, "video/".$name);
	}
	else if($name == "" && $vname!="")
	{
	mysql_query("update `video` set `video_title`='$title',`location`='$vname', `date`= '$date' where video_id='$user_id'")or die(mysql_error());
	move_uploaded_file($tmp, "video/".$vname);
	}
     else {
    mysql_query("update `video` set `video_title`='$title' , `date`= '$date' where video_id='$user_id'")or die(mysql_error());
          }
 ?>
	<script>
	window.location="video1.php";
	</script>
	<?php
	}
	?>