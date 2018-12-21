<?php
require("../classes/Room.php");
$room = new Room;
$id = $_GET["id"];
$deleteroom = $room->delete($id);
?>