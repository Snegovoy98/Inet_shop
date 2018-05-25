<?php 
  require_once('models/model_filter_tovar_list.php');
  $where=null;
	if (isset($_GET['id'])){
		$where=$_GET['id'];
	}
$filter=null;
	$order=null;
	$type_list=get_data('product_type');
 if (isset($_GET['filter'])){
 		$filter=[];
 		if (!empty($_GET['price_from']))
 			$filter['price_from']=$_GET['price_from'];
 		if (!empty($_GET['price_to']))
 			$filter['price_to']=$_GET['price_to'];
 		if (!empty($_GET['search']))
 			$filter['search']=$_GET['search'];
 		$order=[];
 		$order['name']=$_GET['order_name'];
 	}
 require_once('views/view_filter_tovar_list.php'); 
?>