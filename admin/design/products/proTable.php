<a href="?action=add" class='btn btn-info'>Add Product</a>
                    <br>
                    <br>
                        <table class="table table-hover table-bordered table-striped ">
                          <thead>
                                <tr>
                               <th>Id</th>
                               <th>Name</th>
                               <th>Price</th>
                               <th>Sale</th>
                               <th>img</th>
                               <th>Category</th>
                               <th>controls</th>
                               </tr>
                          </thead>
                          <tbody>
                              <?php
                              require_once 'functions/connect.php';
                              $selectpro='SELECT * FROM product';
                              $query =$conn -> query($selectpro);
                              $id=0;
                              foreach ($query as $pro) {
                               ?>
                               <tr>
                                    <td><?= ++$id ?></td>
                                    <td><?= $pro['name'] ?></td>
                                    <td><?= $pro['price'] ?></td>
                                    <td><?= $pro['sale'] ?></td>
                                    <td>
                                      <img style="width: 140px; height:105px;border-radius:50% ;" src="imges/<?= $pro['img'] ?>" alt="no image"></td>
                                    <td><?php
                                    $cat_id = $pro['cat_name']; 
                                    $sel_cat="SELECT name FROM category WHERE id=$cat_id";
                                    $cat = $conn -> query($sel_cat)-> fetch_assoc();
                                    echo $cat['name']
                                    ?>
                                    </td>
                                    <td>
                                          <a class="btn btn-primary" href="?action=edit&id=<?= $pro['id'] ?>">EDITE</a>
                                         <!-- <a class="btn btn-danger" href="">DELETE</a> -->
                                         <!-- Button trigger modal -->
                                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $pro['id'] ?>">
                                          DELETE</button>

<!-- Modal -->
<div class="modal fade" id="<?= $pro['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DELETE Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure to delete <?= $pro['name'] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a  class="btn btn-danger" href="functions/prodelete.php?id=<?= $pro['id']?>">Confirm</a>
      </div>
    </div>
  </div>
</div>
                                    </td>
                               </tr>
                               <?php 
                              }
                               ?>
                             
                           </tbody>
                        </table>