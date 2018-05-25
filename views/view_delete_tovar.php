<?php 
require_once('core/functions.php');
?>
<form action="action_delete_tovar" method="post" >
	Are you really want delete <?=$_GET['name'];?> ?<br>
  <input type="hidden" name="id" value='<?=$_GET['id'];?>'>
  <input type="submit" name='submit' value="OK">ОК  
<input type="submit" name='submit' value="Cancel">Cancel
</form>