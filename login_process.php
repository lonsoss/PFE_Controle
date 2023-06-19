<?php
include 'db/config.php';

    if(isset($_POST['usermail']) && isset($_POST['password'])) {

        $usermail = @strtolower($_POST['usermail']);
        $email = @$_POST['email'];
        $password = @$_POST['password'];

        if(empty($usermail) && empty($password)){
            header("Location: login.php?empty-area=Username and password are required");
        }
        else if (empty($usermail)) {
            header("Location: login.php?empty-user=Username is required");
        }
        else if(empty($password)){
            header("Location: login.php?empty-pass=Password is required");
        }
        else{
            
            $sql = "SELECT * FROM users WHERE password = '$password' AND (username = '$usermail' OR email = '$usermail')";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if (($row['username'] === $usermail || $row['email'] === $usermail) && $row['password'] === $password) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php");
                }
                else{
                    header("Location: login.php?no-user=No such user!"); 
                }
            }
            else{
                header("Location: login.php?invalid=Invalid username or password"); 
            }
        }
        
    }
    else{
        header("Location: login.php?empty-fields=Please fill required fields"); 
    }