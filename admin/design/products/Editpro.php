<?php 
   require_once 'functions/connect.php';
   $id=$_GET['id'];
   $select_pro= "SELECT * FROM product WHERE id = '$id'";
   $query = $conn -> query($select_pro);
   $pro = $query -> fetch_assoc();
?>

<form method="post" action="functions/proedit.php" enctype="multipart/form-data">
  <div class="form-group">
    <input type="hidden" name="id" value="<?= $pro['id'] ?>">
    <label for="exampleInputname">Name</label>
    <input type="name" name="name" class="form-control"  placeholder="Enter name" value="<?=$pro['name']?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" class="form-control" name='price' placeholder="Enter Price" value="<?= $pro['price'] ?>">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Sale</label>
    <input type="sale" class="form-control" name='sale' placeholder="Enter sale" value="<?= $pro['sale'] ?>">
  </div>  
   <div class="form-group">
    <label for="exampleInputEmail1">Img</label>
    <input type="file" class="form-control-file" name="img"  value="<?= $pro['img'] ?>">
  </div>
  
 <div class="form-group">
      <label for="cat">Category</label>
      <select id="cat" name='cat' class="form-control">
        <?php
        require_once 'functions/connect.php';
        $sel_cat="SELECT * FROM category";
        $query = $conn->query($sel_cat);
        foreach ($query as $category) {
           
         ?>
        <option  value="<?= $category['id']?>" <?= $pro['id']==$category['id'] ? 'selected' : '' ?> ><?= $category['name']?> </option>
       <?php } ?>
      </select>
    <br>
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>