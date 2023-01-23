<?php

    require_once('../../controllers/koneksi.php');

    class EditBarangController{
        public function Edit($id, $kode, $nama, $keterangan, $harga, $tgl_masuk, $tgl_update, $status, $aktif, $submit){
            $db = new DBConnect();
            
            $query = "UPDATE tbl_barang SET 
                kode = '$kode',
                nama = '$nama',
                keterangan = '$keterangan',
                harga = '$harga',
                tglmasuk = '$tgl_masuk',
                tglupdate = '$tgl_update',
                status = '$status',
                aktif = '$aktif',
                submit = '$submit'
                WHERE id = '$id'
            ";

            $sql = mysqli_query($db->Connect() , $query);

            if($query){
                return true;
            }
            else{
                return false;
            }
        }
    }