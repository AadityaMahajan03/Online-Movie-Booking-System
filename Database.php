<?php
// Retrieve connection details from environment variables or use defaults
$servername = getenv("DATABASE_HOST") ?: 'localhost';
$username   = getenv("DATABASE_USER") ?: 'root';
$password   = getenv("DATABASE_PASSWORD") ?: 'aaditya0324';
$dbname     = getenv("DATABASE_NAME") ?: 'movie';
$port       = getenv("DATABASE_PORT") ?: 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
    die("Could not connect to MySQL: " . mysqli_connect_error());
}
?>
