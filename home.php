<?php
include 'db/config.php';

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <div class="container">
        <div style="height: calc(100vh - 115px);" class="row d-flex align-items-center justify-content-center">
            <div class="box col-md-5 text-center border py-5">
                <h1 style="font-weight:bold;">Welcom Mr.<span style="color:#0353A4;"><?php echo ucfirst($_SESSION['username']); ?></span></h1>
                <h3 class="fw-light">Happy to see you</h3>
                <lord-icon
                    src="https://cdn.lordicon.com/lupuorrc.json"
                    trigger="loop"
                    delay="1500"
                    colors="primary:#121331,secondary:#0353a4"
                    style="width:250px;height:200px">
                </lord-icon></br>
                <a style="border-radius:50px; background-color:#0353A4;" class="btn text-light mt-2 px-5 fs-5" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
    <footer style="height:55px;background-color:#0353A4;" class="d-flex align-items-center justify-content-center">
        <p class="mb-0 py-3 text-muted small" style=" color:white !important;">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="fa-solid fa-bolt" style="color:#B9D6F2;"></i> By <a style="color:#B9D6F2;" class="text-decoration-none" href="#">Omar</a></p>
    </footer>
<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
</body>

</html>

<?php
}else{
    header("Location: login.php?auth_error=You cannot be authenticated!");
}
?>