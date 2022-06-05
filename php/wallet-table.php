
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "expenzer";

if (isset($_POST['id'])) {
    # code...
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_POST['id'];
    $sql = "SELECT * FROM `wallets` WHERE `user_id` = '" . $id . "'";
    $result = mysqli_query($conn, $sql);
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data);
}
?>