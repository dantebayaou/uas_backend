<?php
    require_once('../../controllers/Data/GetDataBarang.php');

    session_start();
    if(!isset($_SESSION['level']) == "admin"){
        header('location:../../../index.php');
    }

    $Controller = new GetDataBarangController();
    $data = $Controller->GetData();
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
        <script>
            function fileValidation() {
                var fileInput = document.getElementById('foto');
                var filePath = fileInput.value;
                var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                if (!allowedExtensions.exec(filePath)) {
                    alert('Silakan upload file dengan tipe .jpeg/.jpg/.png/.gif');
                    fileInput.value = '';
                    return false;
                } else {
                    if (fileInput.files && fileInput.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            document.getElementById('upload_foto').src = e.target.result;
                        };
                        reader.readAsDataURL(fileInput.files[0]);
                    }
                }
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </symbol>
        </svg>

        <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
            <div class="container">
                <nav class="navbar bg-primary bg-opacity-10">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="indexfix.php">
                            <img src="../../logo.png" alt="" width="200" height="200" class="d-inline-block align-text-top">
                        </a>
                    </div>
                    <h2 style="color:white ;">
                        Selamat datang, <?php echo $_SESSION['username'] ?>
                        <br /> <br />
                    </h2>
                </nav>
            </div>
        </nav>

        <div class="py-5 mb-2 bg-white container">
            <div class = "d-flex justify-content-between align-items-center">
                <nav aria-label="...">
                    <ul class="pagination pagination-lg">
                        <li class="page-item">
                            <a class="page-link bg-primary text-light fs-6" href="index.php">Home Page</a>
                        </li>

                        <li class="page-item bg">
                            <a class="page-link bg-primary text-light fs-6" href="./data/index.php">Barang Request Masuk </a>
                        </li>

                        <li class="page-item bg">
                            <a class="page-link bg-primary text-light fs-6" href="./data/add-barang.php">Tambah Data </a>
                        </li>

                        <li class="page-item bg">
                            <a class="page-link bg-info text-light fs-6" href="#">Hapus dan Update Data </a>
                        </li>
                    </ul>
                </nav>
                <div class = 'btn btn-danger'>
                    <a href = "../../controllers/Auth/LogoutController.php" class = "text-white">
                        Log Out
                    </a>
                </div>
            </div>

            <h2 class = "py-4" >Data</h2>
            <div class="table-responsive">
                <table class="table table-hover table-striped text-center">
                    <thead class = "bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                            $id = 1;
                            foreach($data as $row){
                        ?>

                        <tr>
                            <td style = "vertical-align: middle;"> <?php echo $id ?> </td>
                            <td style = "vertical-align: middle;"> <?php echo $row['kode'] ?> </td>
                            <td style = "vertical-align: middle;"> <?php echo $row['nama'] ?> </td>
                            <td style = "vertical-align: middle;"> <?php echo $row['keterangan'] ?> </td>
                            <td style = "vertical-align: middle;"> <?php echo $row['harga'] ?> </td>
                            <td style = "vertical-align: middle;"> <?php echo $row['status'] ?> </td>
                            <td style = "vertical-align: middle;">
                                <a href = "update-barang.php?id=<?php echo $row['id'] ?>" class="btn btn-warning mb-2">Edit</a>
                                <a href= "delete-barang.php?id=<?php echo $row['id'] ?>" class="btn btn-danger mb-2">Hapus</a>
                            </td>
                        </tr>

                        <?php 
                                $id++;
                            } 
                        ?>

                    </tbody>

            </div>
        </div>
    </body>

</html>