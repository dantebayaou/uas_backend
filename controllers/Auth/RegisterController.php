<?php

    require_once('../controllers/koneksi.php');

    class RegisterController{
        public function Register($username, $repassword, $password, $level){
            $HashingPassword = password_hash($password, PASSWORD_BCRYPT);

            if(password_verify($repassword, $HashingPassword)){
                $db = new DBConnect();

                $query = "INSERT INTO login (username, password, level) VALUES ('$username' , '$HashingPassword', '$level')";
                $sql = mysqli_query($db->Connect(), $query);

                if($sql){
                    return true;
                }
                else{
                    return false;
                }
            }
        }
    }
