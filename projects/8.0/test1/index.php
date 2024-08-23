<?php

echo "<h1>Hello, From Project test1. <span style='color:red'> PHP_VERSION: ". PHP_VERSION . "</span></h1>";

$servername = "mysql-8.0"; // Use the service name as the host
$username = "root";
$password = "root";
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully with database";