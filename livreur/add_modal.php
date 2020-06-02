<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php" onsubmit="return error();">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" id="nom" class="form-control" name="nom_livreur" required>
						<h6 id='controle'></h6>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Prénom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" id="prenom" class="form-control" name="prenom_livreur" required>
						<h6  style:color:red; id='controle1'></h6>

					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">numero tel:</label>
					</div>
					<div class="col-sm-10">
						<input type="number"id="num" class="form-control" name="numtel_livreur"   required>
						<h6 id='controle2'></h6>

					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">zone de livraison:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="zdl_livreur" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">compagnie:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="compagnie_livreur" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">statut:</label>
					</div>
					<div class="col-sm-10">
					<select name="liste">
						<option default>dispo</option>		
						<option >non dispo</option>
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

<script type="text/javascript">
	function error1() {
  var x = document.getElementById("nom").value;
  if(x[0]!=x[0].toUpperCase())
  {
  	 document.getElementById("controle").innerHTML = "Le titre doit commencer par une majuscule ";
  	 return false;	
}
else
{
	document.getElementById("controle").innerHTML ="";
}
}
function error2() {
  var x = document.getElementById("prenom").value;
  if(x[0]!=x[0].toUpperCase())
  {
  	 document.getElementById("controle1").innerHTML = "Le titre doit commencer par une majuscule ";
  	 return false;	
}
else
{
	document.getElementById("controle1").innerHTML ="";
}
}
function error3(){
	var nouv_produits2 = document.getElementById("num").value;
       if ( nouv_produits2.length!=8 || isNaN(nouv_produits2) )
       {
        document.getElementById("controle2").innerHTML = "l id du produit doit contenir 8 chiffres ";
  	        	return false;   
       }
	   else
{
	document.getElementById("controle2").innerHTML ="";
}
}
function error()
{
	test1=error1();
	test2=error2();
	test3=error3();

	if(test1==false || test2==false|| test3==false)
	{
		return false;
	}
}


</script>