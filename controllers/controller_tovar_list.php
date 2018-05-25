<?php 
 require_once('models/model_tovar_list.php');
	$where=null;	
	$filter=null;
	
 if (isset($_GET['filter']) && isset($_GET['id'])){
 		$where=$_GET['id'];
 		$tovar_list=get_tovar_list($where);
 	}else{

 		$filter=[];
 		if (!empty($_GET['price_from'])){
 			$filter['price_from']=$_GET['price_from'];
 		}
 		if (!empty($_GET['price_to'])){
 			$filter['price_to']=$_GET['price_to'];
 		}
 		if (!empty($_GET['search'])){
 			$filter['search']=$_GET['search'];
 		}
 		$order=[];
 		$order['name']=null;
 		if (!empty($_GET['order_name'])) {
 			$order['name']=$_GET['order_name'];
 		}
 		
 		$tovar_list=get_filter_tovar_list($filter,$order);
 	}

	
	require_once('views/view_tovar_list.php');
?>