<?php
    # Mysql information
    define('DB_HOST', '127.0.0.1');
    define('DB_NAME', 'simple_auth');
    define('DB_USER', 'iman');
    define('DB_PASS', 'Mysql@123');
    
    # General information
    $debug = true;
    define('SITE_NAME', 'Simple Authentication');
    define('SITE_URL', 'http://localhost/pure-php-autentication');
    define('AUTHOR', 'Iman Fattahi');

    if ($debug === true) {
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }