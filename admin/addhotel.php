<?php
require("header.php");

if(isset($_POST["addhotel"])){
    $hname = $_POST['hname'];
    $location = $_POST['location'];
    $image = $_FILES['image']['name'];
    $directory = "uploads/" . basename($image);
    $fileToUpload = $_FILES['image']['tmp_name'];
    $addhotel = $hotel->store($hname, $location, $directory, $fileToUpload);   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 mt-5">
            <div class="card">
                <div class="card-header bg-dark text-light"><h5>Add Hotel</h5></div>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group mt-2 mx-2">
                        <label>Hotel Name</label>
                        <input type="text" name="hname" class="form-control">
                    </div>
                    <div class="form-group mx-2">
                        <label>Location</label>
                        <input type="text" name="location" class="form-control">
                    </div>
                    <div class="form-group mx-2 bg-light">
                            <label for="file" class="form-control-label">Image</label>
                            <input type="file" id="file" class="form-control-file" name="image">
                    </div>
                    <button type="submit" name="addhotel" class="btn btn-info btn-block mb-2">Add Hotel</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    
</body>
</html>