<?php
DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'netwerk');
$connect = new mysqli(DB_HOST, DB_USERNAME,
DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}

?>
