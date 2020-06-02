<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id_article']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="upload_edit.php" enctype="multipart/form-data">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id_article']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">id:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_article" value="<?php echo $row['id_article']; ?>" disabled>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">titre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="titre_article" value="<?php echo $row['titre_article']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">date:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="date_article" value="<?php echo $row['date_article']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="description_article" value="<?php echo $row['description_article']; ?>">
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label for="fileUpload" class="control-label modal-label">image:</label>
					</div>
					<div class="col-sm-10">
						<input type="file" name="photo" value="<?php echo $row['image_article']; ?>" >
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id_article']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['titre_article'].' '.$row['date_article']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id_article']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>