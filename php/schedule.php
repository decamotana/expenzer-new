
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "expenzer";
if (isset($_POST['description'])) {

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $description = $_POST['description'];
    $date = $_POST['date'];
    $user_id = $_POST['user_id'];

    $sql = "INSERT INTO `schedules` (`description`, `date`, `user_id`) VALUES ('$description', '$date', '$user_id')";
    if ($conn->query($sql) === TRUE) {
        echo "asda";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['delete_id'])) {

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $delete_id = $_POST['delete_id'];

    // $sql = "INSERT INTO `schedules` (`description`, `date`, `user_id`) VALUES ('$description', '$date', '$user_id')";
    $sql = "DELETE FROM `schedules` WHERE `id` = '$delete_id'";
    if ($conn->query($sql) === TRUE) {
        echo "asda";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>