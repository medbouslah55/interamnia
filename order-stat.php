<?php 
//----------Stat 1--------------//
$resc=mysqli_query($con,"SELECT `product_id` FROM `order_detail`");
$count_values = array();
while($row=mysqli_fetch_assoc($resc)){
   foreach ($row as $a) {

      @$count_values[$a]++;

   }
}
$prod_selled=count($count_values);
$resc_1=mysqli_query($con,"SELECT `id_produit` FROM `produit`");
$all_prod=0;
while($row=mysqli_fetch_assoc($resc_1)){
   $all_prod+=1;
}
$stat_1=($prod_selled*100) / $all_prod;
//----------Stat 2--------------//
$resc_2=mysqli_query($con,"SELECT `user_id` FROM `order`");
$count_values = array();
while($row=mysqli_fetch_assoc($resc_2)){
   foreach ($row as $a) {

      @$count_values[$a]++;

   }
}
$client_order=count($count_values);
$resc_2=mysqli_query($con,"SELECT `id_client` FROM `client`");
$all_client=0;
while($row=mysqli_fetch_assoc($resc_2)){
   $all_client+=1;
}
$stat_2=($client_order*100) / $all_client;
//----------Stat 3--------------//
$resc_3=mysqli_query($con,"SELECT `id` FROM `order` WHERE order_status='5'");
$done_order=0;
while($row=mysqli_fetch_assoc($resc_3)){
   $done_order+=1;
}
$resc_3=mysqli_query($con,"SELECT `id` FROM `order`");
$all_order=0;
while($row=mysqli_fetch_assoc($resc_3)){
   $all_order+=1;
}
$stat_3=($done_order*100) / $all_order;
?>