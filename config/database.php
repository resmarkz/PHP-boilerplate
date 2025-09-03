<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "php-boilerplate";
$dsn = "mysql:host=$host;dbname=$db_name;user=$username;password=$password";

try {
    $conn = new PDO($dsn);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    die("Database Connection Failed!: " . $e->getMessage());
}
