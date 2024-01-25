<?php
$username = "root"; // Khai báo tên username
$password = ""; // Khai báo password
$server = "localhost"; // Khai báo tên server
$dbname = "web-ban-hang"; // Khai báo database

// Kết nối database
$mysqli = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_errno) {
    echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
    exit();
}

mysqli_set_charset($mysqli, 'UTF8');
?>
