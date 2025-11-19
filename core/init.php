<?php
require_once __DIR__ . '/database/connection.php';
require_once __DIR__ . '/classes/user.php';

global $pdo;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| BASE_URL CONFIGURATION
|--------------------------------------------------------------------------
| Use an absolute URL instead of a relative one.
| This prevents broken links when loading files inside /admin/ or /pages/.
*/
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://localhost/startup/'); // ✅ Use absolute path
}

$getFromU = new User($pdo);
?>
