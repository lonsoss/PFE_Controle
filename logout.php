<?php
ob_start();
session_start();
session_unset();
session_destroy();
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
    </style>
</head>
<body>
    <header class="d-flex align-items-center justify-content-center shadow" style="height:60px;background-color:#0353A4;">
        <h1 class="text-center fw-bold text-light m-0">PFE <span class="fs-6 fw-light">(controle)</span></h1>
    </header>

    <div style="height: calc(100vh - 115px);" class="container d-flex align-items-center justify-content-center">
        <h1 class="text-center fw-bold text-light py-2 px-5 shadow" style="font-family:Arial;background-color:#0353A4; border-radius:50px;">Logged out successfully...😢</h1>
    </div>
    <footer style="height:55px;background-color:#0353A4;" class="d-flex align-items-center justify-content-center">
        <p class="mb-0 py-3 text-muted small" style=" color:white !important;">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="fa-solid fa-bolt" style="color:#B9D6F2;"></i> By <a style="color:#B9D6F2;" class="text-decoration-none" href="#">Omar</a></p>
    </footer>
    
</body>
</html>

<?php
header( "Refresh:3; url=login.php", true, 303);
?>