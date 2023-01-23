<?php 

    require_once('../../../controllers/koneksi.php');

    class GetByIdController{
        public function GetData($id){
            $db = new DBConnect();

            $query = "SELECT * FROM tbl_permintaan WHERE id = '$id'";
            $sql = mysqli_query($db->Connect(), $query);

            $data = mysqli_fetch_assoc($sql);
            return $data;
            
        }
    }