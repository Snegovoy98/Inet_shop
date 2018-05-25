<?php 
require_once('models/model_basket.php');
if(!isset($_SESSION['basket'])){
	$_SESSION['basket']=[];
}
if(isset($_GET['id'])){
	$_SESSION['basket'][]=$_GET['id'];
	

}
$where=	$_SESSION['basket'];
$tovar_list=get_tovar_list($where);
require_once('views/view_basket.php');
?>