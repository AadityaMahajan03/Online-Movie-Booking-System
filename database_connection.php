<?php
// database_connection.php

// Retrieve connection details from environment variables or use defaults
$host     = getenv("DATABASE_HOST") ?: 'localhost';
$dbname   = getenv("DATABASE_NAME") ?: 'movie';
$user     = getenv("DATABASE_USER") ?: 'root';
$password = getenv("DATABASE_PASSWORD") ?: '';
$port     = getenv("DATABASE_PORT") ?: 3306;

// Create DSN string including port
$dsn = "mysql:host=$host;port=$port;dbname=$dbname";

try {
    $connect = new PDO($dsn, $user, $password);
    // Set error mode to exception for easier debugging
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
