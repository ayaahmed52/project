<form method="post" action="functions/Proadd.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputname">Name</label>
    <input type="name" name="name" class="form-control"  placeholder="Enter name">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" class="form-control" name='price' placeholder="Enter Price">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Sale</label>
    <input type="sale" class="form-control" name='sale' placeholder="Enter sale">
  </div>  
   <div class="form-group">
    <label for="exampleInputEmail1">Img</label>
    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
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
        <option name='cat' value="<?= $category['id']?>" >
          <?= $category['name']?>
          </option>
       <?php } ?>
      </select>
    <br>
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>