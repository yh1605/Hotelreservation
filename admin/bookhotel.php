<?php
require("header.php");


if(isset($_POST['submit'])){
    $shotel= $_POST['shotel'];
    $checkin = $_POST['date1'];
    $checkout = $_POST['date2'];
    
    $room = new Room;
    $result = $room->selectHotel($shotel, $checkin, $checkout);
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
                <div class="card-header bg-dark text-light"><h5>Book Hotel</h5></div>
                <form method="get" action="selectroom.php">
                    <div class="form-group mt-2 mx-2">
                        <label>Select Hotel</label>
                        <select name="shotel" class="form-control">
                        <?php
                            $l = $hotel->select();
                            foreach($l as $key => $row){
                                $hotel_id = $row['hotel_id'];
                                echo "<option value='$hotel_id'>" . $row['hotel_name'] . "</option>";
                            }
                           ?>
                        </select>
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Check-In</label>
                        <input type="date" name="date1" class="form-control">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Check-Out</label>
                        <input type="date" name="date2" class="form-control">
                    </div>
                    <button type="submit" name="select" class="btn btn-info btn-block">Select</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    
</body>
</html>