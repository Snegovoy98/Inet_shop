<?php 
if(!isset($_SESSION['basket'])){
	$_SESSION['basket']=[];
}
$_SESSION['basket'][]=['tovar_id'=>$_GET['tovar_id']];

header('Location:view_basket.php');
$_SESSION['basket'][]=$_GET['tovar_id'];
?>