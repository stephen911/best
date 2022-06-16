<?php

include 'starter.php';
$id = $_GET['id'];
$del = mysqli_query($conn, "DELETE FROM users WHERE id = '$id'");

if ($del) {
    echo '<script>alert("User deleted successfuly ");
        window.location="dashboard.php";
    </script>';
} else {
    echo '<script>alert("Failed to deleted  user ");
    window.location="dashboard.php";
</script>';
}
