<?php 
	 foreach ($character_list as $characters) {
	 	extract($characters);
	 }
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Characteristics</title>
</head>
<body>
	<br><br><br><br><br><br><br><br>
	<div><span><img src=<?=$image_path?> alt=""></span><br>
Название:<span><?=$name;?></span><br><br>
	Цена:<span><?= $price;?></span><br><br>
Комментарий:<span><?=$comment;?></span></div>
	<a href='basket?id=<?=$_GET['id'];?>'>Add to Basket</a>
</body>
</html>
