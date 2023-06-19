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
        <div class="box row col-4 offset-1 border py-4 px-2">
            <h1 class="text-center">Login</h1>
            <form method="POST" action="login_process.php">
                <?php 

                if (isset($_GET['empty-area'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["empty-area"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                if (isset($_GET['empty-user'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["empty-user"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                if (isset($_GET['empty-pass'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["empty-pass"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                if (isset($_GET['no-user'])) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["no-user"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                if (isset($_GET['invalid'])) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["invalid"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                if (isset($_GET['empty-fields'])) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["empty-fields"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                
                ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email or Username</label>
                    <input type="text" name="usermail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button name="login-btn" style="background-color:#0353A4;" type="submit" class="btn btn-primary w-100 mb-2">Login</button>
                <span>Don't have an account? <a class="text-decoration-none" href="./register.php">SignUp</a></span>
            </form>
        </div>
        <div class="row col-6 offset-1 py-2">
            <img src="imgs/tablet-login-animate.svg">
        </div>
    </div>
    <footer style="height:55px;background-color:#0353A4;" class="d-flex align-items-center justify-content-center">
        <p class="mb-0 py-3 text-muted small" style=" color:white !important;">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="fa-solid fa-bolt" style="color:#B9D6F2;"></i> By <a style="color:#B9D6F2;" class="text-decoration-none" href="#">Omar</a></p>
    </footer>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>