<?php
require_once("Database.php");
class Hotel extends Database{

    public function select(){
        $sql = "SELECT * FROM hotels";
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

    public function store($hname, $location, $directory, $fileToUpload){
            $sql = "INSERT INTO hotels(hotel_name, hotel_img, hotel_location) VALUES('$hname', '$directory', '$location')";
            $result = $this->conn->query($sql);
            if($result){
                move_uploaded_file($fileToUpload, "../".$directory);
                header("location: ../admin/hotels.php");
            }
            else{
                echo $this->conn->error;
            }
            $this->conn->close();
    }

    public function delete($id){
        $sql = "DELETE FROM hotels WHERE hotel_id=$id";
        $result = $this->conn->query($sql);
        if($result){
            header("location: ../admin/hotels.php");
        }
        else{
            echo $this->conn->error;
        }
        $this->conn->close();
    }
    

}