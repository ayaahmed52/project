<?php
session_start();
      $current='product';
     include 'includes/navbar.php';
     include 'includes/sidebar.php';

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
          <div class="row">
               <ol class="breadcrumb">
                    <li><a href="#">
                         <em class="fa fa-home"></em>
                    </a></li>
                    <li class="active">Product</li>
               </ol>
          </div><!--/.row-->
          
          <div class="row">
               <div class="col-lg-12">
                    <h1 class="page-header">Product</h1>
               </div>
          </div><!--/.row-->
          
          
          <div class="row">
               <div class="col-lg-12">
                    
                    <?php
                     if (!isset($_GET['action'])) {
                          include 'design/products/proTable.php';
                      } elseif ($_GET['action']=='add') {
                           include 'design/products/addpro.php';
                      }elseif ($_GET['action']=='edit') {
                           include 'design/products/Editpro.php';
                      }
                    ?>

                    </div>

          </div><!--/.row-->
     </div>    <!--/.main-->
     
<?php
  include 'includes/footer.php'
?>
          
</body>
</html>