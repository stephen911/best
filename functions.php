<?php

// Developer : Frederick  Ennin
// Email : kpin463@gmail.comin
// started on Saturday11 June,2022
// github :https://github.com/dollarstir

function db()
{
    return  'starter.php';
}

function login($email, $password)
{
    include 'starter.php';

    // extract($_POST);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $password = md5($password);
    $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $sel2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

    if (mysqli_num_rows($sel) >= 1) {
        if (mysqli_num_rows($sel2) >= 1) {
            $row = mysqli_fetch_array($sel2);
            session_start();
            $_SESSION['id'] = $row['id'];

            echo '<script>alert("Login successful");
            window.location="dashboard.php";
            </script>';
        } else {
            echo '<script>alert("Login details not correct")</script>';
        }
    } else {
        echo '<script>alert("User account does not exist")</script>';
    }
}

function logout()
{
    session_start();
    unset($_SESSION['id']);
    echo 'window.location="index.php"';
}
