<?php
    require_once 'database/connection.php';
    require_once 'classes/user.php';

global $pdo;

session_start();
$getFromU = new User($pdo);

define("BASE_URL", "http://localhost/startup/");

?>