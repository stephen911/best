<?php

 include 'functions.php';
 include 'yolkpay.php';
 include 'yolksms.php';
$send = new Yolksms();
 $yolk = new YolkPay();

 checker();
 $user = users();
//  var_dump($_SESSION['id']);

if (isset($_GET['ref'])) {
    extract($_GET);

    $uid = $_SESSION['id'];
    include 'starter.php';
    $sel = mysqli_query($conn, "SELECT * FROM users WHERE id = '$uid'");
    $row = mysqli_fetch_array($sel);

    payment($uid, $ref, $amount);
    echo  '<script>window.location="payment.php"</script>';
}
