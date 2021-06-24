<?php
$host="localhost";
$user="root";
$password="root";
$db_name="nominativi";

$mysqli = new mysqli($host, $user, $password, $db_name);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
// echo "Connected successfully";