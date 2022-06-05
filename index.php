<!DOCTYPE html>
<html lang="en">

<?php include("./includes/head-login.php") ?>

<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "expenzer";


if (isset($_POST['submit'])) {
    /// Create connection
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            $_SESSION['id'] = $row["id"];
            $_SESSION['name'] = $row["name"];
            $_SESSION['username'] = $row["username"];
            header("Location: /expenzer/dashboard.php");
        }
    } else {
        echo '<div class="alert alert-danger" role="alert" style="
        border-bottom: 11px!important;
        position: absolute;
        width: 100%;
        z-index: 1;
        text-align: center;
    ">
       User Not Found!
      </div>';
    }
    mysqli_close($conn);
}
?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>EXPENZER</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12">
                            <button type="submit" name="submit" class=" btn btn-primary btn-block">
                                Sign In
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <br />
                <p class="mb-0">
                    <a href="registration.php" class="text-center">Register a new account</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

    <?php include("./includes/login-scripts.php") ?>
</body>

</html>