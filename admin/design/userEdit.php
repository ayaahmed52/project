<?php 
   require_once 'functions/connect.php';
   $id=$_GET['id'];
   $select_User= "SELECT * FROM users WHERE id = '$id'";
   $query = $conn -> query($select_User);
   $user = $query -> fetch_assoc();
?>



<form method="post" action="functions/function classes/userEditcontrol.php?id">
  <div class="form-group">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <label for="exampleInputname">Username</label>
    <input type="text" name="username" value="<?= $user['username'] ?>" class="form-control"  placeholder="Enter username">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name='password' placeholder="Password">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" value="<?= $user['email'] ?>" class="form-control" name='email' placeholder="Enter email">
  </div>  
   <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input  class="form-control" value="<?= $user['phone'] ?>" name='phone' placeholder="Enter phone nummber">
  </div> 
    <div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <input class="form-control" value="<?= $user['address'] ?>" name='address' placeholder="Enter Address">
  </div>

    <fieldset class="form-group">
    <div class="row">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" id="gridRadios1" type="radio" name="gender" value="1" <?= $user['gender']==1 ?'checked' : '' ?> >
          <label class="form-check-label" for="gridRadios1">
            Female
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" id="gridRadios2" type="radio" name="gender"  value="0" <?= $user['gender']==0 ?'checked' : '' ?>>
          <label class="form-check-label" for="gridRadios2">
             Male
          </label>
     </div>
</div>
</div>
</fieldset>
 <div class="form-group">
      <label for="privlings">Privilings</label>
      <select id="privlings" name='priv' class="form-control">
        <option  value="0" <?= $user['priv']==0 ?'selected' : '' ?>>Admin</option>
        <option  value="1" <?= $user['priv']==1 ?'selected' : '' ?>>User</option>
      </select>
    <br>
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>