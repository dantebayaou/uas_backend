<?php

    require_once('../../../controllers/koneksi.php');

    class AddBarangController{
        public function AddBarang($kode, $nama, $keterangan, $harga, $tgl_masuk, $tgl_update, $status, $aktif, $submit){
            $db = new DBConnect();

            $query = "INSERT INTO tbl_barang (kode, nama , keterangan , harga , tglmasuk , tglupdate , status , aktif , submit) VALUES ('$kode' , '$nama', '$keterangan', '$harga', '$tgl_masuk', '$tgl_update', '$status', '$aktif', '$submit')";
            $sql = mysqli_query($db->Connect() , $query);

            if($sql){
                return true;
            }
            else{
                return false;
            }
        }
    }