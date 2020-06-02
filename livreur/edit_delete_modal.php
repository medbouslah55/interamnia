<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id_livreur']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id_livreur" value="<?php echo $row['id_livreur']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom_livreur" value="<?php echo $row['nom_livreur']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Prenom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prenom_livreur" value="<?php echo $row['prenom_livreur']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">numero tel:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="numtel_livreur" value="<?php echo $row['numtel_livreur']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">zone de livraison:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="zdl_livreur" value="<?php echo $row['zdl_livreur']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">compagnie:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="compagnie_livreur" value="<?php echo $row['compagnie_livreur']; ?>">
					</div>
				</div> 
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">statut:</label>
					</div>
					<div class="col-sm-10">
					<select name="liste">
						<option >dispo</option>		
						<option >non dispo</option>
						</select>					
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
<div class="modal fade" id="delete_<?php echo $row['id_livreur']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['nom_livreur'].' '.$row['prenom_livreur']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id_livreur']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>