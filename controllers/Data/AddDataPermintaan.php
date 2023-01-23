<?php 

    require_once('../../../controllers/koneksi.php');

    class AddDataPermintaanController{
        public function AddData($nama , $keterangan , $harga){
            $db = new DBConnect();

            $query = "INSERT INTO tbl_permintaan (nama, keterangan, harga) VALUES ('$nama', '$keterangan', '$harga')";
            $sql = mysqli_query($db->Connect(), $query);

            if($sql){
                return true;
            }
            else{
                return false;
            }
        }
    }