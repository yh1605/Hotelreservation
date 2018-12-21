<?php
  require("header.php");
?>

<div id="content-wrapper">
  <div class="container-fluid">
    
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Users</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Username</th>
                  <th>E-mail</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $result = $user->select();
                  if($result){
                  foreach($result as $key =>$row){
                    $id = $row['user_id'];
                      echo "<tr>";
                      echo "<td>" . $row['user_id'] . "</td>";
                      echo "<td>" . $row['username'] . "</td>";
                      echo "<td>" . $row['email'] . "</td>";
                      echo "<td>" . $row['firstname'] . "</td>";
                      echo "<td>" . $row['lastname'] . "</td>";
                      echo "<td>" . $row['status'] . "</td>";
                      echo "<td><a href='deleteuser.php?id=$id' class='btn btn-sm btn-danger'>Delete</a></td>";
                    }
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>