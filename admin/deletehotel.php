<?php
require("../classes/Hotel.php");
$hotel = new Hotel;
$id = $_GET["id"];
$deletehotel = $hotel->delete($id);
?>