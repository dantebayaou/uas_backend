<?php
    class DBConnect{
        public function Connect(){
            $db_name = "storesuper";
            $username = "root";
            $password = "";
            $server = "localhost";

            $koneksi = mysqli_connect($server, $username, $password, $db_name);

            if ($koneksi->connect_error) {
                die('Database Tidak Terhubung, Error : ' . $koneksi->connect_error);
            }
            return $koneksi;
        }
    }