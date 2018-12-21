<?php
require("header.php");

if(isset($_POST["addroom"])){
    $hname = $_POST['hname'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $image = $_FILES['image']['name'];
    $directory = "uploads/" . basename($image);
    $fileToUpload = $_FILES['image']['tmp_name'];
    $roomstatus = $_POST['status'];
    $addroom = $room->store($hname, $price, $type, $directory, $fileToUpload, $roomstatus);

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
                <div class="card-header bg-dark text-light"><h5>Add Room</h5></div>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group mx-2 mt-2">
                        <label>Hotel Name</label>
                        <select class="form-control" name="hname">
                           <?php
                                $h = $hotel->select();
                                foreach($h as $key => $row){
                                    $hotel_id = $row['hotel_id'];
                                    echo "<option value='$hotel_id'>" . $row['hotel_name'] . "</option>";
                                }
                           ?>
                        </select>
                    </div>
                    <div class="form-group mx-2">
                        <label>Room Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="form-group mx-2">
                        <label>Room Type</label>
                        <select class="form-control mb-2" name="type">
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                        <option value="family">Family</option>
                        </select>
                    </div>
                    <div class="form-group mx-2 bg-light">
                            <label for="file" class="form-control-label">Image</label>
                            <input type="file" id="file" class="form-control-file" name="image">
                    </div>
                    <div class="form-group mx-2">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control">
                    </div>
                    <button type="submit" name="addroom" class="btn btn-info btn-block mb-2">Add Room</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    
</body>
</html>