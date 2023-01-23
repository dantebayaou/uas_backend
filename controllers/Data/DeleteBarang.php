<?php

    require_once('../../controllers/koneksi.php');

    class DeleteController{
        public function Delete($id){
            $db = new DBConnect();

            $query = "DELETE FROM tbl_barang WHERE id = '$id'";
            $sql = mysqli_query($db->Connect(), $query);

            if($sql){
                return true;
            }
            else{
                return false;
            }
        }
    }