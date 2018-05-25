	<?php 

	
 
 	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>22 лучших формы входа и регистрации | Vladmaxi.net</title>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>

<body>

  <div id="login">
  <div class="flip">
    <div class="form-signup">
      <h1>Регистрация</h1>
      <fieldset>
      <p class="login-msg"></p>
     <?php 
     if($errorList){		
        			?>
        <form method="POST" action="registration">
          <input type="text" placeholder="Введите логин" name="login" />
          <input type="password" placeholder="Ваш сложный пароль..." name="password" required />
          <input type="submit" value="Зарегистрироваться" name="submit" />
        </form>

        <?php
        foreach ($errorList as  $error) {
      	echo "<span>$error </span>";
        	 	}
        	 }else{
        	 	?>
        	 	 <form method="POST" action="registration">
          <input type="text" placeholder="Введите логин" name="login" />
          <input type="password" placeholder="Ваш сложный пароль..." name="password" required />
          <input type="submit" value="Зарегистрироваться" />
        </form>
        	 	<?php
        	 	echo 'Вы успешно зарегистрировались';
        	 }
        ?>

        
      </fieldset>
    </div>
   
  </div>
</div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="js/index.js"></script>

</body>
</html>
