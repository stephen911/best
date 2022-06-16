<?php
include "starter.php";
$id = $_GET['id'];
$del = mysqli_query($conn, "DELETE FROM users WHERE id = '$id'");

if($del){
    echo 'deleted';
}else{
    echo 'unable to delete';

}

?>