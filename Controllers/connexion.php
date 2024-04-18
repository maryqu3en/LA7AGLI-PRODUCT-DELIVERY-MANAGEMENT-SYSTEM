<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Livraison";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

require_once 'session.php';