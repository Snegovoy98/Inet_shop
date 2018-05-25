<?php
require_once('validation_auth.php');

 if (isset($_POST['submit'])) {
 	if(!empty($_POST['login']) && !empty($_POST['password'])){
        $login=$_POST['login'];
        $password=$_POST['password'];
        
 	}

 	$data=checkData($login,$password);
 	if ($data) {
 		$errorList=validateData($data);
 	} 
 }
   
  


require_once('views/view_authorization.php');
?>