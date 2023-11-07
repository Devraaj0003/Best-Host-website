<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$myname = $_SESSION['myname'];
if (!isset($myname)) {
    header('location:index.php');
} else {
    include './connect.php';
    $myemail = $_SESSION['myemail'];
    if (isset($_GET['booking'])) {
        $role = $_GET['booking'];

    }
}
?>





<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management Profile</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color:#cae9ff">

    <nav class="nav d-flex flex-row justify-content-between text-light p-2" style="background-color:#1b4965">
        <div class="logo mx-3">
            <div class="h2 ">Best Host</div>
        </div>
        <div class="nav-menu d-flex flex-row ">
            <a class="nav-link active text-light" aria-current="page" href="main.php">Home <small>
                    <?php echo $myname ?>
                </small></a>
            <a class="nav-link text-light" href="profile.php">Profile</a>
            <a class="nav-link text-light" href="cart.php">My Cart</a>
            <a class="nav-link text-light" href="./logout.php">Log out</a>
        </div>
    </nav>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include './connect.php';
        $date = $_POST['date'];
        $place = $_POST['place'];
        $count = $_POST['count'];
        $role = $_POST['role'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $book = $_POST['booking'];
        $id = "BO" . rand(1000, 9999);
        $status = "pending";

        $sqlup = "UPDATE `worker` SET `booking`='booked' WHERE `email`='$book'";
        $ress = mysqli_query($con, $sqlup);

        $sql = "INSERT INTO `book`(`name`, `email`, `role`, `date`, `place`, `count`, `status`, `id`,`worker`)
         VALUES ('$name','$email','$role','$date','$place','$count','$status','$id','$book')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Successfully !</strong>Booked.<hr> Your order will be confirmed quickly.
    </div>";
        } else {
            echo " <div class=' alert alert-danger alert-dismissible fade show'  role=' alert' >
        <strong>Invalid </strong>Booking failed.
    </div>";
        }
    }
    ?>
    <div class="container-xxl bg-white p-4 mt-5 mx-5">

        <div class="section mx-5">
            <div class="row mt-5 mb-4 d-flex justify-content-center">
                <div class="h1 display-4 ">BOOKING
                </div>
            </div>
            <div class="row ">
                <div class="col">
                    <img src="photos/achor.jpg" alt="anchor" class="w-100 h-75">
                </div>
                <div class="col d-flex flex-column p-5 m-3">
                    <div class="row mt-5 h1 d-flex justify-content-center text-uppercase">
                        <?php echo $role ?>
                    </div>
                    <form method="post">
                        <input type="text" name="name" class="d-none" value="<?php echo $myname ?>" placeholder="name">
                        <input type="text" name="email" class="d-none" value="<?php echo $myemail ?>"
                            placeholder="email">
                        <input type="text" name="role" class="d-none" value="<?php echo $role ?>" placeholder="email">

                        <input type="date" name="date" class="mt-5 p-2 w-100 border-info rounded shadow-lg"
                            placeholder="Date" required>
                        <input type="text" name="place" class="mt-3 p-2 w-100 border-info rounded shadow-lg"
                            placeholder="Place" required>
                        <input type="number" name="count" id="count" value="1"
                            class="mt-3 p-2 w-100 border-info rounded shadow-lg d-none" placeholder="Number of person"
                            required>
                      
                        <select class="mt-3 p-2 w-100 border-info rounded shadow-lg" placeholder="Select Worker"
                            name="booking" aria-label="Default select example" required>
                            <option selected>Select a Worker</option>
                            <?php
                            $sqli = "SELECT `name` FROM `worker`WHERE `booking`='none' AND `role`= '$role'";
                            $res = mysqli_query($con, $sqli);
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo "<option value='$row[name]'>$row[name]</option>";
                            }
                            ?>
                        </select>
                        <input type="submit" class="btn btn-primary w-100 mt-3 p-2" id="registerbtn" value="Book Now"
                            name="submit">
                    </form>
                </div>
            </div>
        </div>

    </div>


    <!-- Add Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>