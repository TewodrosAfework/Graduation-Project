	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit Movies</strong></div>
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Image</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['No']; ?>" required>
                <input type="file"  name="myFile" id="inputFile" ><br>
				Current image: <img src="<?php echo $row['image']; ?>" width="100" height="100" />

				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Title</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="title" value="<?php echo $row['title']; ?>" required="required" pattern="[a-zA-Z]+">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Date1</label>
				<div class="controls">
				<input type="date"  min="<?php echo date('Y-m-d')?>" id="inputEmail" name="date1" value="<?php echo $row['date1']; ?>" required>
				</div>
			</div>
			
				<div class="control-group">
			<label class="control-label" for="inputPassword">Time1:</label>
			<div class="controls">
	       <input type="time"   id="inputEmail" name="time1" value="<?php echo $row['time1']; ?>" required>

			</div>
		</div>
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Date2</label>
				<div class="controls">
				<input type="date" min="<?php echo date('Y-m-d')?>" id="inputEmail" name="date2"  value="<?php echo $row['date2']; ?>" required>
				</div>
			</div>
			
				<div class="control-group">
			<label class="control-label" for="inputPassword">Time2:</label>
			<div class="controls">
			       <input type="time"   id="inputEmail" name="time2" value="<?php echo $row['time2']; ?>" required>
			</div>
		</div>
		
			<div class="control-group">
				<label class="control-label" for="inputEmail">Date3</label>
				<div class="controls">
				<input type="date" id="inputEmail" name="date3" value="<?php echo $row['date3']; ?>" required>
				</div>
			</div>
			
				<div class="control-group">
			<label class="control-label" for="inputPassword">Time3:</label>
			<div class="controls">
					       <input type="time"   id="inputEmail" name="time3" value="<?php echo $row['time3']; ?>" required>
			</div>
		</div>
		
			<div class="control-group">
				<label class="control-label" for="inputEmail">Release Date</label>
				<div class="controls">
				<input type="date"  max="<?php echo date('Y-m-d')?>" id="inputEmail" name="release" value="<?php echo $row['ReleaseDate']; ?>" required>
				</div>
			</div>
			
		<div class="control-group">
				<label class="control-label" for="inputEmail">Duration</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="duration" value="<?php echo $row['Duration']; ?>" required="required" pattern="[0-9:]+">
				</div>
		</div>
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Director</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="director" value="<?php echo $row['director']; ?>" required="required" pattern="[a-zA-Z]+">
				</div>
		</div>
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Genre:</label>
			<div class="controls">
			<select name="genre" required>
				<option><?php echo $row['genre']; ?></option>
				<option>Comedy</option>
				<option>Romance</option>
				<option>Tragedy</option>		
			</select>
			</div>
		</div>

			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Cast and Crew</label>
				<div class="controls">
				<textarea name="comment" id="comment" cols="40" rows="10" required="required" pattern="[a-zA-Z]+"><?php echo $row['castandcrew']; ?>"</textarea>
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
	$date1=$_POST['date1'];
	$date2=$_POST['date2'];
	$date3=$_POST['date3'];
	$time1=$_POST['time1'];
	$time2=$_POST['time2'];
	$time3=$_POST['time3'];
	$release=$_POST['release'];
	$duration=$_POST['duration'];
	$director=$_POST['director'];
	$genre=$_POST['genre'];
	$comment=$_POST['comment'];
	
	if($name!="") {
	if($type=="image/gif" || $type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" )
	{
     mysql_query("update `moviesdetail` set `image`='pics/showing/$name',`title`='$title',`time1`='$time1' , `time2`='$time2' , `time3`='$time3', `ReleaseDate`='$release', `Duration`='$duration', `director`='$duration', `genre`='$genre', `castandcrew`='$comment', `date1`='$date1', `date2`='$date2' , `date3`='$date3' where No='$user_id'")or die(mysql_error());
	move_uploaded_file($tmp, "pics/showing/".$name);
     } 
	 else
	echo "<script>Alert.render('Please Insert Correct Image Formate')</script>";
	}
          else {

    mysql_query("update `moviesdetail` set `title`='$title',`time1`='$time1' , `time2`='$time2' , `time3`='$time3', `ReleaseDate`='$release', `Duration`='$duration', `director`='$duration', `genre`='$genre', `castandcrew`='$comment', `date1`='$date1', `date2`='$date2' , `date3`='$date3' where 	No='$user_id'")or die(mysql_error());

}
 ?>
	
	<?php
	echo "
		<script>
			setInterval(
				function(){	window.location='mmsnowshow.php' },2000
			);
		</script>";
	}
	
	?>