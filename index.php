<?php
    require_once('./controllers/Auth/LoginController.php');

    session_start();
    if(isset($_SESSION['level']) == 'user'){
        header("location:view/user/index.php");
    }
    else if(isset($_SESSION['level']) == 'admin'){
        header('location:view/admin/index.php');
    }

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $Controller = new LoginController();
        
        if($Controller->Login($username, $password)){
            echo('login berhasil');
        }
        else{
            echo('login gagal');
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Superstore ID</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="./style/signin.css" rel="stylesheet">
    
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form class="user" method="POST">
            <img class="mb-4" src="logo.png" alt="" width="200" height="200">
            <h1 style="color:white;" class="h3 mb-3 fw-normal">Selamat Datang Silahkan Login</h1>

            <div class="form-floating">
                <input type="username" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">

            </div>

            <input class="w-100 btn btn-lg btn-primary" type="submit" value="Login" name = "login" />
            <a class="page-link bg-info bg-opacity-50 text-light mt-3" href="./view/register.php">Daftar Baru</a>

            <p class="mt-5 mb-3 text-muted">&copy; SuperStore 2023</p>
        </form>

    </main>



</body>

</html>