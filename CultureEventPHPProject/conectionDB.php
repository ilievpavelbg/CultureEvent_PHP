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
