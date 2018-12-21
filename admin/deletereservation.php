<?php
require("../classes/Reservation.php");
$reservation = new Reservation;
$id = $_GET["id"];
$deletereservation = $reservation->delete($id);
?>