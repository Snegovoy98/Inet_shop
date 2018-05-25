<?php 
$isVlaid=true;
if($isVlaid){
	require_once('models/model_action_edit_tovar.php');
	header('Location:tovar');

}else{
	header('Location:edit_tovar');
}
?>