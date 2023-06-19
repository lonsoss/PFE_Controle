<?php
include 'db/config.php';

    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword'])) {
        $username = @strtolower($_POST['username']);
        $email = @$_POST['email'];
        $password = @$_POST['password'];
        $cpassword = @$_POST['cpassword'];

        // verify if passwords are identical
        if($password == $cpassword){

            $verify = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
            $result = mysqli_query($con, $verify);
            $row = mysqli_fetch_assoc($result);

            // Verify if data already exists
            if (mysqli_num_rows($result) === 0){ //&& $row['username'] != $username && $row['email'] != $email) {
                // insertion
                $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
                $res = mysqli_query($con, $sql);

                // Selection 
                $ver = "SELECT * FROM users WHERE username = '$username' AND email = '$email'";
                $reso = mysqli_query($con, $ver);
                $row = mysqli_fetch_assoc($reso);

                // Verification & Redirection
                if ($row['username'] === $username && $row['email'] === $email && $row['password'] === $password) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php");
                    // print_r(mysqli_num_rows($result));
                }
                else{
                    header("Location: login.php?no-user=No such user!"); 
                }
            }
            else{
                header("location: register.php?exist-user=User already exist!");
            }
        }
        else{
            header("location: register.php?confirm-password=Please Confirm Password!"); 
        }
    }
    else{
        header("location: register.php?fill-fields=Please fill required fields!");
    }
    
