<?php 

    require_once('../../controllers/Data/GetDataBarangById.php');
    require_once('../../controllers/Data/DeleteBarang.php');

    session_start();
    if(!isset($_SESSION['level']) == "admin"){
        header('location:../../../index.php');
    }

    $id = $_GET['id'];

    if(isset($_POST['submit'])){
        $Delete = new DeleteController();
        if($Delete->Delete($id)){
            header("location:index.php");
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
        <div class="container-fluid d-flex justify-content-center align-items-center" style = "height: 100vh;">
            <div class="container">
                <div class = "d-flex justify-content-between align-items-center pb-3">
                    <h5>
                        Apakah anda yakin ingin menghapus data ini?
                    </h5>
                    <a href = "view-barang.php" class="btn btn-primary">Kembali</a>
                </div>
                <table class="table table-hover table-striped text-center teable-responsive">
                    <thead class = "bg-primary text-white">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Harga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td> <?php echo $data['id'] ?> </td>
                            <td> <?php echo $data['nama'] ?> </td>
                            <td> <?php echo $data['keterangan'] ?> </td>
                            <td> <?php echo $data['harga'] ?> </td>
                        </tr>
                    </tbody>
                </table>
                <form method = "POST">
                    <input type = "submit" value = "Yakin" class="btn btn-danger" name = "submit" />
                    <a href = 'view-barang.php' class="btn btn-outline-primary">Tidak</a>
                </form>
            </div>
        </div>
    </body>
</html>