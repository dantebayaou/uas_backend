<?php
    require_once('./controllers/koneksi.php');

    class LoginController{
        public function Login($username , $password){
            $db = new DBConnect();
            
            $query = "SELECT * FROM login WHERE username = '$username'";
            $koneksi = mysqli_query($db->Connect(), $query);
            $cek = mysqli_num_rows($koneksi);

            if($cek > 0){
                $data = mysqli_fetch_assoc($koneksi);
                echo($data["password"]);
                if(password_verify($password , $data["password"])){
                    session_start();

                    if($data['level'] == "admin"){
                        $_SESSION['username'] = $username;
                        $_SESSION['level'] = "admin";
    
                        header("location:view/admin/index.php");
                        return true;
                    }
                    else if($data['level'] == "user"){
                        $_SESSION['username'] = $username;
                        $_SESSION['level'] = "user";
                
                        header("location:view/user/index.php");
                        return true;
                    }
                    else{
                       return false;
                    }	
                }
            }
            else{
                return false;
            }
        }
    }