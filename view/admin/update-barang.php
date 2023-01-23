<?php 

    require_once('../../controllers/Data/GetDataBarangById.php');
    require_once('../../controllers/Data/EditDataBarang.php');

    session_start();
    if(!isset($_SESSION['level']) == "admin"){
        header('location:../../../index.php');
    }

    $id = $_GET['id'];

    if(isset($_POST['submit'])){
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $keterangan = $_POST['keterangan'];
        $harga = $_POST['harga'];
        $tglmasuk = $_POST['tglmasuk'];
        $tglupdate = $_POST['tglupdate'];
        $status = $_POST['status'];
        $aktif = $_POST['aktif'];
        $submit = $_POST['submit'];

        $Controller = new EditBarangController();

        if($Controller->Edit($id, $kode, $nama, $keterangan, $harga, $tglmasuk, $tglupdate, $status, $aktif, $submit)){
            header("location:view-barang.php");
        }
        else{
            echo('data gagal');
        }
    }

    $Controller = new GetByIdController();
    $data = $Controller->GetData($id);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SuperStore ID</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body>
        <div class="container d-flex justify-content-center align-items-center py-5">
            <div class="container">
                <div class = "d-flex justify-content-between align-items-center pb-3">
                    <h5>
                        Update Data
                    </h5>
                    <a href = "view-barang.php" class = 'btn btn-primary'>Kembali</a>
                </div>
                <form method="POST">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Barang: </label>
                    <input type="text" value = "<?php echo $data['kode'] ?>" name="kode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama barang: </label>
                    <input type="text" name="nama" value = "<?php echo $data['nama'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Keterangan: </label>
                    <input type="textarea" value = "<?php echo $data['keterangan'] ?>" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga: </label>
                    <input type="number" name="harga" value = "<?php echo $data['harga'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Masuk: </label>
                    <input type="date" name="tglmasuk" value = "<?php echo $data['tglmasuk'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Update: </label>
                    <input type="date" name="tglupdate" value = "<?php echo $data['tglupdate'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Status: </label>
                    <input type="text" name="status" value = "<?php echo $data['status'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Aktif: </label>
                    <input type="number" name="aktif" value = "<?php echo $data['aktif'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>

                <button type="submit" name="submit" value=<?php echo date("h:i:sa"); ?> class="btn btn-primary">Submit</button>
                <input type="reset" class="btn btn-light" value="Reset">

                </form>
            </div>
        </div>
    </body>
</html>