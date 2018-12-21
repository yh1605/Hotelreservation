<?php
  require("header.php");
  $id = $_GET['id'];
  $date1 = $_GET['date1'];
  $date2 = $_GET['date2'];
  $row = $reservation->confirmReciept($id);

  $indate = date_create($date1);
  $outdate = date_create($date2);
  $diff = date_diff($indate, $outdate);
  $totaldays = $diff->format('%a');

  if(isset($_POST['book'])){
    $duration = $_POST['duration'];
    $totalpay = $_POST['price'];
    $room_id = $_GET['id'];
    $userid = $_SESSION['userid'];
    $addreservation = $reservation->store($userid, $room_id, $date1, $date2, $totalpay);
  }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 mt-5">
            <div class="card">
                <div class="card-header bg-dark text-light"><h5>Confirm Reciept</h5></div>
                <form method="post">
                    <div class="form-group mt-2 mx-2">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" readonly value="<?php echo $userdetail['firstname'];?>">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" readonly value="<?php echo $userdetail['lastname'];?>">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Room Type</label>
                        <input type="text" name="type" class="form-control" readonly value="<?php echo $row['room_type'];?>">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Room Price</label>
                        <input type="text" name="rprice" class="form-control" readonly value="<?php echo $row['room_price'];?>">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Duration</label>
                        <input type="text" name="duration" class="form-control" readonly value="<?php echo $totaldays;?>">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Total Payment</label>
                        <input type="text" name="price" class="form-control" readonly value="<?php echo $row['room_price'] * $totaldays;?>">
                    </div>
                    <button type="submit" name="book" class="btn btn-info btn-block">Book</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    
</body>
</html>