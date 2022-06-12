<?php

// Developer : Frederick  Ennin
// Email : kpin463@gmail.comin
// started on Saturday11 June,2022
// github :https://github.com/dollarstir

function db()
{
    return require 'starter.php';
}

function login()
{
    db();

    extract($_POST);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $sel2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emal' AND password = '$password'");

    if (mysqli_num_rows($sel) >= 1) {
        if (mysqli_num_rows($sel2) >= 1) {
            $row = mysqli_fetch_array($sel2);
            session_start();
            $_SESSION['id'] = $row['id'];

            echo '<script>alert("Login successful");
            window.location="dashboard.php";
            </script>';
        } else {
        }
    } else {
        echo 'User does not exist';
    }
}
