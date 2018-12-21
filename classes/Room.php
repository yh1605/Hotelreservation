<?php
require_once("Database.php");
class Room extends Database{

    public function select(){
        $sql = "SELECT * FROM rooms";
        $result = $this->conn->query($sql);
        $rows = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        else{
            false;
        }
    }

    public function store($hname, $price, $type, $directory, $fileToUpload, $roomstatus){
            $sql = "INSERT INTO rooms(hotel_id, room_img, room_type, room_price, roomstatus) VALUES('$hname', '$directory', '$type', '$price', '$roomstatus')";
            $result = $this->conn->query($sql);
            if($result){
                move_uploaded_file($fileToUpload, "../".$directory);
                header("location: ../admin/rooms.php");
            }
            else{
                echo $this->conn->error;
            }
            $this->conn->close();  
    }

    public function delete($id){
        $sql = "DELETE FROM rooms WHERE room_id=$id";
        $result = $this->conn->query($sql);
        if($result){
            header("location: ../admin/rooms.php");
        }
        else{
            echo $this->conn->error;
        }
        $this->conn->close();
    }

    public function selectOne(){
        $sql = "SELECT * FROM rooms INNER JOIN hotels ON hotels.hotel_id=rooms.hotel_id";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
        }
        return $rows;
        }
        else{
        false;
        }
    }

    public function selectRoomByhotel($id){
        $sql = "SELECT * FROM rooms WHERE hotel_id=$id";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
        }
        return $rows;
        }
        else{
        false;
        }
    }
}