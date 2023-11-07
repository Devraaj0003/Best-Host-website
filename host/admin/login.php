<!DOCTYPE html>
<html lang="en">


<?php
$login = 0;
$invalid = 0;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../connect.php';

    $email = $_POST['email'];
    $pass = $_POST['password'];


    if ($email == 'Admin@123' && $pass == 'Admin@123') {
        header('location:admin.php');


    } else {
        header('location:login.php');
    }


}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
</head>

<body style="background-color:#cae9ff">
    <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success </strong>You successfully login in.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>

    <?php
    if ($invalid) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Invalid </strong>Invalid credentials.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
</div>';
    }
    ?>

    <div class="container bg-light w-75">

        <div class="row mt-5 justify-content-center">
            <div class="col  mt-1 text-center">
                <form method="POST" action="">
                    <div class="row mt-4">
                        <div class="heading">
                            <h1 style="color:#1b4965">
                                HI ADMIN
                            </h1>
                        </div>
                    </div>
                    <div class="row justify-content-center ">
                        <div class="col col-9 mt-3">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                                required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col col-9 mt-3 text-center">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password" required>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col col-9 mt-3 mb-3 text-center">
                            <input type="submit" value="Log in" class="btn w-100 text-white"
                                style="background-color:#1b4965"><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
</body>

</html>