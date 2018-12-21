<?php
  require("header.php");
?>


      <div id="content-wrapper">

        <div class="container-fluid">


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Confirmation</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>In-Date</th>
                      <th>Out-Date</th>
                      <th>Total Payment</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $result = $reservation->selectConfirm();
                      if($result){
                        foreach($result as $key => $row){    
                          $reserveid = $row['reserve_id'];                     
                          echo "<tr>";
                          echo "<td>" . $row['firstname'] . "</td>";
                          echo "<td>" . $row['lastname'] . "</td>";
                          echo "<td>" . $row['in_date'] . "</td>";
                          echo "<td>" . $row['out_date'] . "</td>";
                          echo "<td>" . $row['total_price'] . "</td>";
                          echo "<td>" . $row['restatus'] . "</td>";
                          echo "<td><a href='confirm.php?id=$reserveid' class='btn btn-sm btn-success'>Confirm</a></td>";
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->


      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


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
