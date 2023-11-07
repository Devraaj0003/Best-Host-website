<!DOCTYPE html>
<html lang="en">
<?php
include '../connect.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management Profile</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>


<body>

    <nav class="nav d-flex flex-row justify-content-between text-light p-2" style="background-color:#1b4965">
        <a class="navbar-brand text-light" href="#">BEST HOST</a>
        <div class="nav-menu d-flex flex-row ">
            <a class="nav-link text-light" href="#user">USERS</a>
            <a class="nav-link text-light" href="#book">BOOKING</a>
            <a class="nav-link text-light" href="#reg">NEW REGISTRSTION</a>
            <a class="nav-link text-light" href="../logout.php">Sign Out</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row d-flex flex-cloumn">
            <div class="h1">ADMIN PANEL</div>
        </div>
        <div class="row">

            
                <!-- user -->
                <div class="container border-dark shadow-lg flex-column rounded w-100" id="users">
                    <div class="row mt-3 mx-5">
                        <div class="col">
                            <div class="section bg-light " id="newreg">
                                <div class="h3 text-dark my-3 ml-3"> USERS</div>
                                <table class="table">
                                    <thead class="table text-light" style="background-color:#1b4965" >
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Town</th>
                                        <th>State</th>
                                        <th>DOB</th>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT * FROM `user`";
                                        $result = mysqli_query($con, $sql);
                                        if ($result) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<tr>
                                                <td>$row[name]</td>
                                                <td>$row[email]</td>
                                                <td>$row[phone]</td>
                                                <td>$row[town]</td>
                                                <td>$row[state]</td>
                                                <td>$row[dob]</td>
                                                </tr>";
                                            }
                                        } else {
                                            echo "NO EMPLOYEE'S";
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>

                </div>
          

            <!-- booking -->
            <div class="container border-dark shadow-lg flex-column rounded mt-5" id="book">
                <div class="row mt-3 mx-5">
                    <div class="col">
                        <div class="section bg-light ">
                            <div class="h3 text-dark my-3 ml-3"> BOOKINGS</div>
                            <table class="table">
                            <thead class="table text-light" style="background-color:#1b4965" >
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Place</th>
                                    <th>Date</th>
                                    <th>Worker</th>
                                    <th>ID</th>
                                    <th>Count</th>
                                    <th>Status</th>

                                </thead>
                                <tbody>

                                    <?php
                                    $sql = "SELECT * FROM `book`";
                                    $result = mysqli_query($con, $sql);
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[role]</td>
                    <td>$row[place]</td>
                    <td>$row[date]</td>
                    <td>$row[worker]</td>
                    <td>$row[id]</td>
                    <td>$row[count]</td>
                    <td>$row[status]</td>
                 </tr>";
                                        }
                                    } else {
                                        echo "NO EMPLOYEE'S";
                                    }
                                    ?>

                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>

            <!-- new REGISTRSTION -->
            <div class="container border-dark shadow-lg flex-column rounded mt-5 " id="reg">
                <div class="row mt-3 mx-5">
                    <div class="col">
                        <div class="section bg-light ">
                            <div class="h3 text-dark my-3 ml-3"> WORKER</div>
                            <table class="table">
                            <thead class="table text-light" style="background-color:#1b4965" >
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Town</th>
                                    <th>State</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>

                                    <?php
                                    $sql = "SELECT * FROM `worker`";
                                    $result = mysqli_query($con, $sql);
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[town]</td>
                    <td>$row[state]</td>
                    <td>$row[gender]</td>
                    <td>$row[dob]</td>
                    <td>$row[role]</td>
                    <td><button><a href='../confirm.php?confirm=admin&role=$row[email]&status=$row[status]&code=admin' >$row[status]</a></button></td>
                    </tr>";
                                        }
                                    } else {
                                        echo "NO EMPLOYEE'S";
                                    }
                                    ?>

                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts -->
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