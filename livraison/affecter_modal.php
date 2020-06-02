<!-- Add New -->
<div class="modal fade" id="affecter_<?php echo $row['id_livraison']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			   <div class="container-fluid">
			    <form method="POST" action="affecter_c.php" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id_livraison']; ?>">
				
			  <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">livreur:</label>
					</div>
					<div class="col-sm-10">
				 		<select name="liste">
				 				<option  value="0">choose</option>
				<?PHP
				include_once('connection.php');
				$sql = "SELECT id_livreur,nom_livreur FROM livreur where id_livreur!=0";
				$listelivreur = $conn->query($sql);

				foreach($listelivreur as $row){
				?>

				<option  value="<?php echo $row['id_livreur'] ?>"><?php echo $row['id_livreur'].' ' . $row['nom_livreur'] ?></option>

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