<?php
//  Database configuration
$host = "localhost:3306";
$db_name = "lpa_ecomms";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $db_name);

// Verify Connection
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);


$stmt = $conn->prepare("INSERT INTO products (name, price, quantity) VALUES (?, ?, ?)");
$stmt->bind_param("sdi", $name, $price, $quantity);
}
?>





