<form action="tovar" ><br>
  <br>
  Search: <input type="text" name="search">
  <br>
  Price:<br> 
  From: <input type="number" name="price_from">
  <br>
  to: <input type="number" name="price_to">
  <br>
    Name:
    <select name="order_name" id="">
      <option >asc</option>
      <option >desc</option>  
    </select>
    <br><br>
      
    <input type="checkbox" name="tovar">ALL
    <br>
    <?php
 
 if(isset($type_list)){
    foreach ($type_list as  $type) {
        extract($type);
        ?>

<?=$name;?>:<input type="checkbox" name="id[]" value="<?=$id;?>"><br>
  <?php  }
 }
?>
<br>
    <input type="submit" name="filter" value="Фильтровать">
</form>




