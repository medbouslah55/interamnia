

<!-- Add New -->
<div class="modal fade" id="affecter_<?php echo $row['id_article']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="index.php" enctype="multipart/form-data">
				
				
			<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Event:</label>
					</div>
					<div class="col-sm-10">
				 		<select name="liste">
				 				<option  value="0">choose</option>
				<?PHP
				include_once('connection.php');
				$sql = "SELECT id,title FROM events where id!=0";
				$listeEvent = $conn->query($sql);

				foreach($listeEvent as $row){
				?>

				<option  value="<?php echo $row['id'] ?>"><?php echo $row['id'].' ' . $row['title'] ?></option>

				<?php } ?>

				</select> 
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>