<?php
require("header.php");

if(isset($_POST["adduser"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $status = $_POST['status'];

    $adduser = $user->store($username, $email,  $password, $firstname, $lastname, $status);

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
                <div class="card-header bg-dark text-light"><h5>Add User</h5></div>
                <form method="post">
                    <div class="form-group mt-2 mx-2">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group mx-2">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group mx-2">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control">
                    </div>
                    <div class="form-group mx-2">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control">
                    </div>
                    <div class="form-group mx-2">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control">
                    </div>
                    <button type="submit" name="adduser" class="btn btn-info btn-block">Add User</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    
</body>
</html>