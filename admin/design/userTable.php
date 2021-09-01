<a href="?action=add" class='btn btn-info'>Add User</a>
                    <br>
                    <br>
                        <table class="table table-hover table-bordered table-striped ">
                          <thead>
                                <tr>
                               <th>Id</th>
                               <th>Name</th>
                               <th>Phone</th>
                               <th>Address</th>
                               <th>email</th>
                               <th>priviling</th>
                               <th>gander</th>
                               <th>controls</th>
                               </tr>
                          </thead>
                          <tbody>
                              <?php
                              require_once 'functions/connect.php';
                              $selectuser='SELECT * FROM users';
                              $query =$conn -> query($selectuser);
                              $id=0;
                              foreach ($query as $user) {
                               ?>
                               <tr>
                                    <td><?= ++$id ?></td>
                                    <td><?= $user['username'] ?></td>
                                    <td><?= $user['phone'] ?></td>
                                    <td><?= $user['address'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td><?= $user['priv']== 0 ?'Admin' : 'User' ?></td>
                                    <td><?= $user['gender'] == 0 ? 'Male' : 'Female' ?></td>
                                    <td>
                                         <a class="btn btn-primary" href="?action=edit&id=<?= $user['id'] ?>">EDITE</a>
                                         <!-- <a class="btn btn-danger" href="">DELETE</a> -->
                                    <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $user['id'] ?>">
  DELETE
</button>

<!-- Modal -->
<div class="modal fade" id="<?= $user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DELETE INFO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure to delete <?= $user['username'] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a  class="btn btn-danger" href="functions/userDelete.php?id=<?= $user['id']?>">Confirm</a>
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