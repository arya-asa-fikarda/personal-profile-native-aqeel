<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "personal-profile-native-aqeel";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";

// Membuat Jalur Global (Base URL)
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/personal-profile-native-aqeel/";
?>