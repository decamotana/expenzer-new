
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
    // $id = 1;
    $json = array();

    // food
    $sql = "SELECT SUM(amount) AS `food_total`  FROM `wallets` WHERE `user_id` = '" . $id . "' AND `type` = 'Food & Drink'";
    $result = mysqli_query($conn, $sql);
    $food = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        // $food = $row;
        // array_push($json, $row);
        $json['food_total'] = $row['food_total'];
    }

    // trans
    $sql = "SELECT SUM(amount) AS `tran_total`  FROM `wallets` WHERE `user_id` = '" . $id . "' AND `type` = 'Transportation'";
    $result = mysqli_query($conn, $sql);
    $tran = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        // $tran = $row;
        $json['tran_total'] = $row['tran_total'];
    }

    // pers
    $sql = "SELECT SUM(amount) AS `pers_total`  FROM `wallets` WHERE `user_id` = '" . $id . "' AND `type` = 'Personal Care'";
    $result = mysqli_query($conn, $sql);
    $pers = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        // $pers = $row;
        $json['pers_total'] = $row['pers_total'];
    }

    // shop
    $sql = "SELECT SUM(amount) AS `shop_total`  FROM `wallets` WHERE `user_id` = '" . $id . "' AND `type` = 'Shopping'";
    $result = mysqli_query($conn, $sql);
    $shop = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        // $shop = $row;
        $json['shop_total'] = $row['shop_total'];
    }

    // sala
    $sql = "SELECT SUM(amount) AS `sala_total`  FROM `wallets` WHERE `user_id` = '" . $id . "' AND `type` = 'Salary'";
    $result = mysqli_query($conn, $sql);
    $sala = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        // $sala = $row;
        $json['sala_total'] = $row['sala_total'];
    }

    // inve
    $sql = "SELECT SUM(amount) AS `inve_total`  FROM `wallets` WHERE `user_id` = '" . $id . "' AND `type` = 'Invesment'";
    $result = mysqli_query($conn, $sql);
    $inve = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        // $inve = $row;
        $json['inve_total'] = $row['inve_total'];
    }

    // array_push($json, $food, $tran, $pers, $shop, $sala, $inve);

    // echo "<pre>";
    echo json_encode($json);
    // echo "</pre>";
}

if (isset($_POST['calendar_id'])) {
    # code...
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // $id = $_POST['calendar_id'];
    $id = 1;
    $json = array();

    // food
    $sql = "SELECT *  FROM `schedules` WHERE `user_id` = '" . $id . "'";
    $result = mysqli_query($conn, $sql);
    $food = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $json[] = $row;
    }

    // echo "<pre>";
    echo json_encode($json);
    // echo "</pre>";
}

?>