<?php

include 'db.php';
include '../send.php';

$id = $_GET['id'];

$up = mysqli_query($conn, "UPDATE bookings SET status='approved' WHERE id='$id'");
$ck = mysqli_query($conn, "SELECT * FROM bookings WHERE id= '$id'");
$rc = mysqli_fetch_array($ck);
$mid = $rc['userid'];
$ck2 = mysqli_query($conn, "SELECT * FROM utable WHERE id= '$mid'");
$rc2 = mysqli_fetch_array($ck2);
$uname = $rc2['name'];
$cname = $rc = ['cname'];
$ccontact = $rc['ccontact'];
$cneed = $rc['ctype'];
$uid = $rc2['id'];
if ($up) {
    mysqli_query($conn, "INSERT INTO notification (uid,nmess,status) VALUES ('$uid','Your request for a Counsellor has been successful.','unread')");
    $txt1 = 'Dear '.$uname.', Your request for a Counsellor '.$cname.' has been successful. Kindly visit the iCounse-Gh App and Check Bookings to interact. ';
    $send8 = new send();
    $send8->key = 'y0i5w3vGnQi6M45azQACwS4vo';
    $send8->message = $txt1;
    $send8->numbers = $rc2['contact'];
    $send8->sender = 'iCounsel Gh';
    $isError = true;
    $response8 = $send8->sendMessage();

    $ucont = $rc2['contact'];

    $txtw = 'Dear '.$cname.', You have been assigned to '.$uname.'. Contact : '.$ucont.', Counselling need : '.$cneed.' in the iCounsel-Gh App';
    $send9 = new send();
    $send9->key = 'y0i5w3vGnQi6M45azQACwS4vo';
    $send9->message = $txtw;
    $send9->numbers = $ccontact;
    $send9->sender = 'iCounsel Gh';
    $isError = true;
    $response9 = $send9->sendMessage();

    echo '<script> window.location="bookings.php"</script>';
} else {
    echo '<script> 
    alert ("Failed to update");
    window.location="bookings.php"</script>;
    ';
}
