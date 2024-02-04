	<div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add Comment</strong></div>
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Title</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="title" placeholder="Title" required="required" pattern="[a-zA-Z]+">
				</div>
			</div>	
		 	<div class="control-group">
				<label class="control-label" for="inputEmail">Image</label>
				<div class="controls">
				<input type="file"  name="myFile" id="inputFile" required="required">
				</div>
			</div>
         			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Index</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="index" placeholder="Index" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Detail Description</label>
				<div class="controls">
				<textarea name="comment" id="comment" cols="40" rows="10" required></textarea>
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
	$index=$_POST['index'];
	$comment=$_POST['comment'];
	$date=date("Y-m-d");
   if($type=="image/gif" || $type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" )
	{
    $ext = "jpg";
		$profile = $name;	

	//mysql_query("INSERT INTO  `moviesdescription` (`comment_id`, `image`, `description`, `date`, `detaildesc`,`commentnum`, `title`) VALUES('','images/$name','$index','$date','$comment','0','$title')")or die(mysql_error());
		mysql_query("INSERT INTO `moviesdescription` (`comment_id`, `image`, `description`, `date`, `detaildesc`, `title`) VALUES('','images/$name','$index','$date','$comment','$title')")or die(mysql_error());

	move_uploaded_file($tmp, "images/".$profile);	
    }
   else
	echo "<script>Alert.render('Please Insert Correct Image Formate')</script>";	
	}
	?>