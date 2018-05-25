<?php 
require_once('core/functions.php');
?>
<br>
<br>
<br>
<form action="action_edit_tovar" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value='<?=$_GET['id'];?>'>
  Name <input type="text" name="name"><br>
  Тип:<?=createSelect('type_id',$type_list);?><br>
  Price:<input type="number" name="price"><br>
  Comment: <textarea name="comment" ></textarea><br>
  File: <input type="file" name="file[]" multiple><br>
  <input type="submit" value="Обновить">  
</form>
