<!DOCTYPE html>
<html lang="en">

<?php include("./includes/head-login.php") ?>

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "expenzer";


if (isset($_POST['submit'])) {
    /// Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (`name`, `username`, `password`) VALUES ('$name', '$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        // echo '<div class="alert alert-success" role="alert">
        //     Successfully Registered
        // </div>';
        header("Location: /Expenzer");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
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
                <p class="login-box-msg">Register a new membership</p>

                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
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
                                Register
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <br />
                <p class="mb-0">
                    <a href="index.php" class="text-center">I already have a account</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

    <?php include("./includes/login-scripts.php") ?>
</body>

</html>