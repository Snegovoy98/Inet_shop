	<?php 

 	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Store</title>
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>

<body>

</body>
  <form id="login" class="login" method="POST" action="authorization">
	<h2>Авторизация</h2>
	<label for="user" class="icon-user">Логин:</label>
	<input class="user" id="user" name="login" />
	<label for="password" class="icon-lock">Пароль:</label>
	<input type="password" class="password" id="password" name="password" />
	<label for="remember"><input type="checkbox" id="remember" /><span class="remember"/> Запомнить меня</span></label>
	<input type="submit" name="submit" value="Войти" />
	<div class="extra">
		<a href="registration" class="forgetPassword">Регистрация</a>
	</div>

</form>
	<span><?php if (isset($errorList)) {
	foreach ($errorList as  $error) {
		echo $error;
	}
} 

?></span>

<canvas class="blur" src="images/abstract-wallpaper-abstract-wallpapers.jpg"></canvas>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
