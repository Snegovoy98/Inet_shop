<?php 
//require_once('validation.php');
// isValid=validation();
$isVlaid=true;
if($isVlaid){
	require_once('models/model_action_add_tovar.php');
	header('Location:tovar');

}else{
	header('Location:add_tovar');
}
?>