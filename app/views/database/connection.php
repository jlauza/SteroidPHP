<?php
$host = getenv('DB_HOST'); // e.g., 'localhost' or '127.0.0.1'
$dbname = getenv('DB_DATABASE'); // your database name
$username = getenv('DB_USERNAME'); // your database username
$password = getenv('DB_PASSWORD'); // your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'Connected to the database successfully using PDO!';
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
