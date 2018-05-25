<?php
function checkData($login_check,$password_check){

				$login=strip_tags($login_check);
    			$password=strip_tags($password_check);
    $password_hash=password_hash($password,PASSWORD_DEFAULT);
     $array=[];
     $array['login']=$login;
     $array['password']=$password_hash;
     return $array;
}
function validateData($login_check,$password_check){

 $errorList=[];
    			$login=strip_tags($login_check);
    			$password=strip_tags($password_check);
   		 $query="SELECT login FROM users WHERE login='$login' ";	
   		 
  $result=execute_select_query($query);
    
     if($result){
     	 $errorList[]='Такой логин уже существует';
     }
    
        if (isset($_POST['submit'])) {
             if (!preg_match('#^[a-zA-Z](.[a-zA-Z0-9_-]*)$#', $login)){
            $errorList[]='Логин должен состоять от 4 до 15 символов';
        }
        if (!preg_match('#^[a-zA-Z](.[a-zA-Z0-9_-]*)$#',$password)){
            $errorList[]='Пароль должен состоять от 8 до 32 символов';

    }
        }
       
   return $errorList;
}
?>