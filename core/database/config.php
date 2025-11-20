<?php
$dsn  = 'mysql:host=localhost;dbname=startup'; // host and database name
$user = 'root';                                 // MySQL username
$pass = '';                                     // MySQL password

try {
    $pdo = new PDO($dsn, $user, $pass);        // create PDO connection
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // error mode
} catch(PDOException $e) {
    echo 'Connection error: ' . $e->getMessage();
}
?>
