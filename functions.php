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
    // session_destroy();
    unset($_SESSION['id']);
    echo '<script>window.location="index.php"</script>';
}

function checker()
{
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '<script>
        alert("You need to login first");
        window.location="index.php"</script>';
    }
}

function users()
{
    include 'starter.php';
    // session_start();
    $id = $_SESSION['id'];
    $d = mysqli_query($conn, "SELECT * FROM users WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}

function updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard)
{
    include 'starter.php';
    $up = mysqli_query($conn, "UPDATE users SET title='$title', name= '$name', gender = '$gender', email='$email', contact= '$contact', telegram='$telegram', lincesed ='$lincesed', nameofschool='$nameofschool', region ='$region', district ='$district', foodpref='$foodpref', heard ='$heard' WHERE id='$id'  ");
    if ($up) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}
