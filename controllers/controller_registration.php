<?php 
require_once('validation_reg.php');
 $login=null;
        $password=null;
 if(!empty($_POST['login']) && !empty($_POST['password'])){
        $login=$_POST['login'];
        $password=$_POST['password'];
    }else{
    	 $errorList[]='Поле не может быть пустым!';
    }
   
   $errorList=validateData($login,$password);
if(!$errorList){
	require_once('models/model_registration.php');
	$array= checkData($login,$password);
	registration($array);

}


require_once('views/view_registration.php');
?>