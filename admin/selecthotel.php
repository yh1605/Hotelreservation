<?php
require("header.php");


?>

<div id="content-wrapper">
  <div class="container-fluid">    
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>Select Hotel</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Location</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $result = $hotel->select();
                  if($result){
                  foreach($result as $key =>$row){
                    $id = $row['hotel_id'];
                    $image = $row['hotel_img'];
                      echo "<tr>";
                      echo "<td><img src='../$image' class='img-fluid' width='100' height='100'></td>";
                      echo "<td>" . $row['hotel_name'] . "</td>";
                      echo "<td>" . $row['hotel_location'] . "</td>";
                      echo "<td><a href='#' class='btn btn-sm btn-success'>View</a></td>";
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
