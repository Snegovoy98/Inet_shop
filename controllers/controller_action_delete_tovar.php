<?php 
if ($_POST['submit']=='OK') {
	require_once('models/model_action_delete_tovar.php');
}
header('Location:tovar');
?>