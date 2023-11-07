<!DOCTYPE html>
<html lang="en">
<?php
$log = 0;
$invalid = 0;
$validate = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../connect.php';
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $pass = $_POST['rpass'];
    $town = $_POST['town'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $book = $_POST['booking'];
    $id = "W".rand(100,999);
    $status = "pending";


    $sql = "INSERT INTO `worker`(`id`, `name`, `email`, `password`, `phone`, `town`, `state`, `gender`, `dob`, `role`,`booking`,`status`)
                        VALUES ('$id','$name','$email','$pass','$phone','$town','$state','$gender','$dob','$role','$book','$status')";

    $chkemail = "SELECT * FROM `worker` WHERE email ='$email'";
    $check = mysqli_query($con, $chkemail);
    if ($check) {
        $num = mysqli_num_rows($check);
        if ($num > 0) {
            $validate = 1;

        } else {
            $result = mysqli_query($con, $sql);

            if ($result) {
                $log = 1;
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully Registered</strong><hr>THANK YOU for choosing BEST HOST. The rest of your details should be conveyed through email. 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            } else {
                $invalid = 1;
                echo "not inserted";
            }

        }

    }



}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <script type="text/javascript">
        var npass = document.f1.npass;
        var repass = document.f1.rpass;


        function validate_password() {

            var pass = document.getElementById('password').value;
            var confirm_pass = document.getElementById('repassword').value;
            if (pass != confirm_pass) {
                document.getElementById('wrong_pass_alert').style.color = 'red';
                document.getElementById('wrong_pass_alert').innerHTML
                    = '☒ Use same password';
                document.getElementById('create').disabled = true;
                document.getElementById('create').style.opacity = (0.4);
            } else {
                document.getElementById('wrong_pass_alert').style.color = 'green';
                document.getElementById('wrong_pass_alert').innerHTML =
                    '🗹 Password Matched';
                document.getElementById('create').disabled = false;
                document.getElementById('create').style.opacity = (1);
            }
        }
    </script>
</head>

<body style="background-color:#cae9ff">
<nav class="nav d-flex flex-row justify-content-between text-light p-2" style="background-color:#1b4965">
        <div class="logo mx-3">
            <div class="h2 ">Best Host</div>
        </div>
        <div class="nav-menu d-flex flex-row ">
            <a class="nav-link active text-light" aria-current="page" href="../index.php">Home</a>
            <a class="btn nav-link text-light" href="../#about">About</a>
            <a class="btn nav-link text-light" href="register-worker.php">Register as worker</a>
            <a class="btn nav-link text-light" href="login.php">Log in</a>
            <a class="btn nav-link text-light" href="register-customer.php">Sign Up</a>
        </div>
    </nav>
<div class="container w-75 p-2">
    <form method="POST" class="bg-light p-3 m-3" >
      
            <div class="row mt-1">
                <div class="col-12  d-flex justify-content-center">
                <div class="heading">
                <h1 style="color:#1b4965">
                    
                            SignUp
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6 mb-2 ">
                    <input type="text" class="form-control" id="firstname" placeholder="Firstname" name="fname"
                        required>
                </div>
                <div class="col-6 mb-2">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-2">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="npass"
                        required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div>
                <div class="col-6 mb-2">
                    <input type="password" class="form-control" id="repassword" placeholder="Confirm password"
                        name="rpass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                        onkeyup="validate_password()">
                </div>
            </div>
            <span id="wrong_pass_alert"></span>
            <div class="row">
                <div class="col-6 mb-2">
                    <input type="text" class="form-control" id="town" placeholder="Town" name="town" required>
                </div>
                <div class="col-6 mb-2">
                    <input type="text" class="form-control" id="state" placeholder="State" name="state" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-2">
                    <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" required
                        minlength="10" maxlength="12">
                </div>
                <div class="col-6 mb-2">
                    <label class="text m-2">Gender&nbsp;</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="female">
                        <label class="form-check-label" for="inlineRadio1">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="male">
                        <label class="form-check-label" for="inlineRadio2">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="others">
                        <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 mb-2">
                <input type="date" name="dob" class="form-control" placeholder="Date Of Birth" required>
                </div>
                <div class="col-6 mb-2">
                    <select class="form-control"  placeholder="About" name="role" aria-label="Default select example">
                        <option selected>Select an Position</option>
                        <option value="anchor">Anchor</option>
                        <option value="stage-manager">Stage Manager</option>
                        <option value="catering">Catering</option>
                        <option value="crowd-manager">Crowd Management</option>
                    </select>
                </div>
            </div>
            <div class="row ">
            <div class="col">
                <label>Upload Resume</label>
                </div>
                <div class="col-10">
                    <input type="file" class="form-control bg-white mb-2" placeholder="Upload Resume" name="resume" >
                </div>
            </div>


            <div class="col">
                <label>Upload Resume</label>
                </div>
                <div class="col-10">
                <input type="text" name="booking" class="d-none" value="none" placeholder="booking">
                </div>
            </div>



            <div class="row ">
                <div class="col-12">
                    <input type="submit" class="btn text-white w-100" id="registerbtn" value="Register" name="submit" style="background-color:#1b4965">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <small>Already have an account? <a href="login.php">Login</a></small>

                </div>
                <div id="news"></div>
            </div>
        
    </form>
    </div>

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