<?php
require_once("Database.php");
class User extends Database{

    public function login($username, $password){
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $this->conn->query($sql);
        if($result->num_rows==1){
            $row = $result->fetch_assoc();
            $_SESSION['userid'] = $row['user_id'];
            
            if($row['status'] == "admin"){
                echo "<script> window.location.replace('adminhome.php')</script>";
            }
            elseif($row['status'] == "user"){
                echo "<script> window.location.replace('../user/userhome.php')</script>";
            }
        }
        else{
            echo "<p class='text-danger'>Invalid Username or Password</p>";
        }
    }

    public function store($username, $email, $password, $firstname, $lastname, $status){
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return false;
        }
        else{
            $password = md5($password);
            $sql = "INSERT INTO users(username, email, password, firstname, lastname, status) VALUE('$username', '$email', '$password', '$firstname', '$lastname', '$status')";
            $result = $this->conn->query($sql);
            if($result){
                header("lacation: ../admin/users.php");
            }
            else{
                return $conn->error;
            }
        }
        $this->conn->close();
    }

    public function select(){
        $sql = "SELECT * FROM users";
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

    public function selectOne($id){
        $sql = "SELECT * FROM users WHERE user_id=$id";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row;
            }
        
        else{
            return false;
        }          

    }

    public function delete($id){
        $sql = "DELETE FROM users WHERE user_id=$id";
        $result = $this->conn->query($sql);
        if($result){
            header("location: ../admin/users.php");
        }
        else{
            echo $this->conn->error;
        }
        $this->conn->close();
    }

}