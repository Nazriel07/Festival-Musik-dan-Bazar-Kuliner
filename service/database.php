<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "festival musik dan bazar kuliner";

$DB =mysqli_connect($hostname, $username, $password, $database_name);

if($DB->connect_error) {
    echo "koneksi database rusak";
    die("error!");
}
?>