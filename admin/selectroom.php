<?php
require("header.php");
$id = $_GET['shotel'];
$row = $hotel->select($id);
?>

<div id="content-wrapper">
  <div class="container-fluid">    
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Select Room</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <th>Room Image</th>
                <th>Room Type</th>
                <th>Room Price</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $date1 = $_GET['date1'];
                $date2 = $_GET['date2'];
                $result = $room->selectRoomByhotel($id);
                if($result){
                foreach($result as $key => $row){
                    $roomid = $row['room_id'];
                    $image = $row['room_img'];
                    echo "<tr>";
                    echo "<td ><img src='../$image' class='img-fluid' width='100' height='100'></td>";
                    echo "<td>" . $row['room_type'] . "</td>";
                    echo "<td>" . $row['room_price'] . "</td>";
                    echo "<td>" . $row['roomstatus'] . "</td>";
                    echo "<td><a href='confirmreciept.php?id=$roomid&date1=$date1&date2=$date2' class='btn btn-sm btn-success'>View</a></td>";
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
