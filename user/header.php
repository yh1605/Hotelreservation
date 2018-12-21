<?php
require("../classes/Hotel.php");
require("../classes/Room.php");
require("../classes/User.php");
require("../classes/Reservation.php");

$hotel = new Hotel;
$room = new Room;
$user = new User;
$reservation = new Reservation;

session_start();

$id = $_SESSION['userid'];
$userdetail = $user->selectOne($id);

if(empty($_SESSION['userid'])){
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LuxuryHotel a Hotel Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">

    <link rel="stylesheet" href="../fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">Booking.com</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="userhome.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bookhotel.php">Book A Hotel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="checkbook.php">Check Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Log-out</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>