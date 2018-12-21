<?php
require_once("Database.php");
class Reservation extends Database{

    public function select(){
        $sql = "SELECT * FROM reservation";
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

    public function store($userid, $room_id, $date1, $date2, $totalpay){
        $sql = "INSERT INTO reservation(user_id, room_id, in_date, out_date, total_price, restatus) VALUES($userid, $room_id, '$date1', '$date2', '$totalpay', 'pending')";
        $result = $this->conn->query($sql);
        if($result){
            header("location: ../user/success.php");
        }
        else{
            echo $this->conn->error;
        }
        $this->conn->close();
    }

    public function delete($id){
        $sql = "DELETE FROM reservation WHERE reserve_id=$id";
        $result = $this->conn->query($sql);
        if($result){
            header("location: ../admin/viewreservation.php");
        }
        else{
            echo $this->conn->error;
        }
        $this->conn->close();
    }

    public function selectConfirm(){
        $sql = "SELECT * FROM reservation INNER JOIN rooms ON rooms.room_id=reservation.room_id
                                          INNER JOIN users ON users.user_id=reservation.user_id WHERE reservation.restatus='pending'";
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

    public function selectConfirmed(){
        $sql = "SELECT * FROM reservation INNER JOIN rooms ON rooms.room_id=reservation.room_id
                                          INNER JOIN users ON users.user_id=reservation.user_id WHERE reservation.restatus='confirmed'";
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
    public function selectBooking($id){
        $sql = "SELECT * FROM reservation INNER JOIN rooms ON rooms.room_id=reservation.room_id
                                          INNER JOIN users ON users.user_id=reservation.user_id WHERE users.user_id=$id";
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

    public function selectOne(){
        $sql = "SELECT * FROM reservation INNER JOIN hotels ON hotels.hotel_id=reservation.reserve_id";
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

    public function selectRoomByhotel($shotel, $checkin, $checkout){
        $sql = "SELECT * FROM reservation
                INNER JOIN rooms ON reservation.room_id=rooms.room_id
                WHERE NOT(in_date >= $checkin AND in_date <= $checkout OR out_date >= $checkin AND out_date <= $checkout)
                AND rooms.room_id=$shotel";
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

    public function confirmReciept($id){
        $sql = "SELECT * FROM rooms INNER JOIN hotels ON rooms.hotel_id=hotels.hotel_id WHERE room_id=$id";
        $result = $this->conn->query($sql);
        if($result){
            $row = $result->fetch_assoc();
            return $row;
        }
        else{
            return false;
        }
    }

    public function selectReservation($id){
        $sql = "SELECT * FROM reservation WHERE reserve_id = $id";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function confirmBooking($id){
        $sql = "UPDATE reservation SET restatus='confirmed' WHERE reserve_id = $id";
        $result = $this->conn->query($sql);
        if($result){
            $getroom = $this->selectReservation($id);
            $roomid = $getroom['room_id'];
            $sql = "UPDATE rooms SET roomstatus='pending' WHERE room_id = $roomid";
            $result = $this->conn->query($sql);
            if($result){
                header("location: ../admin/confirmreservation.php");
            }
            else{
                echo $this->conn->error;
            }
            $this->conn->close();
        }
    }

    public function checkinRoom(){
        $sql = "SELECT * FROM rooms WHERE roomstatus='pending' OR roomstatus=''occupied";
        $result = $this->conn->query($sql);

    }
}