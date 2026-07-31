<?php

$host = "localhost";
$port = "5432";
$dbname = "lab_login";
$username = "postgres";
$password = "miajas";

try {

    $conn = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $username,
        $password
    );

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    echo "Database Connected Successfully";
} catch(PDOException $e) {

    die("Database Connection Failed: " . $e->getMessage());

}

?>