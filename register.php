<?php
include 'db/config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <title>Document</title>
    <style>
        *{
            font-family:Arial, Helvetica, sans-serif;
        }
        .box{
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header class="d-flex align-items-center justify-content-center shadow" style="height:60px;background-color:#0353A4;">
        <h1 class="text-center fw-bold text-light m-0">PFE <span class="fs-6 fw-light">(controle)</span></h1>
    </header>

    <div style="height: calc(100vh - 115px);" class="container d-flex align-items-center">
        <div class="row col-6 py-2">
            <img src="imgs/sign-up-animate.svg">
        </div>
        <div class="box row col-4 offset-1 border py-4 px-2">
            <h1 class="text-center">Sign Up</h1>
            <form method="POST" action="register_process.php">
            <?php 

                if (isset($_GET['no-user'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["no-user"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                if (isset($_GET['exist-user'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["exist-user"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                if (isset($_GET['confirm-password'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["confirm-password"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                if (isset($_GET['fill-fields'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["fill-fields"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }

                ?>
                <div class="mb-3">
                    <label for="exampleInputUserName" class="form-label">User Name</label>
                    <input type="text" name="username" class="form-control" id="exampleInputUserName" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword2">
                </div>
                <button type="submit" style="background-color:#0353A4;" class="btn btn-primary w-100 mb-2">Register</button>
            </form>
            <span>Already have an account? <a class="text-decoration-none" href="./login.php">Login</a></span>
        </div>
    </div>
    <footer style="height:55px;background-color:#0353A4;" class="d-flex align-items-center justify-content-center">
        <p class="mb-0 py-3 text-muted small" style=" color:white !important;">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="fa-solid fa-bolt" style="color:#B9D6F2;"></i> By <a style="color:#B9D6F2;" class="text-decoration-none" href="#">Omar</a></p>
    </footer>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>