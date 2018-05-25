<?php
function checkData($login_check,$password_check){
            $login=strip_tags($login_check);
                $password=strip_tags($password_check);
   ;
     $array=[];
     $array['login']=$login;
     $array['password']=$password;
     return $array;

    
			
}
function validateData($data){

 $errorList=[];
    			$login=$data['login'];
                $password_user=$data['password'];
                echo '<hr>';
            $query="SELECT login,password FROM users WHERE login='$login'";
             $password_bd=execute_select_query($query);
             foreach ( $password_bd as $password) {
                 $result =password_verify($password_user,$password['password']);
             if($result){
                      $_SESSION['login']=$login;
                    echo 'Вы успешно авторизировались';
                    header('Location:tovar');
             }else{
                 $errorList[]='Неправильный пароль';
             }
             }
            
             
                
             
           
        if (!preg_match('#^[a-zA-Z](.[a-zA-Z0-9_-]*)$#', $login)){
            $errorList[]='Логин должен состоять от 4 до 15 символов';
        }
        if (!preg_match('#^[a-zA-Z](.[a-zA-Z0-9_-]*)$#',$password_user)){
            $errorList[]='Пароль должен состоять от 8 до 32 символов';
      
        
    }
   return $errorList;
}
?>