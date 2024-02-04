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
				<input type="text" id="inputEmail" name="title" placeholder="Title" required="required" pattern="[a-zA-Z]+">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Date1</label>
				<div class="controls">
				<input type="date"  min="<?php echo date('Y-m-d')?>" id="inputEmail" name="date1" placeholder="Title" required="required">
				</div>
			</div>
			
			<div class="control-group">
			<label class="control-label" for="inputPassword">Time1:</label>
			<div class="controls">
		<input type="time" id="inputEmail" name="time1" placeholder="Title" required="required">
			</div>
		</div>
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Date2</label>
				<div class="controls">
				<input type="date" min="<?php echo date('Y-m-d')?>" id="inputEmail" name="date2" placeholder="Title" required>
				</div>
			</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Time2:</label>
			<div class="controls">
				<input type="time" id="inputEmail" name="time2" placeholder="Title" required="required">
			</div>
		</div>
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Date3</label>
				<div class="controls">
				<input type="date" min="<?php echo date('Y-m-d')?>" id="inputEmail" name="date3" placeholder="Title" required>
				</div>
			</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Time3:</label>
			<div class="controls">
			<input type="time" id="inputEmail" name="time3" placeholder="Title" required="required">
			</div>
		</div>
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Release Date</label>
				<div class="controls">
				<input type="date"  max="<?php echo date('Y-m-d')?>" id="inputEmail" name="release" placeholder="Title" required>
				</div>
			</div>
			
		<div class="control-group">
				<label class="control-label" for="inputEmail">Duration</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="duration" placeholder="Duration" required="required" pattern="[0-9:]+">
				</div>
		</div>
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Director</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="director" placeholder="Director" required="required" pattern="[a-zA-Z]+">
				</div>
		</div>
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Genre:</label>
			<div class="controls">
			<select name="genre" required>
				<option></option>
				<option>Comedy</option>
				<option>Romance</option>
				<option>Tragedy</option>		
			</select>
			</div>
		</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Cast and Crew</label>
				<div class="controls">
				<textarea name="comment" id="comment" cols="40" rows="10" required="required" pattern="[a-zA-Z]+"></textarea>
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
	$status='NOW SHOWING';
	$comment=$_POST['comment'];	
	if($type=="image/gif" || $type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" )
	{
	$ext = "jpg";
	$profile = $name;	
    mysql_query("INSERT INTO `moviesdetail`  VALUES ('','pics/showing/$name','$status','$title','$time1','$time2','$time3','$release','$duration','$director','$genre','$comment','$date1','$date2','$date3')")or die(mysql_error());
	move_uploaded_file($tmp, "pics/showing/".$profile);
	}
	else
	echo "<script>Alert.render('Please Insert Correct Image Formate')</script>";
		
	
	
	}
	?>