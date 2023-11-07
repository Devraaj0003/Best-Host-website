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
    $myphone = $_SESSION['myphone'];
    $mytown = $_SESSION['mytown'];
    $mystate = $_SESSION['mystate'];
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management Profile</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">BEST HOST</a>
    </nav>

    <div class="container mt-5">
        <div class="row d-flex flex-cloumn">
            <div class="h1">PROFILE</div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="row border-dark shadow-lg ">
                    <div class="mx-3 rounded-circle border bg-dark d-flex justify-content-center align-items-center mb-5"
                        style="height: 250px;width: 300px;">
                        <div class="mx-3 rounded-circle bg-light" style="height: 200px;width: 200px;"></div>
                    </div>
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <div class="btn border-info active mb-3 w-75">PROFILE</div>
                        <div class="btn border-info mb-3 w-75 "><a href="main.php" class="text-decoration-none">HOME</a></div>
                        <div class="btn border-info mb-3 w-75"><a href="cart.php" class="text-decoration-none">MY CART</a></div>
                        <div class="btn border-info mb-3 w-75"><a href="logout.php" class="text-decoration-none">SIGN OUT</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md ml-3 ">
                <div class="row border-dark shadow-lg flex-column ">
                    <div class="row mt-3 mx-5">
                        <div class="col">
                            <div class="h3">Name</div>
                        </div>
                        <div class="col align-items-center">
                            <div class="h6 "><?php echo $myname?></div>
                        </div>
                    </div>
                    <div class="row mt-3 mx-5">
                        <div class="col">
                            <div class="h3">Email</div>
                        </div>
                        <div class="col">
                            <div class="h6"><?php echo $myemail?></div>
                        </div>
                    </div>
                    <div class="row mt-3 mx-5">
                        <div class="col">
                            <div class="h3">Phone</div>
                        </div>
                        <div class="col">
                            <div class="h6"><?php echo $myphone?></div>
                        </div>
                    </div>
                    <div class="row mt-3 mx-5">
                        <div class="col">
                            <div class="h3">Town</div>
                        </div>
                        <div class="col">
                            <div class="h6"><?php echo $mytown?></div>
                        </div>
                    </div>
                    <div class="row mt-3 mx-5">
                        <div class="col">
                            <div class="h3">State</div>
                        </div>
                        <div class="col">
                            <div class="h6"><?php echo $mystate?></div>
                        </div>
                    </div>
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