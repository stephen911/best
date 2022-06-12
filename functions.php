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
    if (mysqli_num_rows($sel) >= 1) {
    } else {
        echo 'User does not exist';
    }
}
