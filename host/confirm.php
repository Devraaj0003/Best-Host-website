<?php
include './connect.php';
if (isset($_GET['confirm'])) {
    $name = $_GET['confirm'];
    $worker = $_GET['worker'];
    $workername = $_GET['role'];
    $status = $_GET['status'];
    $code = $_GET['code'];



    if ($code == 'worker') {
        if ($status == 'pending') {
            $sqli = "UPDATE `book` SET `status`='confirmed' WHERE `name` = '$name' AND `worker`='$worker'";
            $apply = mysqli_query($con, $sqli);
            if ($apply) {
                header('location:worker.php');
            }
        } elseif ($status == 'confirmed') {
            $sqli = "UPDATE `book` SET `status`='pending' WHERE `name` = '$name' AND `worker`='$worker'";
            $apply = mysqli_query($con, $sqli);
            if ($apply) {
                header('location:worker.php');
            }
        }
    }

    if ($code == 'admin') {
        if ($status == 'pending') {
            $sql = "UPDATE `worker` SET `status`='confirmed' WHERE `email` = '$workername'";
            $apply = mysqli_query($con, $sql);
            if ($apply) {
                header('location:admin/admin.php');
            }
        } elseif ($status == 'confirmed') {
            $sql = "UPDATE `worker` SET `status`='pending' WHERE `email` = '$workername'";
            $apply = mysqli_query($con, $sql);
            if ($apply) {
                header('location:admin/admin.php');
            }
        }

    }
    //  else {
    //     if ($status == 'pending') {
    //         $sql = "UPDATE `book` SET `status`='confirmed' WHERE `email` = '$email' AND `role` = '$role'";
    //         $apply_query = mysqli_query($con, $sql);
    //         if ($apply_query) {
    //             header('location:admin/admin.php');
    //         }
    //     } elseif ($status == 'confirmed') {
    //         $sql = "UPDATE `book` SET `status`='pending' WHERE `email` = '$email' AND `role` = '$role'";
    //         $apply_query = mysqli_query($con, $sql);
    //         if ($apply_query) {
    //             header('location:admin/admin.php');
    //         }
    //     }



}


?>