<?php 
require_once('validation.php');
 if(!empty($_POST['login']) && !empty($_POST['password'])){
        $login=$_POST['login'];
        $password=$_POST['password'];
        echo $login;
        echo $password;
        exit();
    }else{
    	 $errorList[]='Поле не может быть пустым!';
    }
$errorList=validateData($login,$password);
if(!$errorList){
	require_once('models/model_registration.php');
	header('Location:authorization');

}
	//header('Location:registration');
//	$errorList=validateData();

require_once('views/view_registration.php');
?>