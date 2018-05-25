	<?php 

 $sum=0;
 
 	foreach ($tovar_list as $tovars) {
			$sum+=$tovars['price'];
			extract($tovars);
	
 
 	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Store</title>
</head>
<body>
	<div>
		<div><img src=<?=$photo?> alt=""></div>
		<div><span><?=$name;?></span></div>
		<div>Сумма: <span><?=$price;?></span></div>
	</div>
	
	<?php
		}
	?>
	<div>Итог: <span><?=$sum;?></span> грн</div>
</body>
</html>
