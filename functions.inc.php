<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

function get_product($con,$limit='',$cat_id='',$product_id=''){
	$sql="select produit.*,categorie.nom_categorie from produit,categorie where produit.status_produit=1 ";
	if($cat_id!=''){
		$sql.=" and produit.id_categorie=$cat_id ";
	}
	if($product_id!=''){
		$sql.=" and produit.id_produit=$product_id ";
	}
    $sql.=" and produit.id_categorie=categorie.code_categorie ";
	$sql.=" order by produit.id_produit desc";
	if($limit!=''){
		$sql.=" limit $limit";
	}
	
	$res=mysqli_query($con,$sql);
	$data=array();
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
}
?>