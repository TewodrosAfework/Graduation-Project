	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit News</strong></div>
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Image</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['No']; ?>" required>
                <input type="file"  name="myFile" id="inputFile" ><br>
				Current image: <img src="<?php echo $row['Image']; ?>" width="100" height="100" />
				</div>
			</div>
			
				<div class="control-group">
				<label class="control-label" for="inputEmail">Title</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="title" value="<?php echo $row['title']; ?>" required="required" pattern="[a-zA-Z]+">
				</div>
			</div>
			
				<div class="control-group">
				<label class="control-label" for="inputEmail">Date</label>
				<div class="controls">
				<input type="date"  min="<?php echo date('Y-m-d')?>" id="inputEmail" name="date" value="<?php echo $row['date']; ?>" required>
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
	$title=$_POST['title'];
	$date=$_POST['date'];
	$status='COMING SOON';
	
	if($name!="") {
	if($type=="image/gif" || $type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" )
	{
    mysql_query("update `upcomingdetail` set `Image`='pics/coming soon/$name', `status`='$status' , `title`= '$title' ,`date`= '$date'   where No='$user_id'")or die(mysql_error());
	move_uploaded_file($tmp, "pics/coming soon/".$name);
     } 
	 else
	echo "<script>Alert.render('Please Insert Correct Image Formate')</script>";
	}
          else {

    mysql_query("update `upcomingdetail` set  `status`='$status' , `title`= '$title', `date`= '$date'   where No='$user_id'")or die(mysql_error());


}
 ?>

	<?php
	echo "
		<script>
			setInterval(
				function(){	window.location='mmscoomming.php' },2000
			);
		</script>";
	}
	
	?>