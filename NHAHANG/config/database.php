<?php
session_start();

define('DB_HOST', 'sql212.infinityfree.com');
define('DB_USER', 'if0_35687073');
define('DB_PASS', 'EiipQeAmv90');
define('DB_NAME', 'if0_35687073_nhahang');
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '');

spl_autoload_register(function ($className) {
    require_once BASE_PATH . "app/models/$className.php";
});