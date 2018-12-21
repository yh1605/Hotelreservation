<?php
require("../classes/Reservation.php");
$reservation = new Reservation;
$id = $_GET['id'];
$confirm = $reservation->confirmBooking($id);
?>