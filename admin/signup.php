<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lumino - signup</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">sign up</div>
        <div class="panel-body">
<form method="post" action="functions/signupcontroller.php">
  <div class="form-group">
    <label for="exampleInputname">Username</label>
    <input type="username" name="username" class="form-control"  placeholder="Enter username">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name='password' placeholder="Password">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name='email' placeholder="Enter email">
  </div>  
   <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input  class="form-control" name='phone' placeholder="Enter phone nummber">
  </div> 
    <div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <input class="form-control" name='address' placeholder="Enter Address">
  </div>
    <fieldset class="form-group">
    <div class="row">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" id="gridRadios1" type="radio" name="gender"   value="1">
          <label class="form-check-label" for="gridRadios1">
            Female
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" id="gridRadios2" type="radio" name="gender"  value="0">
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
        <option  value="0" >Admin</option>
        <option  value="1" >User</option>
      </select>
    <br>
    <br>
  <button type="submit" value="signup" class="btn btn-primary">Submit</button>
</div>
</form>
<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>