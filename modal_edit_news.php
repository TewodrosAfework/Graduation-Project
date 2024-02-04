	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit News</strong></div>
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Index</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['news_id']; ?>" required="required">
				<input type="text" id="inputEmail" name="index" value="<?php echo $row['index']; ?>"  required="required">
				</div>
			</div>
			
				<div class="control-group">
				<label class="control-label" for="inputEmail">Image</label>
				<div class="controls">
	            <input type="file"  name="myFile" id="inputFile" ><br>
				Current image: <img src="<?php echo $row['image']; ?>" width="100" height="100" />

				</div>
			</div>
			
				<div class="control-group">
				<label class="control-label" for="inputEmail">Detail Description</label>
				<div class="controls">
                 <textarea name="comment" id="comment" cols="40" rows="10"  required="required"><?php echo $row['detail']; ?></textarea>
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
	$user_id=$_POST['id'];
	$index=$_POST['index'];
	$date=date("Y-m-d");
	$comment=$_POST['comment'];
	
	if($name!="") {
	if($type=="image/gif" || $type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" )
	{
    mysql_query("update `news` set `index`='$index', `image`='images/slideshow/$name' , `date`= '$date' , `detail`= '$comment' where news_id='$user_id'")or die(mysql_error());
	move_uploaded_file($tmp, "images/slideshow/".$name);
	}
	
	else
	echo "<script>Alert.render('Please Insert Correct Image Formate')</script>";

    
	}
          else {

    mysql_query("update `news` set `index`='$index',`date`= '$date' , `detail`= '$comment' where news_id='$user_id'")or die(mysql_error());
             }
			 
 ?>
 

	<?php
		echo "
		<script>
			setInterval(
				function(){	window.location='mms.php' },2000
			);
		</script>";
	}
	?>