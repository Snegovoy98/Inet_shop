<?php 
require_once('models/model_prop_tovar.php');
 $where = null;
 if(isset($_GET['id'])){
 	$where=$_GET['id'];
 }
$characteristics=get_data('product');
 $character_list = get_characteristics($where);
  require_once('views/view_prop_tovar.php'); 
?>