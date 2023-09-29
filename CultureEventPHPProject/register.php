<?php
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'cultureevent');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);

if ($link === false) {
    die("ERROR - Couldn't connect." . mysqli_connect_error());
}

mysqli_select_db($link, 'cultureevent');

$FullName = $_POST['FullName'];
$Phone = $_POST['Phone'];
$CosmeticCenter = $_POST['CosmeticCenter'];
$Address = $_POST['Address'];
$Email = $_POST['Email'];

if (empty($FullName) || empty($Phone) || empty($CosmeticCenter) || empty($Address) || empty($Email)) {
    echo "Please fill in all required fields.";
} else {
    $query = "INSERT INTO users (FullName, Phone, CosmeticCenter, Address, Email) VALUES ('$FullName', '$Phone', '$CosmeticCenter', '$Address', '$Email')";

    if (mysqli_query($link, $query)) {
        header('Location: registration_success.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
}

mysqli_close($link);
