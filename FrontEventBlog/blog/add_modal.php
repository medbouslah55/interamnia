

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
			<form method="POST" onsubmit="return error();"  action="upload.php"  enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ID" disabled="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">titre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="titre_article" id="titre_article" size="20" required>
						<center><h6 id="titre" style="color: red;"></h6></center>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">date:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="date_article"
						min="<?php echo date("Y-m-d") ?>"   required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="description_article" size="200" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label for="fileUpload" class="control-label modal-label">image:</label>
					</div>
					<div class="col-sm-10">
						<input type="file" name="photo" id="photo" >
						<center><h6 id="image" style="color: red;"></h6></center>
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
  var x = document.getElementById("titre_article").value;
  if(x[0]!=x[0].toUpperCase())
  {
  	 document.getElementById("titre").innerHTML = "Le titre doit commencer par une majuscule ";
  	 return false;	
}
else
{
	document.getElementById("titre").innerHTML ="";
}
}
function error2() {
position = document.getElementById("photo").value ;
if(position.indexOf(".jpg")==-1 && position.indexOf(".jepg")==-1 && position.indexOf(".png") && position.indexOf(".gif"))
{
	document.getElementById("image").innerHTML = "l'extension de l'image doit etre jpg/jpeg/png/gif ";
	return false;
}
else
{
	document.getElementById("image").innerHTML ="";
}
}
function error()
{
	test1=error1();
	test2=error2();
	if(test1==false || test2==false)
	{
		return false;
	}
}


function number(){
	var nouv_produits2 = document.getElementById("username").value;
       if ( nouv_produits2.length!=8 || isNaN(nouv_produits2) )
       {
        alert('l id du produit doit contenir 4 chiffres ') ;
        	return false;   
       }
}

</script>