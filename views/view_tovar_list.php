<div class='product_list_row row'>
    <div class='product_photo col'>
        Photo
    </div>
    <div class='product_name col'>
        Name
    </div>
    <div class='product_comment col'>
       Comment
    </div>
    <div class='product_price col'>
       Price
    </div>
</div>
<?php
 if(isset($tovar_list)){
    foreach ($tovar_list as  $tovar) {
       extract($tovar);
        ?>
  <div class='product_list_row row'>
    <div class='product_photo col'>
        <img style="width: 100%" src='<?=$photo?>' alt="">
    </div>
    <div class='product_name col'>
       <a href='prop_tovar?id=<?=$id?>'><?=$name;?></a>
    </div>
    <div class='product_comment col'>
       <?=$comment;?>
    </div>
    <div class='product_price col'>
        <?=$price;?>
    </div>
    <div class='product_price col'>
      <?php if(isset($_SESSION['login'])){
?>

      <a href=add_tovar>Add tovar</a> 
       <a href='edit_tovar?id=<?=$id;?>'>Edit</a>
       <a href='delete_tovar?id=<?=$id;?>&name=<?=$name;?>'>Delete</a>
       <?php } ?>
    </div>
</div>
  <?php  }
 }

?>


