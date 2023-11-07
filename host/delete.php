<?php
include './connect.php';
if (isset($_GET['delete'])) {
    $email = $_GET['delete'];
    $role = $_GET['role'];

    $sql = "DELETE FROM `book` WHERE `email` = '$email' AND `role` = '$role'";
    $apply_query = mysqli_query($con, $sql);
    if ($apply_query) {
        header('location:cart.php');
    }
    


}


?>