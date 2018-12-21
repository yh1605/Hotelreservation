<?php
  require("header.php");
?>


      <div id="content-wrapper">

        <div class="container-fluid">


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Rooms</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Room Image</th>
                      <th>Hotel Name</th>
                      <th>Room Type</th>
                      <th>Room Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $result = $room->selectOne();
                      if($result){
                        foreach($result as $key => $row){
                          $id = $row['room_id'];
                          $image = $row['room_img'];
                          $hname = $row['hotel_name'];
                          echo "<tr>";
                          echo "<td><img src='../$image' class='img-fluid' width='100' height='100'></td>";
                          echo "<td>" . $hname . "</td>";
                          echo "<td>" . $row['room_type'] . "</td>";
                          echo "<td>" . $row['room_price'] . "</td>";
                          echo "<td><a href='deleteroom.php?id=$id' class='btn btn-sm btn-danger'>Delete</a></td>";
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
