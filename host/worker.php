<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$myname = $_SESSION['name'];
if (!isset($myname)) {
    header('location:index.php');
} else {
    include './connect.php';
    $myemail = $_SESSION['email'];

}
?>





<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BestHost - Worker</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color:#cae9ff">

    <nav class="nav d-flex flex-row justify-content-between text-light p-2" style="background-color:#1b4965">
        <div class="logo mx-3">
            <div class="h2 ">Best Host</div>
        </div>
        <div class="nav-menu d-flex flex-row ">
            <a class="nav-link active text-light" aria-current="page" href="worker.php">Home <small>
                    <?php echo $myname ?>
                </small></a>
            <a class="nav-link text-light" href="./logout.php">Log out</a>
        </div>
    </nav>
    <div class="container-xxl bg-white p-4 mt-5 mx-5">

        <div class="h2">My Jobs</div>
        <div class="section mx-5">

            <table class="table rounded">
                <thead class="table text-light" style="background-color:#1b4965">
                    <th>OrderBy</th>
                    <th>Role</th>
                    <th>Date</th>
                    <th>Place</th>
                    <th>Person</th>
                    <th>Worker</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    
                    $sql = "SELECT * FROM `book` WHERE `worker`= '$myname'";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                  <form method='get'>
                  <td>$row[name]</td>
                    <td>$row[role]</td>
                    <td>$row[date]</td>
                    <td>$row[place]</td>
                    <td>$row[count]</td>
                    <td>$row[worker]</td>
                    <td>$row[status]</td>
                    <td><button><a href='./confirm.php?confirm=$row[name]&status=$row[status]&code=worker&worker=$row[worker]' >$row[status]</a></button></td>

                  </form>
                    </tr>";
                        }
                    } else {
                        echo "NO NEW REGISTRATION'S";
                    }
                    ?>

                </tbody>
            </table>
        </div>

    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // <button><a href='delete.php?delete=$myemail&role=$row[role]'>DELETE</a></button></td>
    
        include './connect.php';
        $date = $_POST['date'];
        $place = $_POST['place'];
        $count = $_POST['count'];
        $role = $_POST['role'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $id = "BO" . rand(1000, 9999);
        $status = "pending";
        $sql = "INSERT INTO `book`(`name`, `email`, `role`, `date`, `place`, `count`, `status`, `id`,)
         VALUES ('$name','$email','$role','$date','$place','$count','$status','$id')";
        $result = mysqli_query($con, $sql);
        echo "posted";
        if ($result) {
            echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Successfully !</strong> Added.
    </div>";
        } else {
            echo " <div class=' alert alert-danger alert-dismissible fade show'  role=' alert' >
        <strong>Invalid </strong> Adding failed.
    </div>";
        }
    }
    // else{
    //     echo " <div class=' alert alert-danger alert-dismissible fade show'  role=' alert' >
    //     <strong>Invalid </strong>Job Posting failed.
    // </div>";
    // }
    // echo "Name: " . $date . "<br>";
    // echo "Email: " . $place . "<br>";
    ?>


    <!-- Add Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>