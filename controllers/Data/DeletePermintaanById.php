<?php

    require_once('../../../controllers/koneksi.php');

    class DeleteById{
        public function DeleteData($id){
            $db = new DBConnect();

            $query = "DELETE FROM tbl_permintaan WHERE id = '$id'";
            $sql = mysqli_query($db->Connect(), $query);

            if($sql){
                return true;
            }
            else{
                return false;
            }
        }
    }