<?php

    require_once('../../controllers/koneksi.php');

    class GetDataBarangController{
        public function GetData(){
            $db = new DBConnect();

            $query = "SELECT * FROM tbl_barang";
            $sql = mysqli_query($db->Connect(), $query);
            
            $row = mysqli_num_rows($sql);
            $array = array();

            if($row > 0){
                while($data = mysqli_fetch_assoc($sql)){
                    $array[] = $data;
                }
                return $array;
            }
        }
    }