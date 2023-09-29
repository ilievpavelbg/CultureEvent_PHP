<?php
if (!isset($conn)) {

    define('DB_USER','root');
    define('DB_PWD','');
    define('DB_HOST','localhost');
    define('DB_NAME','cultureevent');

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);

    if ($conn === false) {
       die("ERROR - Couldn't connect.".mysqli_connect_error());
    }
}
$baseURL = "http://localhost/cultureeventphpproject/";

$sql = "SELECT * FROM navigation_menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo '<li class="nav-item active">';
        echo '<a class="nav-link ml-2 text-primary" href="' . $baseURL . $row["link"] . '">' . $row["label"] . '</a>';
        echo '</li>';
        echo '<div class="vl"></div>';
    }

} else {
    echo "No menu items found.";
}
