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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Admin</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
      
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="adminhome.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="confirmreservation.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Confirm</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hotels.php">
          <i class="fas fa-building"></i>
             <span>Hotel</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addhotel.php">
          <i class="fas fa-plus-circle"></i>
             <span>Add Hotel</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rooms.php">
            <i class="fas fa-fw fa-table"></i>
             <span>Rooms</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addroom.php">
          <i class="fas fa-plus-circle"></i>
             <span>Add Room</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="users.php">
            <i class="fas fa-users"></i>
             <span>User</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adduser.php">
            <i class="fas fa-users"></i>
             <span>Add User</span></a>
        <li class="nav-item">
          <a class="nav-link" href="bookhotel.php">
            <i class="fas fa-users"></i>
             <span>Book hotel</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
          <i class="fas fa-sign-out-alt"></i>
             <span>Log-out</span></a>
        </li>
      </ul>
