<?php
// Fetch connection settings from environment variables (with defaults as fallback)
$servername = getenv("DATABASE_HOST") ?: 'localhost';
$username   = getenv("DATABASE_USER") ?: 'root';
$password   = getenv("DATABASE_PASSWORD") ?: '';
$dbname     = getenv("DATABASE_NAME") ?: 'movie';
$port       = getenv("DATABASE_PORT") ?: 3306;

// Create connection with mysqli including port
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
    die("Could not connect to MySQL: " . mysqli_connect_error());
}
?>
